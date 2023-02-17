<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2dxWVZhRUw3RzQyOTVMVXl5Um84NnhZa0hYMVFyYXVjcW5EYmVHWGE2ZzhTSjkzMklRTEt1eHhRMzhRREFHbXB2Z2JTWTFCaVR6SGZCSTlUS0F4bUV5SHNLZ0wxK0Q1MHRhTGhVeUNxeng3RUdZT0wrc3o1ZVgxdFhOcUUxUm13PQ==*/
namespace Aws\Api\Parser;

use Aws\Api\DateTimeResult;
use Aws\Api\Shape;

/**
 * @internal Implements standard JSON parsing.
 */
class JsonParser
{
    public function parse(Shape $shape, $value)
    {
        if ($value === null) {
            return $value;
        }

        switch ($shape['type']) {
            case 'structure':
                if (isset($shape['document']) && $shape['document']) {
                    return $value;
                }
                $target = [];
                foreach ($shape->getMembers() as $name => $member) {
                    $locationName = $member['locationName'] ?: $name;
                    if (isset($value[$locationName])) {
                        $target[$name] = $this->parse($member, $value[$locationName]);
                    }
                }
                if (isset($shape['union'])
                    && $shape['union']
                    && is_array($value)
                    && empty($target)
                ) {
                    foreach ($value as $key => $val) {
                        $target['Unknown'][$key] = $val;
                    }
                }
                return $target;

            case 'list':
                $member = $shape->getMember();
                $target = [];
                foreach ($value as $v) {
                    $target[] = $this->parse($member, $v);
                }
                return $target;

            case 'map':
                $values = $shape->getValue();
                $target = [];
                foreach ($value as $k => $v) {
                    $target[$k] = $this->parse($values, $v);
                }
                return $target;

            case 'timestamp':
                return DateTimeResult::fromTimestamp(
                    $value,
                    !empty($shape['timestampFormat']) ? $shape['timestampFormat'] : null
                );

            case 'blob':
                return base64_decode($value);

            default:
                return $value;
        }
    }
}


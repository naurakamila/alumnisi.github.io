<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN0dFUzBxenV2dUl5c1NVbHNLRUVkeVBLaTRNeDcrRXdhekRIM1l1U2pBbEYyTkRvaW0zOGEwQ1RTOW1iZWFnOXBNNWIzSjc0Z2dWUmUrV1A5MXZMVDJGUjROSExaQzRGUVVYZ0dGeHJtSHRaQi9rZ25ZS0pIeGlYVk1GTG45VGdJPQ==*/
namespace Aws\Api\Serializer;

use Aws\Api\Shape;
use Aws\Api\ListShape;

/**
 * @internal
 */
class Ec2ParamBuilder extends QueryParamBuilder
{
    protected function queryName(Shape $shape, $default = null)
    {
        return ($shape['queryName']
            ?: ucfirst(@$shape['locationName'] ?: ""))
                ?: $default;
    }

    protected function isFlat(Shape $shape)
    {
        return false;
    }

    protected function format_list(
        ListShape $shape,
        array $value,
        $prefix,
        &$query
    ) {
        // Handle empty list serialization
        if (!$value) {
            $query[$prefix] = false;
        } else {
            $items = $shape->getMember();
            foreach ($value as $k => $v) {
                $this->format($items, $v, $prefix . '.' . ($k + 1), $query);
            }
        }
    }
}

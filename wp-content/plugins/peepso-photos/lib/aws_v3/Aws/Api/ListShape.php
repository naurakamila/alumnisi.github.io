<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNHhqTDB0L1g1STlOeVVnbG4xWVNZU3NZWFpyT0Q5OXh5akU4b2dUVlVRalRtNHdDWkVXYTZqaloyemJJSUJyY3JwdEU2NzhxRkpiUnA5SDQ4eXVkdnlsMWNQWlRJMENoeUFIMmFlemRPTWFrNUNGLzRSOVlMb3BKLzlKeWhqWjdrPQ==*/
namespace Aws\Api;

/**
 * Represents a list shape.
 */
class ListShape extends Shape
{
    private $member;

    public function __construct(array $definition, ShapeMap $shapeMap)
    {
        $definition['type'] = 'list';
        parent::__construct($definition, $shapeMap);
    }

    /**
     * @return Shape
     * @throws \RuntimeException if no member is specified
     */
    public function getMember()
    {
        if (!$this->member) {
            if (!isset($this->definition['member'])) {
                throw new \RuntimeException('No member attribute specified');
            }
            $this->member = Shape::create(
                $this->definition['member'],
                $this->shapeMap
            );
        }

        return $this->member;
    }
}

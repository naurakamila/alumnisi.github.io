<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNFlVclJ2NDlSS0F2eTFQZmFITjN6N0c4bVRJWmYzRXlZTjJ2UGUyLzlvU1YzcXo3QzJCbllVZ1B2KzJ4dHhXemp3SHFRUVorQVNLZWRudzMzdlZUcExuNGJnWGJiYTY0cWFVUDdyMGgwTkZEZVViUE1ZaElkM09KMGZvK24zNnhFPQ==*/
namespace Aws\DynamoDb;

/**
 * Special object to represent a DynamoDB set (SS/NS/BS) value.
 */
class SetValue implements \JsonSerializable, \Countable, \IteratorAggregate
{
    /** @var array Values in the set as provided. */
    private $values;

    /**
     * @param array  $values Values in the set.
     */
    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * Get the values formatted for PHP and JSON.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->values;
    }

    /**
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->values);
    }

    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new \ArrayIterator($this->values);
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}

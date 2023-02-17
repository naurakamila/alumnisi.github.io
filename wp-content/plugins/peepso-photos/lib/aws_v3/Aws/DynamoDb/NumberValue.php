<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDNSLzRhdnhoZ1VKcFhmaDZib1BZMTVaY05QZEd1d0E1NlNCV1RIL2loZjVySEQwL29iaWYwWnMwZnAxR243S1gzZS9FOUFINUJ6RG9HS2d4dHdTeC8va2pHbUVmQnVaUzQ0RytQdVViOWwrUFBIR0Y5L29yVGlBdHdsR3lLa25zPQ==*/
namespace Aws\DynamoDb;

/**
 * Special object to represent a DynamoDB Number (N) value.
 */
class NumberValue implements \JsonSerializable
{
    /** @var string Number value. */
    private $value;

    /**
     * @param string|int|float $value A number value.
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}

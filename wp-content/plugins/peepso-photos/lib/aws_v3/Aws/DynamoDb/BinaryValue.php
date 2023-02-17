<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmxqNTV6RlhXdHpvdHZVc2ZEVlFBN3g0QjduRU5wZU1XNVlsT0ZMRWFpWG8zZTJuUWpnUXkwOVo2MFQxdE5pK2tRZElubG43Tm0xWTY1b2xRMXFNbWY0cE1GMFZ6em01OHVvVFh6dVg3cHM1aDFNeTBycXhnbENMNHcwN2phSkEwPQ==*/
namespace Aws\DynamoDb;

use GuzzleHttp\Psr7;

/**
 * Special object to represent a DynamoDB binary (B) value.
 */
class BinaryValue implements \JsonSerializable
{
    /** @var string Binary value. */
    private $value;

    /**
     * @param mixed $value A binary value compatible with Guzzle streams.
     *
     * @see GuzzleHttp\Stream\Stream::factory
     */
    public function __construct($value)
    {
        if (!is_string($value)) {
            $value = Psr7\Utils::streamFor($value);
        }
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

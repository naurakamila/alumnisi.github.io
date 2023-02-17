<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNWRJRjN6RUFoUnpuN1kydVNlcHlEN1RpZGdoSERJV0FqOTBOVHpXWWZDL3doZWI4LzZrQjV6RFNVaUdjOU1aMVVNck5sVXJoS05lSnIyZzJITm1CTFYyenVFNVk0eHZ4VjByc2ZUMlBFaTNhU05QRGppZFZTblJmUmtIM1MvZlcrSUg5ZElrYS9qa1lEZm9uSmZpNTVu*/
namespace Aws\Arn;

/**
 * This class represents an S3 Object bucket ARN, which is in the
 * following format:
 *
 * @internal
 */
class ObjectLambdaAccessPointArn extends AccessPointArn
{
    /**
     * Parses a string into an associative array of components that represent
     * a ObjectLambdaAccessPointArn
     *
     * @param $string
     * @return array
     */
    public static function parse($string)
    {
        $data = parent::parse($string);
        return parent::parseResourceTypeAndId($data);
    }

    /**
     *
     * @param array $data
     */
    protected static function validate(array $data)
    {
        parent::validate($data);
        self::validateRegion($data, 'S3 Object Lambda ARN');
        self::validateAccountId($data, 'S3 Object Lambda ARN');
    }
}

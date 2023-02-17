<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2k2bUpPd0lGVUFHWm4vMWxRYzNkQWlGY1pmNVE0MHBObUp0Sjh3cm52bGFpYTFYMmY0MzduUENObElzNUpHZGhqSnBOd0JENG5Ca0swVEU5OWxiUXhySzRKU0hkZ3hjaXhQUHdway9OZnphQ0dqS2VhUnhNbGhXRUVlbElEazhCTjVEUUVTNFpEY2VLajQvcTdyZlZQ*/
namespace Aws\S3\Crypto;

use Aws\Crypto\MaterialsProviderInterfaceV2;

trait CryptoParamsTraitV2
{
    use CryptoParamsTrait;

    protected function getMaterialsProvider(array $args)
    {
        if ($args['@MaterialsProvider'] instanceof MaterialsProviderInterfaceV2) {
            return $args['@MaterialsProvider'];
        }

        throw new \InvalidArgumentException('An instance of MaterialsProviderInterfaceV2'
            . ' must be passed in the "MaterialsProvider" field.');
    }
}

<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjdjUUNydEpEblBlaHZjQUJaSFk5b2NPRk9kWHdIWGNteTZ3MWRZRFM0WERVU1FIMnViQk9SUFdNL1FiWEt0VVZGclRTc21DN0VnQTJLNGVCSmNVclc3U1BBNTI5d1ExWFRWazR6Y2hYZVh5MklqMnE2QnFYaVZxd2ZwbzRGbDhJPQ==*/
namespace Aws\Sts\RegionalEndpoints;

class Configuration implements ConfigurationInterface
{
    private $endpointsType;

    public function __construct($endpointsType)
    {
        $this->endpointsType = strtolower($endpointsType);
        if (!in_array($this->endpointsType, ['legacy', 'regional'])) {
            throw new \InvalidArgumentException(
                "Configuration parameter must either be 'legacy' or 'regional'."
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpointsType()
    {
        return $this->endpointsType;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'endpoints_type' => $this->getEndpointsType()
        ];
    }
}

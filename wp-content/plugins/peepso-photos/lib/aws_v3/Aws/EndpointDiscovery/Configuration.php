<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjdjUUNydEpEblBlaHZjQUJaSFk5b2NPRk9kWHdIWGNteTZ3MWRZRFM0WERVU1FIMnViQk9SUFdNL1FiWEt0VVZGclRTc21DN0VnQTJLNGVCSmNVclc3U1BBNTI5d1ExWFRWazR6Y2hYZVh5MklqMnE2QnFYaVZxd2ZwbzRGbDhJPQ==*/
namespace Aws\EndpointDiscovery;

class Configuration implements ConfigurationInterface
{
    private $cacheLimit;
    private $enabled;

    public function __construct($enabled, $cacheLimit = 1000)
    {
        $this->cacheLimit = filter_var($cacheLimit, FILTER_VALIDATE_INT);
        if ($this->cacheLimit == false || $this->cacheLimit < 1) {
            throw new \InvalidArgumentException(
                "'cache_limit' value must be a positive integer."
            );
        }

        // Unparsable $enabled flag errs on the side of disabling endpoint discovery
        $this->enabled = filter_var($enabled, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheLimit()
    {
        return $this->cacheLimit;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'enabled' => $this->isEnabled(),
            'cache_limit' => $this->getCacheLimit()
        ];
    }
}

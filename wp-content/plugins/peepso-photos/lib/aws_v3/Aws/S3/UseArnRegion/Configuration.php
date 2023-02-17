<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjdjUUNydEpEblBlaHZjQUJaSFk5b2NPRk9kWHdIWGNteTZ3MWRZRFM0WERVU1FIMnViQk9SUFdNL1FiWEt0VVZGclRTc21DN0VnQTJLNGVCSmNVclc3U1BBNTI5d1ExWFRWazR6Y2hYZVh5MklqMnE2QnFYaVZxd2ZwbzRGbDhJPQ==*/
namespace Aws\S3\UseArnRegion;

use Aws;
use Aws\S3\UseArnRegion\Exception\ConfigurationException;

class Configuration implements ConfigurationInterface
{
    private $useArnRegion;

    public function __construct($useArnRegion)
    {
        $this->useArnRegion = Aws\boolean_value($useArnRegion);
        if (is_null($this->useArnRegion)) {
            throw new ConfigurationException("'use_arn_region' config option"
                . " must be a boolean value.");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isUseArnRegion()
    {
        return $this->useArnRegion;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'use_arn_region' => $this->isUseArnRegion(),
        ];
    }
}

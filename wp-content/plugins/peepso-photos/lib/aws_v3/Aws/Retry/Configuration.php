<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjdjUUNydEpEblBlaHZjQUJaSFk5b2NPRk9kWHdIWGNteTZ3MWRZRFM0WERVU1FIMnViQk9SUFdNL1FiWEt0VVZGclRTc21DN0VnQTJLNGVCSmNVclc3U1BBNTI5d1ExWFRWazR6Y2hYZVh5MklqMnE2QnFYaVZxd2ZwbzRGbDhJPQ==*/
namespace Aws\Retry;

use Aws\Retry\Exception\ConfigurationException;

class Configuration implements ConfigurationInterface
{
    private $mode;
    private $maxAttempts;
    private $validModes = [
        'legacy',
        'standard',
        'adaptive'
    ];

    public function __construct($mode = 'legacy', $maxAttempts = 3)
    {
        $mode = strtolower($mode);
        if (!in_array($mode, $this->validModes)) {
            throw new ConfigurationException("'{$mode}' is not a valid mode."
                . " The mode has to be 'legacy', 'standard', or 'adaptive'.");
        }
        if (!is_numeric($maxAttempts)
            || intval($maxAttempts) != $maxAttempts
            || $maxAttempts < 1
        ) {
            throw new ConfigurationException("The 'maxAttempts' parameter has"
                . " to be an integer >= 1.");
        }

        $this->mode = $mode;
        $this->maxAttempts = intval($maxAttempts);
    }

    /**
     * {@inheritdoc}
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxAttempts()
    {
        return $this->maxAttempts;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'mode' => $this->getMode(),
            'max_attempts' => $this->getMaxAttempts(),
        ];
    }
}

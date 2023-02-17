<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUdHRUtka2wzbUFPUk1HM3BzMWVoYTJueW82MEJkcFl3eXF2MkRpU1cxNWptblYvWHJFV0RwcTZrVnJ3UWw1YVhQTU1LWkxOODB1VTJnV0M3aW5FYzduTW51TS83NHF6OFZlY1ludml4cGUwNjRkdGFUU2ZjWmlaREd6emFNOE9tZWFoYTlmWFg0dkhPNFhrbEcwZi92*/
namespace Aws\DefaultsMode;

/**
 * Provides access to defaultsMode configuration
 */
interface ConfigurationInterface
{
    /**
     * Returns the configuration mode. Available modes include 'legacy', 'standard', and
     * 'adapative'.
     *
     * @return string
     */
    public function getMode();

    /**
     * Returns the sts regional endpoints option
     *
     * @return bool
     */
    public function getStsRegionalEndpoints();

    /**
     * Returns the s3 us-east-1 regional endpoints option
     *
     * @return bool
     */
    public function getS3UsEast1RegionalEndpoints();

    /**
     * Returns the connection timeout in milliseconds
     *
     * @return int
     */
    public function getConnectTimeoutInMillis();

    /**
     * Returns the http request timeout in milliseconds
     *
     * @return int
     */
    public function getHttpRequestTimeoutInMillis();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}

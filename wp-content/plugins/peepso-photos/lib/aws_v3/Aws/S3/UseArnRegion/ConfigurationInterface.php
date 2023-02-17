<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUdHRUtka2wzbUFPUk1HM3BzMWVoYTJueW82MEJkcFl3eXF2MkRpU1cxNWptblYvWHJFV0RwcTZrVnJ3UWw1YVhQTU1LWkxOODB1VTJnV0M3aW5FYzduTW51TS83NHF6OFZlY1ludml4cGUwNjRkdGFUU2ZjWmlaREd6emFNOE9tZWFoYTlmWFg0dkhPNFhrbEcwZi92*/
namespace Aws\S3\UseArnRegion;

interface ConfigurationInterface
{
    /**
     * Returns whether or not to use the ARN region if it differs from client
     *
     * @return bool
     */
    public function isUseArnRegion();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}

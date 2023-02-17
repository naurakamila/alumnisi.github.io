<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUdHRUtka2wzbUFPUk1HM3BzMWVoYTJueW82MEJkcFl3eXF2MkRpU1cxNWptblYvWHJFV0RwcTZrVnJ3UWw1YVhQTU1LWkxOODB1VTJnV0M3aW5FYzduTW51TS83NHF6OFZlY1ludml4cGUwNjRkdGFUU2ZjWmlaREd6emFNOE9tZWFoYTlmWFg0dkhPNFhrbEcwZi92*/
namespace Aws\Endpoint\UseFipsEndpoint;

interface ConfigurationInterface
{
    /**
     * Returns whether or not to use a FIPS endpoint
     *
     * @return bool
     */
    public function isUseFipsEndpoint();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}

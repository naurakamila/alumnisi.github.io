<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUdHRUtka2wzbUFPUk1HM3BzMWVoYTJueW82MEJkcFl3eXF2MkRpU1cxNWptblYvWHJFV0RwcTZrVnJ3UWw1YVhQTU1LWkxOODB1VTJnV0M3aW5FYzduTW51TS83NHF6OFZlY1ludml4cGUwNjRkdGFUU2ZjWmlaREd6emFNOE9tZWFoYTlmWFg0dkhPNFhrbEcwZi92*/
namespace Aws\EndpointDiscovery;

/**
 * Provides access to endpoint discovery configuration options:
 * 'enabled', 'cache_limit'
 */
interface ConfigurationInterface
{
    /**
     * Checks whether or not endpoint discovery is enabled.
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Returns the cache limit, if available.
     *
     * @return string|null
     */
    public function getCacheLimit();

    /**
     * Returns the configuration as an associative array
     *
     * @return array
     */
    public function toArray();
}

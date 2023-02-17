<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjFSQmkrUm9GRDVjOTltUldQc0VKTEYwMkc3ZW0vcTZudFBEZjFSQ29DNmVncVFDNjlEeW91bnBtak5ieEowaTBuVHp6UnZ4ZCtSbmdOZERDTytNVDEzT3V6VHRCbG1rQURRVml5MW5wakc5YVVSSDBrSC8vZjlsamdpcjJSY2ZVPQ==*/
namespace Aws;

/**
 * Represents a simple cache interface.
 */
interface CacheInterface
{
    /**
     * Get a cache item by key.
     *
     * @param string $key Key to retrieve.
     *
     * @return mixed|null Returns the value or null if not found.
     */
    public function get($key);

    /**
     * Set a cache key value.
     *
     * @param string $key   Key to set
     * @param mixed  $value Value to set.
     * @param int    $ttl   Number of seconds the item is allowed to live. Set
     *                      to 0 to allow an unlimited lifetime.
     */
    public function set($key, $value, $ttl = 0);

    /**
     * Remove a cache key.
     *
     * @param string $key Key to remove.
     */
    public function remove($key);
}

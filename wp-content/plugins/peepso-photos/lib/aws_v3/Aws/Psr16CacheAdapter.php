<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNlNGcnZmTHIxdm9ZcFJRREE0dmF2ck1OeUZ5NFlNMCtJbE9GQ2hJRytIUjd1VmxsbGh6dlFPREF3UXBObjVjOFRIbmtuVFBmWm5aVW5JYjA3bHJkVlZBZ2ZEODArMUlHOVIzc1BPR08wNURMZTdtanRFL0xaUEpacEZ1TTExQVZvPQ==*/
namespace Aws;

use Psr\SimpleCache\CacheInterface as SimpleCacheInterface;

class Psr16CacheAdapter implements CacheInterface
{
    /** @var SimpleCacheInterface */
    private $cache;

    public function __construct(SimpleCacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function get($key)
    {
        return $this->cache->get($key);
    }

    public function set($key, $value, $ttl = 0)
    {
        $this->cache->set($key, $value, $ttl);
    }

    public function remove($key)
    {
        $this->cache->delete($key);
    }
}

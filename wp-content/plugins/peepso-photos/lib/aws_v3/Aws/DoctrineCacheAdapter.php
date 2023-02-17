<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNEJiU0xUR2pkNTRmYVR5MHpXYzdya3JHTWVFS3VsZGRKeFU4Y3FQcE82YmdpNXQxZlRqZE1OWDJrRjZKcGlGRFFrUnN4eHE5UkxhZ3RYUWZ4Qm9COUE4TCtmc0N5TmN4a0hhRUZFc2RYM3pscHUyL2RNeTM5VDNZODlqUmd1QXYzWVE4azlZVzUrRmtBZVFKYUQ5Smdq*/
namespace Aws;

use Doctrine\Common\Cache\Cache;

class DoctrineCacheAdapter implements CacheInterface, Cache
{
    /** @var Cache */
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function get($key)
    {
        return $this->cache->fetch($key);
    }

    public function fetch($key)
    {
        return $this->get($key);
    }

    public function set($key, $value, $ttl = 0)
    {
        return $this->cache->save($key, $value, $ttl);
    }

    public function save($key, $value, $ttl = 0)
    {
        return $this->set($key, $value, $ttl);
    }

    public function remove($key)
    {
        return $this->cache->delete($key);
    }

    public function delete($key)
    {
        return $this->remove($key);
    }

    public function contains($key)
    {
        return $this->cache->contains($key);
    }

    public function getStats()
    {
        return $this->cache->getStats();
    }
}

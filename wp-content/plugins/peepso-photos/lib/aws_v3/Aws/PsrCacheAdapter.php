<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNlhFM2VoQ1UxT09GQmRIRmFEWW9XelNOTG1PdzlQQVYvbCtzNmR4TkVlek1zMWhmM1RSZTRBS1FZRzNoMVVyZ1ZhK0xxaHM4cnFwTkhPdUw2UW03d0VMZGZqV0pJbllDSHU3SnlwZVowYTBuZkF5UVJqaG5mKzNGdHlza3YzK2RRPQ==*/
namespace Aws;

use Psr\Cache\CacheItemPoolInterface;

class PsrCacheAdapter implements CacheInterface
{
    /** @var CacheItemPoolInterface */
    private $pool;

    public function __construct(CacheItemPoolInterface $pool)
    {
        $this->pool = $pool;
    }

    public function get($key)
    {
        $item = $this->pool->getItem($key);

        return $item->isHit() ? $item->get() : null;
    }

    public function set($key, $value, $ttl = 0)
    {
        $item = $this->pool->getItem($key);
        $item->set($value);
        if ($ttl > 0) {
            $item->expiresAfter($ttl);
        }

        $this->pool->save($item);
    }

    public function remove($key)
    {
        $this->pool->deleteItem($key);
    }
}

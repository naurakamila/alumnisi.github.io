<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNW9sYUw5cHF2MUlzUW9KZzVLekwvVzRLQzZaMXQ4emVqWm9RaTBIZTVNL0pLZ0p2VGJsUjVFQTlvSDhwZHBKZzNQT2l6TjhDR1kxb3F5SEdNc2xSNDJWOFBEUUxEVW44bjNpY3pjdnRPaU5naGtxOU40eWhXRUpGUzdvcGUzc0NOSzFQTlJpTlRDZFBTNmFab0FHN3RB*/
namespace Aws\Endpoint;

/**
 * Provides endpoints based on an endpoint pattern configuration array.
 */
class PatternEndpointProvider
{
    /** @var array */
    private $patterns;

    /**
     * @param array $patterns Hash of endpoint patterns mapping to endpoint
     *                        configurations.
     */
    public function __construct(array $patterns)
    {
        $this->patterns = $patterns;
    }

    public function __invoke(array $args = [])
    {
        $service = isset($args['service']) ? $args['service'] : '';
        $region = isset($args['region']) ? $args['region'] : '';
        $keys = ["{$region}/{$service}", "{$region}/*", "*/{$service}", "*/*"];

        foreach ($keys as $key) {
            if (isset($this->patterns[$key])) {
                return $this->expand(
                    $this->patterns[$key],
                    isset($args['scheme']) ? $args['scheme'] : 'https',
                    $service,
                    $region
                );
            }
        }

        return null;
    }

    private function expand(array $config, $scheme, $service, $region)
    {
        $config['endpoint'] = $scheme . '://'
            . strtr($config['endpoint'], [
                '{service}' => $service,
                '{region}'  => $region
            ]);

        return $config;
    }
}

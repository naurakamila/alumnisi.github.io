<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNy9USHZGZzZMR0hpYys4SW9aQmcxTjdKUGU4QkxoQmxFNFZTWEhEdkFxTkNxYkFpNHVMcmNkVTMyN3VJbnBLT0xJQ0ErVHJvRkJtVldjUHkwQno0VTAwN0J2WlhqVXZ3QTRnc0E3SnppNHNIT01WdGI3WmFPaGlxV1hzcm45ZHZCWVlvS1hobDlqOE4xaU5HWlFBcnNh*/
namespace Aws;

use Aws\Api\Service;
use Psr\Http\Message\RequestInterface;
use Psr\Log\InvalidArgumentException;

/**
 * Used to update the host based on a modeled endpoint trait
 *
 * IMPORTANT: this middleware must be added after the "build" step.
 *
 * @internal
 */
class EndpointParameterMiddleware
{
    /** @var callable */
    private $nextHandler;

    /** @var Service */
    private $service;

    /**
     * Create a middleware wrapper function
     *
     * @param Service $service
     * @param array $args
     * @return \Closure
     */
    public static function wrap(Service $service)
    {
        return function (callable $handler) use ($service) {
            return new self($handler, $service);
        };
    }

    public function __construct(callable $nextHandler, Service $service)
    {
        $this->nextHandler = $nextHandler;
        $this->service = $service;
    }

    public function __invoke(CommandInterface $command, RequestInterface $request)
    {
        $nextHandler = $this->nextHandler;

        $operation = $this->service->getOperation($command->getName());

        if (!empty($operation['endpoint']['hostPrefix'])) {
            $prefix = $operation['endpoint']['hostPrefix'];

            // Captures endpoint parameters stored in the modeled host.
            // These are denoted by enclosure in braces, i.e. '{param}'
            preg_match_all("/\{([a-zA-Z0-9]+)}/", $prefix, $parameters);

            if (!empty($parameters[1])) {

                // Captured parameters without braces stored in $parameters[1],
                // which should correspond to members in the Command object
                foreach ($parameters[1] as $index => $parameter) {
                    if (empty($command[$parameter])) {
                        throw new \InvalidArgumentException(
                            "The parameter '{$parameter}' must be set and not empty."
                        );
                    }

                    // Captured parameters with braces stored in $parameters[0],
                    // which are replaced by their corresponding Command value
                    $prefix = str_replace(
                        $parameters[0][$index],
                        $command[$parameter],
                        $prefix
                    );
                }
            }

            $uri = $request->getUri();
            $host = $prefix . $uri->getHost();
            if (!\Aws\is_valid_hostname($host)) {
                throw new \InvalidArgumentException(
                    "The supplied parameters result in an invalid hostname: '{$host}'."
                );
            }
            $request = $request->withUri($uri->withHost($host));
        }

        return $nextHandler($command, $request);
    }
}

<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNkJIekFyc2J1eU9pcXowUmhQcy9CcU9laDdUakdLRE00ZUtLMlJnYmY0WHBKOGxBQnpWc09JWUZNZTRTTUtYOUJVcXMxN0FJcG81bjA2Y0ZIamFId3NnNExObHFnTWVUVlRBYmlEMmlHSHgyNjIrVllSU3pVeks0OU8vemk4R2RpWjZ2ODl0U1BtRElmZEdiOGlsMEVT*/
namespace Aws\S3;

use Aws\CommandInterface;
use Aws\ResultInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Injects ObjectURL into the result of the PutObject operation.
 *
 * @internal
 */
class PutObjectUrlMiddleware
{
    /** @var callable  */
    private $nextHandler;

    /**
     * Create a middleware wrapper function.
     *
     * @return callable
     */
    public static function wrap()
    {
        return function (callable $handler) {
            return new self($handler);
        };
    }

    /**
     * @param callable $nextHandler Next handler to invoke.
     */
    public function __construct(callable $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    public function __invoke(CommandInterface $command, RequestInterface $request = null)
    {
        $next = $this->nextHandler;
        return $next($command, $request)->then(
            function (ResultInterface $result) use ($command) {
                $name = $command->getName();
                switch ($name) {
                    case 'PutObject':
                    case 'CopyObject':
                        $result['ObjectURL'] = isset($result['@metadata']['effectiveUri'])
                            ? $result['@metadata']['effectiveUri']
                            : null;
                        break;
                    case 'CompleteMultipartUpload':
                        $result['ObjectURL'] = $result['Location'];
                        break;
                }
                return $result;
            }
        );
    }
}

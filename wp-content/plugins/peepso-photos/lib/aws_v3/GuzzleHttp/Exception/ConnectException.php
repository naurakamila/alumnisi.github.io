<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNENOanlDSmwxOXNzRHZBb3NZMVpMRWpJQnQ5UzNFK25xaHI0eXIvZlI5M2VvNmhxS2kvenM5dnVqMk9nN3V5UVJ0UGJac2kydmdLQmZnS3laSjlnaW9jWUtBRitZc2cyZThOK1JzY0RLWENhaTJzNG5CWUJwdmNGcHJ3VnhYcUNjPQ==*/
namespace GuzzleHttp\Exception;

use Psr\Http\Message\RequestInterface;

/**
 * Exception thrown when a connection cannot be established.
 *
 * Note that no response is present for a ConnectException
 */
class ConnectException extends RequestException
{
    public function __construct(
        $message,
        RequestInterface $request,
        \Exception $previous = null,
        array $handlerContext = []
    ) {
        parent::__construct($message, $request, null, $previous, $handlerContext);
    }

    /**
     * @return null
     */
    public function getResponse()
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasResponse()
    {
        return false;
    }
}

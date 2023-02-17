<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmxtTDB3Ym1uMjdjZkJReWc5Y0dUQ0prTWc1WU9vckI4MWN1SzZQcklGeWJ2Q003cCtCTytCZWpVUEhJZ2wreUNsTHZJazQ0T2FKUFZpYm1TR1FDek10WGpMWXZCd3hxZFBZSkU3TGhEWVdPRGlvMWFWYUhBZzlDbFcrSjBzRFFpeXl1SjlOSXhxMUNickZETzVMQ3VV*/
namespace GuzzleHttp\Exception;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Exception when an HTTP error occurs (4xx or 5xx error)
 */
class BadResponseException extends RequestException
{
    public function __construct(
        $message,
        RequestInterface $request,
        ResponseInterface $response = null,
        \Exception $previous = null,
        array $handlerContext = []
    ) {
        if (null === $response) {
            @trigger_error(
                'Instantiating the ' . __CLASS__ . ' class without a Response is deprecated since version 6.3 and will be removed in 7.0.',
                E_USER_DEPRECATED
            );
        }
        parent::__construct($message, $request, $response, $previous, $handlerContext);
    }
}

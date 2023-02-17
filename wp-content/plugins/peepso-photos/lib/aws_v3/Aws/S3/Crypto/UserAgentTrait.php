<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNzIwanA5eUlnVHc0N09QRk9SeWJpYUpwNVdIdE1kaGpxWjZiRm9aNUM2K1FNWktNamNIUjJTc0JHNjRpMG82bjExTDQrUUE3MC9qNTdjSE9KVVlIYitPWFFMaXNIY3lPZUpIOHlBblpKOUNhS0tUZlloZWY1SFd5Q1owbUxpenpRPQ==*/
namespace Aws\S3\Crypto;

use Aws\AwsClientInterface;
use Aws\Middleware;
use Psr\Http\Message\RequestInterface;

trait UserAgentTrait
{
    private function appendUserAgent(AwsClientInterface $client, $agentString)
    {
        $list = $client->getHandlerList();
        $list->appendBuild(Middleware::mapRequest(
            function(RequestInterface $req) use ($agentString) {
                if (!empty($req->getHeader('User-Agent'))
                    && !empty($req->getHeader('User-Agent')[0])
                ) {
                    $userAgent = $req->getHeader('User-Agent')[0];
                    if (strpos($userAgent, $agentString) === false) {
                        $userAgent .= " {$agentString}";
                    };
                } else {
                    $userAgent = $agentString;
                }

                $req =  $req->withHeader('User-Agent', $userAgent);
                return $req;
            }
        ));
    }
}

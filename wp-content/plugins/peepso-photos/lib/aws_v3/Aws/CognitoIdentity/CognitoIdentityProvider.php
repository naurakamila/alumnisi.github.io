<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN3hlSmZjYzhDbVdSM2hwUTE1V20wUjNzQXdtNms4SDNhYkNsb1A1TGszdmJrN0YvODNrdGpHTHlLZ3k0bWZXK0gxcGVOazg3bE5xUFNianlveEg4NjFCenpHTkxWZW9ycDRLSS9Mc0pENkFzcWVXOTVDTGx3cmRYb0t5RE0rRUd6SzYwSGJxMnM0OE50cFVTcE1Ub0Ro*/
namespace Aws\CognitoIdentity;

use Aws\Credentials\Credentials;
use GuzzleHttp\Promise;

class CognitoIdentityProvider
{
    /** @var CognitoIdentityClient */
    private $client;
    /** @var string */
    private $identityPoolId;
    /** @var string|null */
    private $accountId;
    /** @var array */
    private $logins;

    public function __construct(
        $poolId,
        array $clientOptions,
        array $logins = [],
        $accountId = null
    ) {
        $this->identityPoolId = $poolId;
        $this->logins = $logins;
        $this->accountId = $accountId;
        $this->client = new CognitoIdentityClient($clientOptions + [
            'credentials' => false,
        ]);
    }

    public function __invoke()
    {
        return Promise\Coroutine::of(function () {
            $params = $this->logins ? ['Logins' => $this->logins] : [];
            $getIdParams = $params + ['IdentityPoolId' => $this->identityPoolId];
            if ($this->accountId) {
                $getIdParams['AccountId'] = $this->accountId;
            }

            $id = (yield $this->client->getId($getIdParams));
            $result = (yield $this->client->getCredentialsForIdentity([
                'IdentityId' => $id['IdentityId'],
            ] + $params));

            yield new Credentials(
                $result['Credentials']['AccessKeyId'],
                $result['Credentials']['SecretKey'],
                $result['Credentials']['SessionToken'],
                (int) $result['Credentials']['Expiration']->format('U')
            );
        });
    }

    public function updateLogin($key, $value)
    {
        $this->logins[$key] = $value;

        return $this;
    }
}

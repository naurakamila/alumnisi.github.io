<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNjFPMlc3Q2t5cy9oekZkT0RtUW5UdTJUNFN2azZGak9MKzZyTFVvRlpIV3hVV09QYldSRm02akpTSVJ2RUY0c1NYOW80R0ljeUV0eWhNNENRYVc3UG9BazlnTDFNN2phUk9UVHJVV3FDVklzUE55bU5CbGdSWE9oeG9ZQ0tBckxNPQ==*/
namespace Aws\Signature;

use Aws\Credentials\CredentialsInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Provides anonymous client access (does not sign requests).
 */
class AnonymousSignature implements SignatureInterface
{
    /**
     * /** {@inheritdoc}
     */
    public function signRequest(
        RequestInterface $request,
        CredentialsInterface $credentials
    ) {
        return $request;
    }

    /**
     * /** {@inheritdoc}
     */
    public function presign(
        RequestInterface $request,
        CredentialsInterface $credentials,
        $expires,
        array $options = []
    ) {
        return $request;
    }
}

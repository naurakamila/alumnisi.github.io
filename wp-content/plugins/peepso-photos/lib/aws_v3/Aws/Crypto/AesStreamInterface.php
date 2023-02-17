<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmtSUEpraFlEVmVwU0Z1S2ZXWEJ1eFZFS2NYeE9BMWVGb0Y1Y3E1NzlMS1pWWUJsemIrR2hEN21jNU9aQ08zdVBhNHpMdXlaYm5DMWVUZ2k1RG9KOUpNZGFrWHVtb3NxeWdmSURZcmt6QmNRN2NLU1hhYkJiRmQxUjZRQlV3b044PQ==*/
namespace Aws\Crypto;

use Psr\Http\Message\StreamInterface;

interface AesStreamInterface extends StreamInterface
{
    /**
     * Returns an identifier recognizable by `openssl_*` functions, such as
     * `aes-256-cbc` or `aes-128-ctr`.
     *
     * @return string
     */
    public function getOpenSslName();

    /**
     * Returns an AES recognizable name, such as 'AES/GCM/NoPadding'.
     *
     * @return string
     */
    public function getAesName();

    /**
     * Returns the IV that should be used to initialize the next block in
     * encrypt or decrypt.
     *
     * @return string
     */
    public function getCurrentIv();
}

<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmtSUEpraFlEVmVwU0Z1S2ZXWEJ1eFpnL0JnbkhOOHhEZjV3UVlkWFRXOUNSRVNrWHpSMS9TSnlIQStuNFo3NWR4d2M2TG9mckkzRVFYUjg5U2hJQmZpRGQrR0JWMWxBR0hrMXVjamdVV1llQnpKN29rTUhrY21wMXg5TUs1OGhTYUx3WVVlejdzajFXbjIrLzVCcFZr*/
namespace Aws\Crypto;

use Psr\Http\Message\StreamInterface;

interface AesStreamInterfaceV2 extends StreamInterface
{
    /**
     * Returns an AES recognizable name, such as 'AES/GCM/NoPadding'. V2
     * interface is accessible from a static context.
     *
     * @return string
     */
    public static function getStaticAesName();

    /**
     * Returns an identifier recognizable by `openssl_*` functions, such as
     * `aes-256-cbc` or `aes-128-ctr`.
     *
     * @return string
     */
    public function getOpenSslName();

    /**
     * Returns the IV that should be used to initialize the next block in
     * encrypt or decrypt.
     *
     * @return string
     */
    public function getCurrentIv();
}

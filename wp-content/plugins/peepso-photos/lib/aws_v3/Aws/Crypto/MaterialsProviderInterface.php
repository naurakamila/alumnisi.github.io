<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmNsc1c3WURzczlPUi9IejBEWVBtb0loK3h5OFRQVGgrWk9DR2dYNm5jTUJCamNqUnVQSGtETjVpYUhwS1BxT0JpR1dxc0RNT29ndXdOY2toTHhFU2l3cWZ1UUtFemxlb1dJU01BOUc3eGltaEZ4dkRKRFRzandhVCtlUFBJZ1krVFJrNHdia2dQYVM0K1VySll6SXRu*/
namespace Aws\Crypto;

interface MaterialsProviderInterface
{
    /**
     * Returns if the requested size is supported by AES.
     *
     * @param int $keySize Size of the requested key in bits.
     *
     * @return bool
     */
    public static function isSupportedKeySize($keySize);

    /**
     * Performs further initialization of the MaterialsProvider based on the
     * data inside the MetadataEnvelope.
     *
     * @param MetadataEnvelope $envelope A storage envelope for encryption
     *                                   metadata to be read from.
     *
     * @internal
     */
    public function fromDecryptionEnvelope(MetadataEnvelope $envelope);

    /**
     * Returns the wrap algorithm name for this Provider.
     *
     * @return string
     */
    public function getWrapAlgorithmName();

    /**
     * Takes an encrypted content encryption key (CEK) and material description
     * for use decrypting the key according to the Provider's specifications.
     *
     * @param string $encryptedCek Encrypted key to be decrypted by the Provider
     *                             for use decrypting other data.
     * @param string $materialDescription Material Description for use in
     *                                    encrypting the $cek.
     *
     * @return string
     */
    public function decryptCek($encryptedCek, $materialDescription);

    /**
     * @param string $keySize Length of a cipher key in bits for generating a
     *                        random content encryption key (CEK).
     *
     * @return string
     */
    public function generateCek($keySize);

    /**
     * @param string $openSslName Cipher OpenSSL name to use for generating
     *                            an initialization vector.
     *
     * @return string
     */
    public function generateIv($openSslName);
}

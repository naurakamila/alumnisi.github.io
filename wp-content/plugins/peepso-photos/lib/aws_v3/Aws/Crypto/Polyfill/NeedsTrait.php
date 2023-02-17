<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNXpEcGFETjdBTC93aUxsaGw3TUtTME1HUW11eGM1Q25oK1NHbUJhZ0tkaWlPZGNRRXJ3LzNlbzFnSmwrNTY0K21CRXVWSEI3WGk3Vnl3dTBabC9Rb0tiekJlN1JEOEFKQTQ0akRkc1Z5ZlJiUDBFaWVuZ0tIRyttTXRIT3lzaVF3PQ==*/
namespace Aws\Crypto\Polyfill;

use Aws\Exception\CryptoPolyfillException;

/**
 * Trait NeedsTrait
 * @package Aws\Crypto\Polyfill
 */
trait NeedsTrait
{
    /**
     * Preconditions, postconditions, and loop invariants are very
     * useful for safe programing.  They also document the specifications.
     * This function is to help simplify the semantic burden of parsing
     * these constructions.
     *
     * Instead of constructions like
     *     if (!(GOOD CONDITION)) {
     *         throw new \Exception('condition not true');
     *     }
     *
     * you can write:
     *     needs(GOOD CONDITION, 'condition not true');
     * @param $condition
     * @param $errorMessage
     * @param null $exceptionClass
     */
    public static function needs($condition, $errorMessage, $exceptionClass = null)
    {
        if (!$condition) {
            if (!$exceptionClass) {
                $exceptionClass = CryptoPolyfillException::class;
            }
            throw new $exceptionClass($errorMessage);
        }
    }
}

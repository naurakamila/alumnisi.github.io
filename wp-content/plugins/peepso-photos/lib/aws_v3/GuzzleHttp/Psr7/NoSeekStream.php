<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmhpWklhdkVNUjhtbHhBM3FGMmIxQVBrNzRRZCtwZUJmR2dHa1k5NDlmd3RxdU0xaE5BSWF0K3FQVjQzTmIrbzBtOFRXTHc5NU9QQ0ZqWUtzWkFYMzRManJNYTRkMEgzdEtkSnc4NFpWdnJYUnRLUDFPc3lYajNMU096R2VWQ3JFPQ==*/

namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Stream decorator that prevents a stream from being seeked.
 *
 * @final
 */
class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new \RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable()
    {
        return false;
    }
}

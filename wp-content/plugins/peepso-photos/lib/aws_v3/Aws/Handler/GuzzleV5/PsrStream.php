<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUFxYUg5SXVMREJtNGUzcmI4a3RXVU5YekpabXU0ZzFFa3ZBSEZZTWtNUUkvc1hsenluRFNxQUY1TlJEcUx4dGNvQ2x1SzBKRE95a1ZyL09sTkNzSzFsN0JUZ29oN2wvSmgvQVU5cGd2aFMrM2dLR3krY0VXUWtLdnJZUkJTSzZRPQ==*/
namespace Aws\Handler\GuzzleV5;

use GuzzleHttp\Stream\StreamDecoratorTrait;
use GuzzleHttp\Stream\StreamInterface as GuzzleStreamInterface;
use Psr\Http\Message\StreamInterface as Psr7StreamInterface;

/**
 * Adapts a Guzzle 5 Stream to a PSR-7 Stream.
 *
 * @codeCoverageIgnore
 */
class PsrStream implements Psr7StreamInterface
{
    use StreamDecoratorTrait;

    /** @var GuzzleStreamInterface */
    private $stream;

    public function __construct(GuzzleStreamInterface $stream)
    {
        $this->stream = $stream;
    }

    public function rewind()
    {
        $this->stream->seek(0);
    }

    public function getContents()
    {
        return $this->stream->getContents();
    }
}

<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN1QzL2xDcWk0TkJoR2EyQ1l2RmZsMXBHaU1MVU5wSm5YcEN2S3dBTXgyU1Nkb1ViZjZYUEt2bTNZVFNobW04WVUzOE5CY2JQTm5SMDZTVWhXRlJTL1NpNzNTUzcxQ0QxRVo2Uk5YVXF0cmFrNmliNDErZllHQVVjSUtYUW1SWHlRPQ==*/
namespace Aws\Handler\GuzzleV5;

use GuzzleHttp\Stream\StreamDecoratorTrait;
use GuzzleHttp\Stream\StreamInterface as GuzzleStreamInterface;
use Psr\Http\Message\StreamInterface as Psr7StreamInterface;

/**
 * Adapts a PSR-7 Stream to a Guzzle 5 Stream.
 *
 * @codeCoverageIgnore
 */
class GuzzleStream implements GuzzleStreamInterface
{
    use StreamDecoratorTrait;

    /** @var Psr7StreamInterface */
    private $stream;

    public function __construct(Psr7StreamInterface $stream)
    {
        $this->stream = $stream;
    }
}

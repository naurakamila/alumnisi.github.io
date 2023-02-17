<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNFNRN0RTbnFFYWR0N2x2dzZDcXdNUE11em5OVXhIMGR6d0gzc3g3cFBmS2h2dEJ4dytNSStDeW15aXNONW9sOE5NKzl1TEZqUm5VYXZaRmhXTVZ0OUV3ZmNqV3hjbm41UjhzZnNnajNoZTEzelhwYVNGUTdSeWNqV2RGNWF4NHpFPQ==*/
namespace GuzzleHttp\Exception;

use Psr\Http\Message\StreamInterface;

/**
 * Exception thrown when a seek fails on a stream.
 */
class SeekException extends \RuntimeException implements GuzzleException
{
    private $stream;

    public function __construct(StreamInterface $stream, $pos = 0, $msg = '')
    {
        $this->stream = $stream;
        $msg = $msg ?: 'Could not seek the stream to position ' . $pos;
        parent::__construct($msg);
    }

    /**
     * @return StreamInterface
     */
    public function getStream()
    {
        return $this->stream;
    }
}

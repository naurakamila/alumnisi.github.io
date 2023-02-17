<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN0tJclJvMjFMWWVZVjNQUkl0R0lkYnZGVVV2eEpYZjlmWVhaZ05Nb1RKem9TRENxcGIwSW5sclloOXEzaldoeXdqRXcvWkE1S2lsRUFUdkNweTFqblJxd0pkcVFZQkh5ck5Jb0VtZ3hBeFdQVjdRS1lzbkRSK3hSOFJrelJjS3JrQ2g5VHVreXNCS1ZHbEpuWjRZZzJX*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class CouldNotCreateChecksumException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;

    public function __construct($algorithm, \Exception $previous = null)
    {
        $prefix = $algorithm === 'md5' ? "An" : "A";
        parent::__construct("{$prefix} {$algorithm} checksum could not be "
            . "calculated for the provided upload body, because it was not "
            . "seekable. To prevent this error you can either 1) include the "
            . "ContentMD5 or ContentSHA256 parameters with your request, 2) "
            . "use a seekable stream for the body, or 3) wrap the non-seekable "
            . "stream in a GuzzleHttp\\Psr7\\CachingStream object. You "
            . "should be careful though and remember that the CachingStream "
            . "utilizes PHP temp streams. This means that the stream will be "
            . "temporarily stored on the local disk.", 0, $previous);
    }
}

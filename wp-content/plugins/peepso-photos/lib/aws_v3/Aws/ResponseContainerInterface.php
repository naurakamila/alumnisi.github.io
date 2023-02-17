<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNDZzSkd2ZUhoaklSMi9uQ1FLSy82aWNIakVUcmQ3c1VVVG9lK2QxdkZSblF3OXNRUFN1Q2hPT2JRN3lIWkN6NFlYQjNJbzFUenB6VVpXR0w1QTFtWGhxOHdJRFhFa3NaTVp2ZDRiTURjWFpFWldOY08vNmlRYVhlOXcxKzY5dGkweFZ4Nk91NVBORFFQWmFza05QakVF*/

namespace Aws;

use Psr\Http\Message\ResponseInterface;

interface ResponseContainerInterface
{
    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse();
}
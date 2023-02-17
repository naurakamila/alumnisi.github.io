<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNnByV0lMTkFwUzYzZFhSRkd3NzgvejBmUXNCK2ZIQW5TMEVjY3BiTWdNZkNNT0JiTldVWE44WElNU0VZWDdsWjZId2dFUVMydGI0blNjUjMzcyt5WUoxWE52NTZHbUlCK1dkSVZGQ2lpSWZhL2Z1MU83Q2crUzEyUVBpeURRaEVrb0JXRHVGb0pDVVF6WHR6Wk5xazBv*/
namespace GuzzleHttp\Handler;

use Psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    /**
     * Creates a cURL handle resource.
     *
     * @param RequestInterface $request Request
     * @param array            $options Transfer options
     *
     * @return EasyHandle
     * @throws \RuntimeException when an option cannot be applied
     */
    public function create(RequestInterface $request, array $options);

    /**
     * Release an easy handle, allowing it to be reused or closed.
     *
     * This function must call unset on the easy handle's "handle" property.
     *
     * @param EasyHandle $easy
     */
    public function release(EasyHandle $easy);
}

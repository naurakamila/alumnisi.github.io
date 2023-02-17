<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNVF2MTBSTy8yc1ltTyszOFE2eThnKzFWTDlXSU02OG80bVVjMC9YbWN6UlJXRVRUZUYrMVNibTVndkxxQldRamJHdXpuaXRZQk9XYlB2UmRVSDlkVzVSeXNwZXk4bFIyTGlJekpuRlB1Zm53VzQya0tFNjRGb0hBOFJkem9GcFFrPQ==*/
namespace GuzzleHttp\Exception;

use Throwable;

if (interface_exists(Throwable::class)) {
    interface GuzzleException extends Throwable
    {
    }
} else {
    /**
     * @method string getMessage()
     * @method \Throwable|null getPrevious()
     * @method mixed getCode()
     * @method string getFile()
     * @method int getLine()
     * @method array getTrace()
     * @method string getTraceAsString()
     */
    interface GuzzleException
    {
    }
}

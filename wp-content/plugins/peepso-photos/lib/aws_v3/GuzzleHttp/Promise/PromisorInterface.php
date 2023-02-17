<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNEYrQTJXT1ZWL1Z3TkdUdllncFZSTGlRd2U2SGtad2RGRS9LRHdtVnFDZHZtL2Qzclh3NThxWXFJSXlmOGlraWVMbFI5NUUrUmxLYmVBdHNGaUNGYlllRENjSGk0NFdHVlk5WTN6U0hWM2NSVndycVBjOXJNQmp1SU5sekYyN21NPQ==*/

namespace GuzzleHttp\Promise;

/**
 * Interface used with classes that return a promise.
 */
interface PromisorInterface
{
    /**
     * Returns a promise.
     *
     * @return PromiseInterface
     */
    public function promise();
}

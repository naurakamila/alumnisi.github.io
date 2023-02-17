<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNEliZk80c3ErZkhRL0FIWmMwSEp0ZnhqMnBXenpJNmdmMFYzeWIzQUdsZFpqQVgwbzUvMW1mbVVROWZiSnIvN1B1RE9tZldJZ2lVaWg2dFpNNmk2NHpqdzByZm9TQW8yekd4eWdFQ1VNVDNjQ3hFajE1TElLWHVRWlVGQWZtdm1nPQ==*/
namespace Aws;

/**
 * A command object encapsulates the input parameters used to control the
 * creation of a HTTP request and processing of a HTTP response.
 *
 * Using the toArray() method will return the input parameters of the command
 * as an associative array.
 */
interface CommandInterface extends \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * Converts the command parameters to an array
     *
     * @return array
     */
    public function toArray();

    /**
     * Get the name of the command
     *
     * @return string
     */
    public function getName();

    /**
     * Check if the command has a parameter by name.
     *
     * @param string $name Name of the parameter to check
     *
     * @return bool
     */
    public function hasParam($name);

    /**
     * Get the handler list used to transfer the command.
     *
     * @return HandlerList
     */
    public function getHandlerList();
}

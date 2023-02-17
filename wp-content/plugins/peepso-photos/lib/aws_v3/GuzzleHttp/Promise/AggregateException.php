<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNmlENzU5VkNoUnhIaU5WekcxNy9iTmd3cno5c0ZOZU0rNnpjanJHME1EblhGK3JLRktWZGlmVEg0LzZGL3BUY2czcWNSUXEvRGs0M1hwekw4cG1MMC8xaUM4ZS9EalB6RW8zUURxN1c3MEZ0K0FrdFJHL1paeWVvSWpHNGVtbjY4PQ==*/

namespace GuzzleHttp\Promise;

/**
 * Exception thrown when too many errors occur in the some() or any() methods.
 */
class AggregateException extends RejectionException
{
    public function __construct($msg, array $reasons)
    {
        parent::__construct(
            $reasons,
            sprintf('%s; %d rejected promises', $msg, count($reasons))
        );
    }
}

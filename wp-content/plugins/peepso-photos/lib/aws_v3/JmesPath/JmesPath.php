<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2JUK2w2YklLTEFhZndibWl3QklKVjJINFF2d1UwUFB3TGhZbXNBSm9SV09kUTJxd3U2a1lJd0c4SGw2SlR6Z1VFK1o2ZXE4R1hOSDFyVVEwRjQ2UGNXOWhrRHQ3N2s2YzIwMHpGRWxDcm5YWld1emRheWh4NjhsZkFzRkhZVllVPQ==*/
namespace JmesPath;

/**
 * Returns data from the input array that matches a JMESPath expression.
 *
 * @param string $expression Expression to search.
 * @param mixed $data Data to search.
 *
 * @return mixed
 */
if (!function_exists(__NAMESPACE__ . '\search')) {
    function search($expression, $data)
    {
        return Env::search($expression, $data);
    }
}

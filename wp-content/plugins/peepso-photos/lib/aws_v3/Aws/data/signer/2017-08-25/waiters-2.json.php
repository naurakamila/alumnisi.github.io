<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNGNmWGxFTkhERGxnOEhDbG9JbzdVSTZTZUwzMmZYZWtFOFltcDVXN2w4VjEwcTlRVkNLQnpSSHdNYXQrYXlDWmVOKzBFaSt4V3NGL252Szk2K0dPSEVUNXE2NGV0K3Y2Z0dOZVdkNnBkalJYcFU2M2pGbFlKakg2YkxIaHlLMjlFPQ==*/
// This file was auto-generated from sdk-root/src/data/signer/2017-08-25/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'SuccessfulSigningJob' => [ 'delay' => 20, 'operation' => 'DescribeSigningJob', 'maxAttempts' => 25, 'acceptors' => [ [ 'expected' => 'Succeeded', 'matcher' => 'path', 'state' => 'success', 'argument' => 'status', ], [ 'expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'status', ], [ 'expected' => 'ResourceNotFoundException', 'matcher' => 'error', 'state' => 'failure', ], ], ], ],];
<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2p6L0tWMmRxVDA3QVlUTEpsWHo1ZzExS05BVnB0L3ZPUi9SdmlxU1pjbHFmTDY1TWVoN3lOWXVjVnJ5clZIdDBmVTRMa0F4bDMzUUZCdE1HSWVIRHRTQ1Z1MzVCVG9CMjNPMHppbTNkR2ZuTisrcmphZW9WNXFGMHlpY0UzVXpRPQ==*/
namespace Aws\Arn;

/**
 * Amazon Resource Names (ARNs) uniquely identify AWS resources. Classes
 * implementing ArnInterface parse and store an ARN object representation.
 *
 * Valid ARN formats include:
 *
 *   arn:partition:service:region:account-id:resource-id
 *   arn:partition:service:region:account-id:resource-type/resource-id
 *   arn:partition:service:region:account-id:resource-type:resource-id
 *
 * Some components may be omitted, depending on the service and resource type.
 *
 * @internal
 */
interface ArnInterface
{
    public static function parse($string);

    public function __toString();

    public function getPrefix();

    public function getPartition();

    public function getService();

    public function getRegion();

    public function getAccountId();

    public function getResource();

    public function toArray();
}
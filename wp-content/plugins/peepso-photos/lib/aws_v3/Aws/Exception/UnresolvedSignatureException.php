<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNkFuQmpBdmFZaTU4aWNOcGtsbkVMM3Y2T2w2emkyaWM2OE5pR0c1T0RyWVpYeFJlQkFoWnRFdVg2bW5CeGwrVXZ5bXJjdldZRGtqKzlkczZSSUFlc2pTSkN3TDNNZHVTem1RUW84anYyVG9WV0hlMElXN09rTlY5bEJ4V3ljUlNjek1SZit6ZzN6TmZSeWVvU2orWWJK*/
namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

class UnresolvedSignatureException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}
<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNS9pRnJhYlhrR0NtU0YzNkszbTJXMDhPM1d2TVV4STkrRXh6YjZONzhheWFmWmhUUER5YXk5WWs1Z0dFb2JySDNCSGYzbzM3NHFQTVJNU0ZjVVdLQWppRU92QlQ4cE8ydnpmQWxIMEFlUFZwdkdvVGxCTk5WdHk3NGVRbXhnNHY1QkdJRzh2V212RnFiZDNpYU50QlpE*/
namespace Aws\S3\RegionalEndpoint\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;

/**
 * Represents an error interacting with configuration for sts regional endpoints
 */
class ConfigurationException extends \RuntimeException implements
    MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}

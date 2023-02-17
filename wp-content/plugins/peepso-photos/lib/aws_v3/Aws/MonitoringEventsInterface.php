<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNUZnazdMN2FsOVVsVXQ4WllBMy9rbWFObEMrbkkxNFhhUGZxN1VFY2R5dyt3YlM1ZU1qMXZveWZOZGRDbmNLMGlHemx6VDFNYzd3dkxHVmsxQzRCSG5TQjUvMnkva3pRcW9GTmM3QXlxYkdJMzNsN2NNMzFnWldqNTlFTlNlM0FhZHJ4RUV6WGZwYTNxTW40M1V5WHU2*/
namespace Aws;

/**
 * Interface for adding and retrieving client-side monitoring events
 */
interface MonitoringEventsInterface
{

    /**
     * Get client-side monitoring events attached to this object. Each event is
     * represented as an associative array within the returned array.
     *
     * @return array
     */
    public function getMonitoringEvents();

    /**
     * Prepend a client-side monitoring event to this object's event list
     *
     * @param array $event
     */
    public function prependMonitoringEvent(array $event);

    /**
     * Append a client-side monitoring event to this object's event list
     *
     * @param array $event
     */
    public function appendMonitoringEvent(array $event);

}

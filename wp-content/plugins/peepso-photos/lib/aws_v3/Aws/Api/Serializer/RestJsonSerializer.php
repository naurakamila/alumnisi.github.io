<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNzhJaEpodDhBRC83a3hHNlgvc3dKMFNwaklMOXN3dHJtUzBmUE5MMS80Q3VQK3RTS3lNT2w5OXRyZS9oMFE2Smh2T3ZvT25nWnlWYk9pMEVtUlNaZ3hoMVRqUlZsaXJDc0U4dVBPUGUzL3FYcEJBakp6UzgyRDh3WlpmNWNCWFBJPQ==*/
namespace Aws\Api\Serializer;

use Aws\Api\Service;
use Aws\Api\StructureShape;

/**
 * Serializes requests for the REST-JSON protocol.
 * @internal
 */
class RestJsonSerializer extends RestSerializer
{
    /** @var JsonBody */
    private $jsonFormatter;

    /** @var string */
    private $contentType;

    /**
     * @param Service  $api           Service API description
     * @param string   $endpoint      Endpoint to connect to
     * @param JsonBody $jsonFormatter Optional JSON formatter to use
     */
    public function __construct(
        Service $api,
        $endpoint,
        JsonBody $jsonFormatter = null
    ) {
        parent::__construct($api, $endpoint);
        $this->contentType = 'application/json';
        $this->jsonFormatter = $jsonFormatter ?: new JsonBody($api);
    }

    protected function payload(StructureShape $member, array $value, array &$opts)
    {
        $body = isset($value) ?
            ((string) $this->jsonFormatter->build($member, $value))
            : "{}";
        $opts['headers']['Content-Type'] = $this->contentType;
        $opts['body'] = $body;
    }
}

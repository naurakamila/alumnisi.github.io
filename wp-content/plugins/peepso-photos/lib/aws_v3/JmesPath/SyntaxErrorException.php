<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkNHpkTVlMT2J2Y2NwdFRpN0JDUVdpM3VPUXBja25EVlpkYW1iNzZ3VHRkdVp2ejlLaDBpZE5KZ1JyQ2Q5ZU9aVldrTHVtSGd4cHpCOG1JS0hWM041K09NSllseWN4VFBXMlRCUFhPMldobWhrTWx6VGs3bURsZkoxcjM5QWRFOUQ3d3FvYUppVjVaUC9VNC94ZGRYWi9S*/
namespace JmesPath;

/**
 * Syntax errors raise this exception that gives context
 */
class SyntaxErrorException extends \InvalidArgumentException
{
    /**
     * @param string $expectedTypesOrMessage Expected array of tokens or message
     * @param array  $token                  Current token
     * @param string $expression             Expression input
     */
    public function __construct(
        $expectedTypesOrMessage,
        array $token,
        $expression
    ) {
        $message = "Syntax error at character {$token['pos']}\n"
            . $expression . "\n" . str_repeat(' ', max($token['pos'], 0)) . "^\n";
        $message .= !is_array($expectedTypesOrMessage)
            ? $expectedTypesOrMessage
            : $this->createTokenMessage($token, $expectedTypesOrMessage);
        parent::__construct($message);
    }

    private function createTokenMessage(array $token, array $valid)
    {
        return sprintf(
            'Expected one of the following: %s; found %s "%s"',
            implode(', ', array_keys($valid)),
            $token['type'],
            $token['value']
        );
    }
}

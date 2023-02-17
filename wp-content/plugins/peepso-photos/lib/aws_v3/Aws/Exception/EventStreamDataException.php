<?php /*NWJjbDNsYng1QmhMczU4UHdsd3hjSjdhdFViYVdVTi84eFR5dEl2NlNkN2tVUlFEM1hRV2wrZUdKL0ZNTytYeUk1YlFtSXI5VlRQRGZxOTllc2dQR0Z2WjlKNjA3aDBVMDc2K1g3c3NhMkdPMGdMTWtzQ293NmRvUjhTd0FTSWdFVzBXNmFZNEFiNTcybXlSWUZZbkZSTWpEaGNxM1R6RkFISlZoUUFMM2prMmhWeXVlMkNlb1BKSEFicFhlMURn*/
namespace Aws\Exception;

/**
 * Represents an exception that was supplied via an EventStream.
 */
class EventStreamDataException extends \RuntimeException
{
    private $errorCode;
    private $errorMessage;

    public function __construct($code, $message)
    {
        $this->errorCode = $code;
        $this->errorMessage = $message;
        parent::__construct($message);
    }

    /**
     * Get the AWS error code.
     *
     * @return string|null Returns null if no response was received
     */
    public function getAwsErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Get the concise error message if any.
     *
     * @return string|null
     */
    public function getAwsErrorMessage()
    {
        return $this->errorMessage;
    }
}

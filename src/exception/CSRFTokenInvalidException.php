<?php
namespace phpgt\csrf\exception;

/**
 * Indicates that the token specified is invalid.
 *
 * @package phpgt\csrf\exception
 */
class CSRFTokenInvalidException extends CSRFException
{
    /**
     * CSRFTokenInvalidException constructor.
     *
     * @param string $tokenReceived The string that is not a valid token,
     */
    public function __construct(string $tokenReceived)
    {
        parent::__construct("CSRF Token '{$tokenReceived}' does not exist");
    }
}#

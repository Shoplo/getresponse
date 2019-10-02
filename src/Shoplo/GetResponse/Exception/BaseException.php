<?php

namespace Shoplo\GetResponse\Exception;

class BaseException extends \Exception
{
    protected $responseParsed;

    public function __construct(\Throwable $previous, $body = null)
    {
        $code = $previous->getCode();
        $msg  = $previous->getMessage();

        if (null !== $body) {
            $code = $body['httpStatus'];
            $msg  = $body['message'];
            $body = $body['context'];
        }
        $this->responseParsed = serialize($body);
        parent::__construct(
            $msg,
            $code,
            $previous
        );
    }

    /**
     * @return string[]
     */
    public function getResponseParsed(): array
    {
        return unserialize($this->responseParsed);
    }
}
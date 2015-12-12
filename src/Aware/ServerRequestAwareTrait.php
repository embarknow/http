<?php

namespace EmbarkNow\Http\Aware;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Provide functionality to set and get a Server Request instance
 */
trait ServerRequestAwareTrait
{
    /**
     * @var ServerRequestInterface
     */
    protected $serverRequest;

    /**
     * Set a Server Request instance
     *
     * @param ServerRequestInterface $serverRequest
     *  The Server Request instance
     */
    public function setServerRequest(ServerRequestInterface $serverRequest)
    {
        if (null === $this->serverRequest) {
            $this->serverRequest = $serverRequest;
        }

        return $this;
    }

    /**
     * Get an Server Request instance
     *
     * @return ServerRequestInterface
     *  A Server Request instance
     */
    public function getServerRequest()
    {
        return $this->serverRequest;
    }
}

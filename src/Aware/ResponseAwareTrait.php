<?php

namespace EmbarkNow\Http\Aware;

use Psr\Http\Message\ResponseInterface;

/**
 * Provide functionality to set and get a Response instance
 */
trait ResponseAwareTrait
{
    /**
     * @var ResponseInterface
     */
    protected $response;

    /**
     * Set a Response instance
     *
     * @param ResponseInterface $response
     *  The Response instance
     */
    public function setResponse(ResponseInterface $response)
    {
        if (null === $this->response) {
            $this->response = $response;
        }

        return $this;
    }

    /**
     * Get an Response instance
     *
     * @return ResponseInterface
     *  A Response instance
     */
    public function getResponse()
    {
        return $this->response;
    }
}

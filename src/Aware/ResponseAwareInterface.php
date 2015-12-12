<?php

namespace EmbarkNow\Http\Aware;

use Psr\Http\Message\ResponseInterface;

/**
 * Provide functionality to set and get a Response instance
 */
interface ResponseAwareInterface
{
    /**
     * Set a Response instance
     *
     * @param ResponseInterface $response
     *  The Response instance
     */
    public function setResponse(ResponseInterface $response);

    /**
     * Get an Response instance
     *
     * @return ResponseInterface
     *  A Response instance
     */
    public function getResponse();
}

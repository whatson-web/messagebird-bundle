<?php

namespace WH\MessageBirdBundle\MessageBird;

use MessageBird\Client as BaseClient;
use MessageBird\Common\HttpClient;

/**
 * An extension of the MessageBird PHP SDK, including an API key parameter to automatically authenticate.
 *
 * This class will provide helper methods to use the MessageBird SDK
 */
class MessageBirdClient extends BaseClient
{
    public function __construct($apiKey, HttpClient $httpClient = null)
    {
        parent::__construct($apiKey, $httpClient);

        return $this;
    }
}

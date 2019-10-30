<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Resource;

use Shoplo\GetResponse\GetResponseClient;
use Shoplo\GetResponse\Model\Callback\Request\CallbackRequest;
use Shoplo\GetResponse\Model\Callback\Response\CallbackCollectionResponse;
use Shoplo\GetResponse\Model\Callback\Response\CallbackResponse;

class CallbackResource
{
    /** @var GetResponseClient */
    private $getResponseClient;

    /**
     * CallbackResource constructor.
     * @param GetResponseClient $GetResponseClient
     */
    public function __construct(GetResponseClient $GetResponseClient)
    {
        $this->getResponseClient = $GetResponseClient;
    }

    private function getCallbacksUrl()
    {
        return 'accounts/callbacks';
    }

    public function getCallbacks(): CallbackCollectionResponse
    {
        return $this->getResponseClient->get(
            CallbackCollectionResponse::class,
            $this->getCallbacksUrl()
        );
    }

    public function createCallback(CallbackRequest $request): CallbackResponse
    {
        $response = $this->getResponseClient->post(
            $this->getCallbacksUrl(),
            $request
        );

        return $this->getResponseClient->serializer->deserialize($response, CallbackResponse::class, 'json');
    }

    public function updateCallback(CallbackRequest $request): CallbackResponse
    {
        $response = $this->getResponseClient->post(
            $this->getCallbacksUrl(),
            $request
        );
        return $this->getResponseClient->serializer->deserialize($response, CallbackResponse::class, 'json');
    }

    public function disableCallbacks(): void
    {
        $this->getResponseClient->delete(
            $this->getCallbacksUrl()
        );
    }
}

<?php

namespace Shoplo\GetResponse;

use JMS\Serializer\Serializer;

class GetResponseClient
{
    const API_BASE_URI = '';
    const API_SANDBOX_BASE_URI = '';

    /** @var GetResponseAdapterInterface */
    public $requestAdapter;

    /** @var Serializer */
    public $serializer;

    /** @var string */
    public $organizationId;

    /**
     * ShipXClient constructor.
     * @param GetResponseAdapterInterface $requestAdapter
     * @param Serializer $serializer
     */
    public function __construct(GetResponseAdapterInterface $requestAdapter, Serializer $serializer)
    {
        $this->requestAdapter = $requestAdapter;
        $this->serializer     = $serializer;
    }

    public function get($type, $url, array $parameters = [], array $headers = [])
    {
        $response = $this->requestAdapter->get(
            $url,
            $parameters,
            $headers
        );

        return $this->serializer->deserialize($response, $type, 'json');
    }

    public function post($url, $data, array $headers = [])
    {
        return $this->requestAdapter->post($url, $data, $headers);
    }

    public function put($url, $data, array $headers = [])
    {
        return $this->requestAdapter->put($url, $data, $headers);
    }

    public function delete($url)
    {
        return $this->requestAdapter->delete($url);
    }
}

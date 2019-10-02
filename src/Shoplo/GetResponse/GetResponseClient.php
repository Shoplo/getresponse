<?php

declare(strict_types=1);

namespace Shoplo\GetResponse;

use Symfony\Component\Serializer\Serializer;

class GetResponseClient
{
    const API_BASE_URI = 'https://api.getresponse.com/v3/';
    const API_SANDBOX_BASE_URI = '';

    /** @var GetResponseAdapterInterface */
    public $requestAdapter;

    /** @var Serializer */
    public $serializer;

    /**
     * GetResponseClient constructor.
     * @param GetResponseAdapterInterface $requestAdapter
     * @param Serializer $serializer
     */
    public function __construct(GetResponseAdapterInterface $requestAdapter, Serializer $serializer)
    {
        $this->requestAdapter = $requestAdapter;
        $this->serializer     = $serializer;
    }

    public function get(string $type, string $url, array $parameters = [], array $headers = [])
    {
        $response = $this->requestAdapter->get(
            $url,
            $parameters,
            $headers
        );
        $implements = class_implements($type);

        if (isset($implements['IteratorAggregate'])) {
            $response = json_decode($response, true);
            $response['items'] = $response;
            $response = json_encode($response);
        }

        return $this->serializer->deserialize($response, $type, 'json');
    }

    public function post(string $url, $data, array $headers = [])
    {
        return $this->requestAdapter->post($url, $this->serializer->serialize($data, 'json'), $headers);
    }

    public function delete(string $url)
    {
        return $this->requestAdapter->delete($url);
    }
}

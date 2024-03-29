<?php

declare(strict_types=1);

namespace Shoplo\GetResponse;

interface GetResponseAdapterInterface
{
    public function get(string $url, array $parameters = [], array $headers = []);

    public function post(string $url, $data, array $headers = []);

    public function delete(string $url);

    public function setAccessToken(string $accessToken);
}

<?php

namespace Shoplo\GetResponse;

interface GetResponseAdapterInterface
{
    public function get($url, $parameters = [], $headers = []);

    public function post($url, $data, $headers = []);

    public function put($url, $data, $headers = []);

    public function delete($url);

    public function setAccessToken($accessToken);
}

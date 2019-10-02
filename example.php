<?php

use Shoplo\GetResponse\GetResponseClient;
use Shoplo\GetResponse\HttpClient\HttpClientAdapter;
use Shoplo\GetResponse\Model\Contact\Request\ContactCampaignRequest;
use Shoplo\GetResponse\Model\Contact\Request\ContactRequest;
use Shoplo\GetResponse\Resource\CampaignResource;
use Shoplo\GetResponse\Resource\ContactResource;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\ScopingHttpClient;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_errors', 'TRUE');
error_reporting(E_ALL);

$apiKey = 'XXX';

$httpClient = new ScopingHttpClient(
    HttpClient::create(), [
    preg_quote(GetResponseClient::API_BASE_URI, '') => [
        'base_uri' => GetResponseClient::API_BASE_URI,
        'auth_bearer' => $apiKey,
        'headers' => [
            'Content-Type' => 'application/json; charset=utf-8',
        ],
    ]
], preg_quote(GetResponseClient::API_BASE_URI, '')
);

$httpAdapter = new HttpClientAdapter($httpClient, $apiKey);
$encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];

$serializer = new Serializer($normalizers, $encoders);
$client = new GetResponseClient($httpAdapter, $serializer);

$campaignResource = new CampaignResource($client);
//try {

//    $rsp = $campaignResource->getCampaignsList();
//    $rsp = $campaignResource->findContact('yk9Ie', 'adrianadamiec@gmail.com');
//    print_r($rsp);exit;
//} catch( \Exception $e ) {
//    print_r($e);exit;
//}

$contactResource = new ContactResource($client);

$contactRequest = new ContactRequest();
$contactRequest->email = 'adrianadamiec@gmail.com';
$contactRequest->name = 'Adrian Adamiec';
$contactRequest->dayOfCycle = 0;
$campaign = new ContactCampaignRequest();
$campaign->campaignId = 'yk9Ie';
$contactRequest->campaign = $campaign;

$contactId = 'SWNn1t';

try {
//    $rsp = $contactResource->createContact($contactRequest);
//    $rsp = $contactResource->updateContact($contactId, $contactRequest);
    $rsp = $contactResource->deleteContact($contactId);
    print_r($rsp);exit;
} catch( \Exception $e ) {
    print_r($e);exit;
}

<?php

namespace Shoplo\GetResponse\Resource;

use Shoplo\GetResponse\GetResponseClient;
use Shoplo\GetResponse\Model\Campaign\Response\CampaignCollectionResponse;
use Shoplo\GetResponse\Model\Contact\Response\ContactCollectionResponse;

class CampaignResource
{
    /** @var GetResponseClient */
    private $getResponseClient;

    /**
     * CampaignResource constructor.
     * @param GetResponseClient $GetResponseClient
     */
    public function __construct(GetResponseClient $GetResponseClient)
    {
        $this->getResponseClient = $GetResponseClient;
    }

    private function getCampaignsUrl()
    {
        return 'campaigns';
    }

    private function findCampaignContactUrl($campaignId)
    {
        return sprintf('campaigns/%s/contacts', $campaignId);
    }

    public function getCampaignsList()
    {
        return $this->getResponseClient->get(
            CampaignCollectionResponse::class,
            $this->getCampaignsUrl()
        );
    }

    public function findContact($campaignId, $email)
    {
        return $this->getResponseClient->get(
            ContactCollectionResponse::class,
            $this->findCampaignContactUrl($campaignId),
            ['query'=>['email'=>$email]]
        );
    }
}

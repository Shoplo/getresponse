<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Campaign\Response;

use Shoplo\GetResponse\Model\BaseCollectionResponse;

class CampaignCollectionResponse extends BaseCollectionResponse
{
    /**
     * @var CampaignResponse[]
     */
    public $items;
}
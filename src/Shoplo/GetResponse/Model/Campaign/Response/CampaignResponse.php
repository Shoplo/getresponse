<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Campaign\Response;

class CampaignResponse
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var boolean
     */
    public $isDefault;

    /**
     * @var string
     */
    public $createdOn;

    /**
     * @var string
     */
    public $href;
}

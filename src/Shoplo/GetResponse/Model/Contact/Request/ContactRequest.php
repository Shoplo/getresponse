<?php

namespace Shoplo\GetResponse\Model\Contact\Request;


class ContactRequest
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var ContactCampaignRequest
     */
    public $campaign;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $dayOfCycle;
}

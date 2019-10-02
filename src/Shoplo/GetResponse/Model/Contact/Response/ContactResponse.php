<?php

namespace Shoplo\GetResponse\Model\Contact\Request;

class ContactResponse
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $origin;

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

    /**
     * @var string
     */
    public $note;
}

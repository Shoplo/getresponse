<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Contact\Response;

use Shoplo\GetResponse\Model\Contact\Request\ContactCampaignRequest;

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
     * @var string|null
     */
    public $note;
}

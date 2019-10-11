<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Contact\Response;

use Shoplo\GetResponse\Model\BaseCollectionResponse;

class ContactCollectionResponse extends BaseCollectionResponse
{
    /**
     * @var ContactResponse[]
     */
    public $items;
}
<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Callback\Response;

use Shoplo\GetResponse\Model\BaseCollectionResponse;

class CallbackCollectionResponse extends BaseCollectionResponse
{
    /**
     * @var CallbackResponse[]
     */
    public $items;
}
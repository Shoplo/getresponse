<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Callback\Request;

class CallbackRequest
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var CallbackActionsRequest
     */
    public $actions;
}

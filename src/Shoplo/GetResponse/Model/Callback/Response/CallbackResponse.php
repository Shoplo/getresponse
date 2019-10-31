<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Callback\Response;

class CallbackResponse
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var CallbackActionsResponse
     */
    public $actions;
}

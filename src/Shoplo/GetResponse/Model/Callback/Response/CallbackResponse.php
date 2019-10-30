<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Callback\Response;

use Shoplo\GetResponse\Model\Callback\Request\CallbackActionsResponse;

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

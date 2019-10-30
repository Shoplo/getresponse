<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Callback\Request;

class CallbackActionsRequest
{
    /**
     * @var boolean
     */
    public $open = false;

    /**
     * @var boolean
     */
    public $click = false;

    /**
     * @var boolean
     */
    public $goal = false;

    /**
     * @var boolean
     */
    public $subscribe = false;

    /**
     * @var boolean
     */
    public $unsubscribe = false;

    /**
     * @var boolean
     */
    public $survey = false;
}

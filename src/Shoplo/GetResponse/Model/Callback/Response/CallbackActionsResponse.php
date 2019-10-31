<?php

declare(strict_types=1);

namespace Shoplo\GetResponse\Model\Callback\Response;

class CallbackActionsResponse
{
    /**
     * @var boolean
     */
    public $open;

    /**
     * @var boolean
     */
    public $click;

    /**
     * @var boolean
     */
    public $goal;

    /**
     * @var boolean
     */
    public $subscribe;

    /**
     * @var boolean
     */
    public $unsubscribe;

    /**
     * @var boolean
     */
    public $survey;
}

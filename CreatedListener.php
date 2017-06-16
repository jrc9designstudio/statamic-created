<?php

namespace Statamic\Addons\Created;

use Statamic\Extend\Listener;

class CreatedListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        'cp.add_to_head'  => 'css',
    ];

    /**
     * Initialize Aggregator assets
     * @return string css link
     */
    public function css()
    {
        return $this->css->tag('created.css');
    }
}

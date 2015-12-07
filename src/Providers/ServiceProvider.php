<?php

namespace b3nl\Avatar\ContentType\HTML\Providers;

use b3nl\Avatar\ContentType\HTML\Listeners\AddFillable;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;

/**
 * The service provider for this module.
 * @author b3nl <code@b3nl.de>
 * @category Providers
 * @package b3nl\Avatar\ContentType\HTML
 * @subpackage Providers
 * @version $id$
 */
class ServiceProvider extends EventServiceProvider
{
    /**
     * Event-Listeners.
     * @var array
     */
    protected $listen = ['eloquent.constructing: Avatar\Content' => [AddFillable::class]];

    /**
     * Perform post-registration booting of services.
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $this->publishes(
            [__DIR__.'/../../database/migrations/' => database_path('migrations')], 'migrations'
        );

        return parent::boot($events);
    }
} // class

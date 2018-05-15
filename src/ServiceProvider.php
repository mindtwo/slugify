<?php

namespace mindtwo\Slugify;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SluggerInterface::class, WordPressSlugger::class);
    }
}

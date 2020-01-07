<?php

namespace Hanbiro\HanbiroApp\Providers;

use Illuminate\Support\ServiceProvider;
use Hanbiro\HanbiroApp\Commands\HanbiroSetup;

/**
 * Class HanbiroAppServiceProvider.
 *
 * @since 07/01/2020 11:23 PM
 */
class HanbiroAppServiceProvider extends ServiceProvider
{
    /**
     * @var \Illuminate\Foundation\Application
     */

    public function boot()
    {
        $this->commands([
            HanbiroSetup::class
        ]);
    }
}
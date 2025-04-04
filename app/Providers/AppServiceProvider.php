<?php

namespace App\Providers;

use Spark\Container;

/**
 * This file contains the service providers for the web application.
 *
 * A service provider is a class that adds functionality to the
 * application. The service providers in this file are only loaded
 * when the application is running in web mode.
 */
class AppServiceProvider
{
    /**
     * Registers services in the application container.
     *
     * This method is called when the service provider is registered in the
     * application container. It is used to add services to the container
     * that can be used by the application.
     *
     * @param Container $container
     *   The application container.
     *
     * @return void
     */
    public function register(Container $container)
    {
        // i am registering services
    }

    /**
     * Boots the service provider.
     *
     * This method is called after all the service providers have been
     * registered. It is used to perform any necessary setup or bootstrapping
     * of the application.
     *
     * @return void
     */
    public function boot()
    {
        // i am bootstrapping services
    }
}
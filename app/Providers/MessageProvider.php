<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\MessageRepository;
use App\Repository\MessageRepositoryInterface;

class MessageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            MessageRepositoryInterface::class,
            MessageRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

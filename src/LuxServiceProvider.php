<?php

namespace RenatoValer\Lux;

use Illuminate\Support\ServiceProvider;

class LuxServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/Api.php');
        $this->loadRoutesFrom(__DIR__.'/Routes/Web.php');
    }

    public function register()
    {
        $this->app->singleton('lux', function() {
            return new Lux();
        });
		$this->providers();
		$this->repositories();
    }
	
	private function providers()
	{
		//Prettus\Repository
		//$this->app->register(\Prettus\Repository\Providers\RepositoryServiceProvider::class);
	}
	
	private function repositories()
	{
		/*
		$this->app->bind(
			\RenatoValer\Lux\Repositories\UsersRepository::class,
            \RenatoValer\Lux\Repositories\RepositoryEloquent::class
        );
		*/
	}
}

<?php
namespace Peltronic\Assetmanager;

use Illuminate\Support\ServiceProvider;

class AssetmanagerServiceProvider extends ServiceProvider
{
    protected $defer = true;

	public function boot() {

        /*
		$this->publishes([
			__DIR__.'/../config/assetmanager.php' => config_path('assetmanager.php'),
		], 'assetmanager');
         */
	}

    public function register() {
		//$this->mergeConfigFrom( __DIR__.'/../config/assetmanager.php', 'assetmanager');

        $this->app->singleton('assetmanager', function($app) {
            //$config = $app->make('config');

            //$uri = $config->get('assetmanager.uri');
            //$uriOptions = $config->get('assetmanager.uriOptions');
            //$driverOptions = $config->get('assetmanager.driverOptions');

            return new AssetmanagerService();
        });

        $this->app->alias('assetmanager', AssetmanagerService::class);
    }

    public function provides() {
        return ['assetmanager'];
    }
}

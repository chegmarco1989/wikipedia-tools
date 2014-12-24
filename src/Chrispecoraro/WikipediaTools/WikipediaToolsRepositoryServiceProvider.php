<?php namespace Chrispecoraro\WikipediaTools;

use Illuminate\Support\ServiceProvider;

class WikipediaToolsRepositoryServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('InfoboxInterface', function($app)
		{
			return new InfoboxRepository(new Infobox());
		});
	}

    public function boot(){
        $this->package('Chrispecoraro/wikipediaTools');
    }
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}

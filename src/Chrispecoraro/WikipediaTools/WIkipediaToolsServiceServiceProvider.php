<?php namespace Chrispecoraro\WikipediaTools;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class WikipediaToolsServiceServiceProvider extends ServiceProvider
{
    /**
     * Registers the service in the IoC Container
     *
     */
    public function register()
    {
        $this->app->bind('InfoboxService', function($app)
        {
            return new InfoboxService(
                $app->make('InfoboxInterface')
            );
        });
    }
    public function boot(){
        $this->package('Chrispecoraro/wikipediaTools');
        AliasLoader::getInstance()->alias('WikiTools', 'Chrispecoraro\WikipediaTools\InfoboxFacade');

    }

}

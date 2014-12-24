<?php
namespace Chrispecoraro\WikipediaTools;

use \Illuminate\Support\Facades\Facade;

class InfoboxFacade extends Facade {

    protected static function getFacadeAccessor() { return 'InfoboxService'; }

}
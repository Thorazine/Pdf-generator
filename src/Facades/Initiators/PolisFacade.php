<?php

namespace NH1816\Polis\Facades;

use Illuminate\Support\Facades\Facade;

class PolisFacade extends Facade {


    protected static function getFacadeAccessor() 
    { 
        return 'polis'; 
    }
}

<?php
namespace App;
class PostCard{
    public static function resolveFacade($name){
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        self::resolveFacade('PostCard')->$method(...$arguments);
    }

}

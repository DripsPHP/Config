<?php
namespace Drips\Config;
class Config
{
    protected static $collection = array();

    public static function get($key, $default=null) {
        if (static::has($key)) {
            return static::$collection[$key];
        }
        return $default;
    }
    public static function set($key, $value) {
        static::$collection[$key] = $value;
    }
    public static function has($key) {
        return array_key_exists($key, static::$collection);
    }
}

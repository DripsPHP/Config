<?php

namespace Drips\Config;

/**
 * Class Config
 *
 * Diese Klasse beinhaltet sämtliche Konfigurationsinformationen und kann zum Auslesen und Beschreiben von Konfigurationen
 * verwendet werden.
 *
 * @package Drips\Config
 */
class Config
{
    /**
     * Beinhaltet die Konfigurationsinformationen
     *
     * @var array
     */
    protected static $collection = array();

    /**
     * Hierbei handelt es sich um eine statische Klasse, dementsprechend sollen keine Objekte angelegt werden können.
     */
    private function __construct(){}

    /**
     * Hierbei handelt es sich um eine statische Klasse, dementsprechend sollen keine Objekte dupliziert werden können.
     */
    private function __clone(){}

    /**
     * Mithilfe dieser Methode kann der Wert einer Konfiguration abgefragt werden und gleichzeitig ein Standardwert
     * übergeben werden, welcher zurückgeliefert wird, wenn der Wert nicht gesetzt ist.
     *
     * @param $key
     * @param null $default
     *
     * @return mixed|null
     */
    public static function get($key, $default = null)
    {
        if (static::has($key)) {
            return static::$collection[$key];
        }

        return $default;
    }

    /**
     * Liefert die komplette Konfiguration als Array zurück.
     *
     * @return array
     */
    public static function getAll()
    {
        return static::$collection;
    }

    /**
     * Setzt einen Wert in der Konfiguration oder überschreibt diesen.
     *
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        static::$collection[$key] = $value;
    }

    /**
     * Prüft ob eine Konfigurationsinformation in der Konfiguration vorhanden ist oder nicht
     *
     * @param $key
     *
     * @return bool
     */
    public static function has($key)
    {
        return array_key_exists($key, static::$collection);
    }
}

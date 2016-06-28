# Config

[![Build Status](https://travis-ci.org/Prowect/Config.svg)](https://travis-ci.org/Prowect/Config)
[![Code Climate](https://codeclimate.com/github/Prowect/Config/badges/gpa.svg)](https://codeclimate.com/github/Prowect/Config)
[![Test Coverage](https://codeclimate.com/github/Prowect/Config/badges/coverage.svg)](https://codeclimate.com/github/Prowect/Config/coverage)

## Beschreibung

Mithilfe der Config-Klasse kann einheitlich auf die Konfiguration eines Systems zugegriffen werden.

## Konfiguration hinzufügen

Mithilfe von `Config::set()` lässt sich ein neuer Konfigurationseintrag erstellen:

```php
<?php
use Drips\Config\Config;

Config::set('my_config_option', 'my_config_value');
```

## Konfiguration auslesen

Daten aus der Konfiguration können wie folgt abgefragt werden:

```php
<?php
use Drips\Config\Config;

Config::get('my_config_option', 'default_value');
```

> Ist kein Eintrag für `my_config_option` vorhanden, so wird der `default_value` verwendet. Der Default-Wert ist optional und kann somit auch weggelassen werden.

## Konfiguration überprüfen

Mithilfe der `has`-Methode kann überprüft werden, ob eine Option in der Konfiguration vorhanden ist:

```php
<?php
use Drips\Config\Config;

if(Config::has('my_config_option')){
    // my_config_option existiert
} else {
    // my_config_option existiert nicht
}
```

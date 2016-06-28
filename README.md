# Config

[![Build Status](https://travis-ci.org/Prowect/Config.svg)](https://travis-ci.org/Prowect/Config)
[![Code Climate](https://codeclimate.com/github/Prowect/Config/badges/gpa.svg)](https://codeclimate.com/github/Prowect/Config)
[![Test Coverage](https://codeclimate.com/github/Prowect/Config/badges/coverage.svg)](https://codeclimate.com/github/Prowect/Config/coverage)

# Config

zum Konfigurieren der Datenbankeinstellungen

## Beispiel
```php
<?php

//Zuweisung der Zugangsvariablen
$key = 'key';
$value = 'value';

set($key, $value);


//Überprüfung, ob $key existiert
if(Config::has($key)){
// $key wurde bereits zugewiesen
}else{
 // $key wurde noch nicht zugewiesen
}


//Auslesen
Config::get($key);
//$collection['key'] = 'key';
//$collection['value'] = 'value';
```
`get()` kann auch ohne Parameter aufgerufen werden. In diesem Fall wird ein Standardwert übernommen.

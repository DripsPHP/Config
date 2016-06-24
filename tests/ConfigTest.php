<?php

namespace tests;

use PHPUnit_Framework_TestCase;
use Drips\Config\Config;

class ConfigTest extends PHPUnit_Framework_TestCase
{
   public function testDC()
   {
       $key = 'key';
       $value = 'value';
       $key2 = 'key2';
       $value2 = 'value2';
       $this->assertFalse(Config::has($key));
       Config::set($key, $value);
       $this->assertTrue(Config::has($key));
       $this->assertEquals(Config::get($key), $value);
       $this->assertEquals(Config::get($key2, $value2), $value2);
   }
}

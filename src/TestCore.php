<?php

namespace TestDeploy;

class Core {

    protected static $world = 'world';

    public static function Hello() {
        print 'Hello, ' . self::$world;
    }

    public function help()
    {
        print 'This is some new functional';
    }
}
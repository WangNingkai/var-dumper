<?php
namespace WangNingkai\VarDumper;

use WangNingkai\VarDumper\Dumper;

class VarDumper
{
    public static function dump()
    {
        foreach ($args as $var) {
            (new Dumper)->dump($var);
        }
    }

    public static function dd($args)
    {
        foreach ($args as $var) {
            (new Dumper)->dump($var);
        }
        die(1);
    }

    public static function dda($args)
    {
        foreach ($args as $var) {
            (new Dumper)->dump($var->toArray());
        }
        die(1);
    }
}
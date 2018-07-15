<?php

 use WangNingkai\VarDumper\Dumper;

 if (! function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dd($args)
    {
        foreach ($args as $var) {
            (new Dumper)->dump($var);
        }
        die(1);
    }
}

if (! function_exists('dda')) {
    /**
     * Dump the passed array variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function dda($args)
    {
        foreach ($args as $var) {
            (new Dumper)->dump($var->toArray());
        }
        die(1);
    }
}
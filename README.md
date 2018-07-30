> VarDumper组件提供的是能够遍历任意PHP变量的架构。它基于dump()函数提供了更好的体验，你可以用它取代var_dump()。它基于symfony/var-dumper

## 安装方法 :

    composer require wangningkai/var-dumper

## 使用方法：

可以参考目录下的 `heplers/functions.php` 内容



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

#### 将其加入到项目的全局函数中去

#### 在其他文件中可以参考下面

```php

<?php

require __DIR__.'/vendor/autoload.php';

use WangNingkai\VarDumper\Vardumper;



$var = array(

    'a simple string' => 'in an array of 5 elements',

    'a float' => 1.0,

    'an integer' => 1,

    'a boolean' => true,

    'an empty array' => array(),

);

Vardumper::dd($var);

```
<?php
namespace test{
    $list=scandir(__DIR__);
    var_dump($list);
    require __DIR__.'/loader.php';
    Loader::FindFile();
}

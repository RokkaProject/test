<?php
namespace test{
    $list=scandir(__DIR__);
    // 遍历核心文件
    for($i=3;$i<count($list);$i++)
    {
        require __DIR__.'/'.$list[$i];
    }
    Loader::findFile();
    route::handleUrl();
}

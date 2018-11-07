<?php
namespace test{
    class route{
        protected $item = [];
        /**
        * 根据路由标识获取路由信息（用于URL生成）
        * @access public
        * @param  string   $name      路由标识
        * @param  string   $domain   域名
        */
        public static function get($name1,$domain){
            
        }
        // 处理url
        public static function handleUrl(){
            $urlList = explode("/",$_SERVER['REQUEST_URI']);
            // 模块
            $model = $urlList[1];
            // 控制器
            $class = $urlList[2];
            // 方法
            $action = $urlList[3];
            unset($urlList[0]);
            unset($urlList[1]);
            unset($urlList[2]);
            unset($urlList[3]);
            // 参数
            $parameter = $urlList;
            // 引入指定应用文件
            require dirname(__DIR__) ."/application/" . $model . "/control/" . $class .".php";

        }
    }
}
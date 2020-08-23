<?php
header('content-type:text/html;charset=utf-8');
//用来记录入口指令
define("MVC", true);
//应用文件夹 __DIR__获取当前程序运行目录
define("APP_DIR_NAME", "application");
define("APP_NAME", __DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);
require_once 'libs/start.php';
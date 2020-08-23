<?php
//开启缓存区
ob_start();
echo '我是输出到客户端的内容';
$con = ob_get_contents();
echo $con;
//结束缓存区 并且输出给客户端
//不指定ob_end_flush() 缓存区会将其他代码执行完成后输出
//只要放在缓存区的内容 就是以及经过php解析 并且返回给Apache，Apache返回给户端内容（静态页面html/css/js）
//ob_end_flush();
header('content-type:text/html;charset=utf-8');

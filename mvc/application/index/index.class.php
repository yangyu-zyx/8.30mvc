<?php
if (!defined('MVC')) {
    die('非法入侵');
}
class index {
    function int() {

        echo 'welcome to my mvc';

//        //smarty
//        $smarty = new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        //1.php操作数据库
//        //1.对象方式访问
//        $db = @new mysqli("localhost","root", "root", "phpdemo", "3306");
//        if (mysqli_connect_error()) {
//            die("数据库链接错误");
//        }
//        //2.对数据库操作
//        //query中写sql语句
//        $db->query("set names uft8");
//
//        //$db->query('insert into demo (name,age,sex) values("glnz",28,"女")');
//        //$db->query("update demo set name='dlrb' where name='glnz'");
//        //$db->query("delete from demo where name='dlrb'");
//        //echo $db->affected_rows;
//
//        //查询语句 结果集是一个对象 获取具体的数据
//        $result = $db->query("select * from demo");
//
//        //3.将数据从结果中取出
//        //$result->fetch_assoc()取出关联数据
//        while ($row=$result->fetch_assoc()) {
//            $data[] = $row;
//        }
//
//
//        $smarty->assign('data',$data);
//        $smarty->display("login.html");

    }
}
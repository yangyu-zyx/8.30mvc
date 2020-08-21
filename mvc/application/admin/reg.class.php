<?php
class reg {
    function add() {
        $smarty = new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/reg.html");
//        $smarty->display("admin/login.html");
    }
    function addUser() {
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $pwd1 = $_POST['pwd1'];
        if ($pwd !== $pwd1) {
            echo "密码不一致";
            return;
        }

        //连接数据库
        $db = new mysqli('localhost', 'root', 'root', 'phpdemo');
        if (mysqli_connect_error()) {
            die('数据库连接错误');
        }
        $db->query("set names utf8");
//        echo "insert into user(uname, pwd) values('$uname', '$pwd')";
        $db->query("insert into user(uname, pwd) values('$uname', '$pwd')");
        if ($db->affected_rows>0) {
            echo "插入成功";
        }
    }
}
<?php
use \libs\smarty;
use \libs\db;
class reg {
    function add() {
        $smarty = new Smarty();
        $smarty->display("admin/reg.html");
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
        $database = new db();
        $db = $database->db;
        //验证
        $result = $db->query("select uname from user where uname = '{$uname}'");
        if ($result->num_rows>0) {
            echo "用户名存在";
            return;
        }
        $pwd = md5(md5($pwd));
        $db->query("insert into user(uname, pwd) values('$uname', '$pwd')");
        if ($db->affected_rows>0) {
            echo "插入成功";
        }
    }
    function checkName() {
        $uname = $_POST["uname"];
        $db = new mysqli('localhost', 'root', 'root', 'phpdemo');
        $db->query("set names utf8");
        $result = $db->query("select uname from user where uname = '{$uname}'");
//        echo "select uname from user where uname = '{$uname}'";
        //小于1说明数据库没有该用户名
        if ($result->num_rows<1) {
            echo "true";
        }else {
            echo "false";
        }
        $db->close();
    }
}
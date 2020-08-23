<?php
if (!defined("MVC")) {
    echo '非法入侵';
}
use \libs\smarty;
use \libs\db;
class index {

    function int(){
        $smarty = new Smarty();
        $smarty->display("admin/login.html");
    }

    function login() {
        $uname = addslashes($_POST['uname']);
        $pwd = md5(md5($_POST['pwd']));
        //验证
        if (strlen($uname)<1||empty($pwd)) {
            echo "用户输入不正确";
            return;
        }
        //连接数据库
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from user where uname = '{$uname}' and pwd = '{$pwd}'");
        if (!$result->num_rows) {
            echo '没有相应数据';
        }else {
            header("location:http://localhost:8888/htdocs/mvc/index.php/admin/index/first/");
        }

        $db->close();

    }

    function first() {
        echo '后台';
    }


}
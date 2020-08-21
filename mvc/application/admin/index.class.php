<?php
if (!defined("MVC")) {
    echo '非法入侵';
}
class index {

    function int(){
        $smarty = new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/login.html");
    }

    function login() {
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];

        //连接数据库
        $db = new mysqli('localhost', 'root', 'root','phpdemo');
        $db->query('utf8');
        $result = $db->query("select * from user where uname = '$uname' and pwd = '$pwd'");
        if (!$result->num_rows) {
            echo '没有相应数据';
        }else {
//            header("location:/first");
            header("location:http://localhost:8888/htdocs/mvc/index.php/admin/index/first/");
//            echo "ok";
        }

    }

    function first() {
        echo 'ok';
    }


}
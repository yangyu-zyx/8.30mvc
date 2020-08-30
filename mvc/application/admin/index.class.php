<?php
if (!defined("MVC")) {
    echo '非法入侵';
}
use \libs\smarty;
use \libs\db;
use \libs\code;
//不用cookie 用session
//use \libs\cookie;

class index {
    function int(){
        $smarty = new Smarty();
        $smarty->display("admin/login.html");
    }
    function login() {
        global $config;
        $uname = addslashes($_POST['uname']);
        $pwd = md5(md5($_POST['pwd']));
        //验证码
//        if (!(isset($_COOKIE['code'])&&$_COOKIE['code']==$_POST['code'])) {
        if ($config["code"]["ischeck"]){
            if (!($_POST["code"]==$_SESSION["code"])) {
                echo "验证码输入有误";
                return;
            }
        }
        //验证
        if (strlen($uname)<1||empty($pwd)) {
            echo "用户输入不正确||密码输入为空";
            return;
        }
        //连接数据库
        $database = new db();
        $db = $database->db;
        $result = $db->query("select * from user where uname = '{$uname}' and pwd = '{$pwd}'");
        if (!$result->num_rows) {
            echo '没有相应数据';
        }else {
            //设置cookie名为login
//            setcookie('login','yes','0',"/");
//            $cookie = new cookie();
//            $cookie->setCookie("login", "yes");

            $_SESSION["login"] = "yes";
            $_SESSION["uname"] = $uname;
            header("location:http://localhost:8888/htdocs/mvc/index.php/admin/index/first/");
        }
        $db->close();
    }
    function logout() {
        session_destroy();
        header("location:http://localhost:8888/htdocs/mvc/index.php/admin");
    }
    function first() {
//        if (isset($_COOKIE["login"])&&$_COOKIE["login"]=="yes") {
//        $cookie = new cookie();
//        if ($cookie->isCookie("login")&&$cookie->getCookie("login")=="yes"){
        if (isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty = new smarty();
            $smarty->assign("uname", $_SESSION["uname"]);
            $smarty->display("admin/index.html");

        }else {
            //没有login则直接返回到登陆页面
            header("location:http://localhost:8888/htdocs/mvc/index.php/admin");
        }
    }
    function mycode() {
        //会话机制
        $code=new code();
        $code->out();
//        setcookie(code,$code->str);
    }

}
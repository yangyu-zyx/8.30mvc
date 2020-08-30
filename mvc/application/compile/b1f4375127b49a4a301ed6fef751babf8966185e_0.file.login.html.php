<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 11:56:40
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f44fc782ac036_97143261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f4375127b49a4a301ed6fef751babf8966185e' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/login.html',
      1 => 1598356599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f44fc782ac036_97143261 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LYZ后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        // document.cookie="name=lyz";
    <?php echo '</script'; ?>
>
</head>
<body>
    <form class="form-horizontal" action="http://localhost:8888/htdocs/mvc/index.php/admin/index/login/" method="post">
        <h1>欢迎来到LYZ后台管理系统</h1>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pwd">
            </div>
        </div>
        <div class="form-group">
            <label for="code" class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">
                <input type="text" placeholder="请输入验证码" id="code" name="code">
                <img src="http://localhost:8888/htdocs/mvc/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost:8888/htdocs/mvc/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer;width: 120px">
                看不清楚？点击切换
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> 记住密码
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">登陆</button>
                &nbsp;&nbsp;没有账号？请
                <a href="http://localhost:8888/htdocs/mvc/index.php/admin/reg/add">注册</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}

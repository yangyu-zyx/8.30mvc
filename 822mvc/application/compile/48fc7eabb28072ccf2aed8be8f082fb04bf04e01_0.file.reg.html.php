<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 07:43:31
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f421e23e3e374_46800628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48fc7eabb28072ccf2aed8be8f082fb04bf04e01' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/reg.html',
      1 => 1598168519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f421e23e3e374_46800628 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册页面</title>
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
reg.js"><?php echo '</script'; ?>
>
</head>
<body>
    <form class="form-horizontal" action="http://localhost:8888/htdocs/mvc/index.php/admin/reg/addUser" method="post">
        <h1>注册页面</h1>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="密码" name="pwd">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd1" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd1" placeholder="确认密码" name="pwd1">
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
                <button type="submit" class="btn btn-default">注册</button>
                &nbsp;&nbsp;已有账号？请
                <a href="http://localhost:8888/htdocs/mvc/index.php/admin" class="btn btn-default">登陆</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}

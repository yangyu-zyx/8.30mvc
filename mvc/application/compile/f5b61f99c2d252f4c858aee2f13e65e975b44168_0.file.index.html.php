<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 08:11:16
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f81a41ced71_79219486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5b61f99c2d252f4c858aee2f13e65e975b44168' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/login.html',
      1 => 1597997462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f81a41ced71_79219486 (Smarty_Internal_Template $_smarty_tpl) {
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
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
    <form class="form-horizontal" action="admin/index/login" method="post">
        <h1>欢迎来到LYZ后台管理系统</h1>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="user">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pwd">
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
                <a href="admin/reg/add" class="btn btn-default">注册</a>
            </div>
        </div>
    </form>
</body>
</html><?php }
}

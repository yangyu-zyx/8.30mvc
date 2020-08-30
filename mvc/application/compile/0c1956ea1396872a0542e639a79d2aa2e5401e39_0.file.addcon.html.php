<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 10:51:32
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/addcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f479034f21eb9_64089317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1956ea1396872a0542e639a79d2aa2e5401e39' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/addcon.html',
      1 => 1598525466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f479034f21eb9_64089317 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>content</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addcon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <form action="/htdocs/mvc/index.php/admin/content/addcon" method="post">
        <div class="form-group">
            <label for="cid">所属栏目</label>
            <select id="cid" name="cid" class="form-control">
            </select>
        </div>
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" placeholder="输入标题">
        </div>
        <div class="form-group">
            <label for="cons">内容主题</label>
            <textarea id="cons" name="conts" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
    </div>
</body>
</html><?php }
}

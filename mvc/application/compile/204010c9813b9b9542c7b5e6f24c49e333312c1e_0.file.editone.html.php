<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 01:40:11
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/editone.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48607b189ec1_89182719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '204010c9813b9b9542c7b5e6f24c49e333312c1e' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/editone.html',
      1 => 1598578802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48607b189ec1_89182719 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>editone</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
    <style>
        .container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="/htdocs/mvc/index.php/admin/content/editone" method="post">
        <div class="form-group">
            <label for="cid">所属栏目</label>
            <select id="cid" name="cid" cid="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
" class="form-control">
            </select>
        </div>
        <input type="hidden" name="conid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
        </div>
        <div class="form-group">
            <label for="cons">内容主题</label>
            <textarea id="cons" name="conts" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['conts'];?>
</textarea>
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
</div>
</body>
</html><?php }
}

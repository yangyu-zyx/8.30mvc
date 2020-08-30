<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 01:57:49
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/showlist.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48649dc1e783_06969665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508e4161f201cac783857f2ae0eba3ea6cfbb401' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/showlist.html',
      1 => 1598579867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48649dc1e783_06969665 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>showList</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/showcon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
showcon.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <td>所属栏目</td>
                <td>标题</td>
                <td>操作</td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
                <td>
                    <a href="/htdocs/mvc/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                    <a href="/htdocs/mvc/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                    <a href="/htdocs/mvc/index.php/admin/content/del?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body>
</html><?php }
}

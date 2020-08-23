<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 12:19:15
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3e6a438dd361_02720404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2736cd9056475a58161a83a61c1f56d070ffbf8' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/login.html',
      1 => 1597925954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3e6a438dd361_02720404 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
    <ul>
        <li>姓名：<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</li>
        <li>年龄：<?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</li>
        <li>
            性别：
            <?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == 'nan') {?>
            男
            <?php } else { ?>
            女
            <?php }?>
        </li>


    </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <a href="index.php/teacher/teacher/add">添加日志</a>
</body>
</html><?php }
}

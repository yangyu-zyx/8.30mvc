<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 05:09:39
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49e313ca4921_38817490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9db696fb20a2359d284ca00196cec45c54707a48' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/show.html',
      1 => 1598677778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f49e313ca4921_38817490 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show</title>
    <style>
        .list-box {
            width: 1000px;
            margin: auto;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="list-box">
    <h1><?php echo $_smarty_tpl->tpl_vars['condata']->value["ctitle"];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['condata']->value["conts"];?>
</p>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}

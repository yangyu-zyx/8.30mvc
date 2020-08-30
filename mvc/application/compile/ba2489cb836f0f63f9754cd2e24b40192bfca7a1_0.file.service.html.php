<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 09:36:16
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/service.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a2190b1a570_15441584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba2489cb836f0f63f9754cd2e24b40192bfca7a1' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/service.html',
      1 => 1598693776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a2190b1a570_15441584 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>service</title>
    <style>
        h1,h2,h3,h4,h5,h6 {
            padding: 0;
            margin: 0;
        }
        body {
            background-color: #eaeaea;
        }
        .my-service {
            width: 1000px;
            text-align: center;
            margin: 10px auto;
            background-color: #fff;
        }
        .my-service-box {
            width: 800px;
            margin: auto;
        }
        .my-service-list {
            float: left;
            width: 200px;
            height: 200px;
        }
        .my-advance {
            width: 1000px;
            text-align: center;
            margin: 10px auto;
            background-color: #fff;
        }
        .my-advance-box {
            width: 800px;
            margin: auto;
        }
        .my-advance-list {
            float: left;
            width: 50%;
            margin-top: 20px;
        }
        .my-advance-list li {
            float: left;
        }
        .my-advance-list li:nth-child(1) {
            width: 100px;
            height: 100px;
        }
        .my-advance-list li:nth-child(2) {
            width: 300px;
            height: 100px;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="my-service">
        <h3><?php echo $_smarty_tpl->tpl_vars['sonInfo']->value[0]["cname"];?>
</h3>
        <h6><?php echo $_smarty_tpl->tpl_vars['sonInfo']->value[0]["info"];?>
</h6>
        <div class="my-service-box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <ul class="my-service-list">
                <li><img src="<?php echo IMG_ADD;?>
icon.png" alt=""></li>
                <li><h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4></li>
                <li><?php echo $_smarty_tpl->tpl_vars['v']->value["conts"];?>
</li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div style="clear: both"></div>
        </div>
    </div>

    <div class="my-advance">
        <h3><?php echo $_smarty_tpl->tpl_vars['sonInfo']->value[1]["cname"];?>
</h3>
        <h6><?php echo $_smarty_tpl->tpl_vars['sonInfo']->value[1]["info"];?>
</h6>
        <div class="my-advance-box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <ul class="my-advance-list">
                <li><img src="<?php echo IMG_ADD;?>
icon.png" alt=""></li>
                <li>
                    <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
                    <h6><?php echo $_smarty_tpl->tpl_vars['v']->value["conts"];?>
</h6>
                </li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div style="clear: both"></div>
        </div>
    </div>

    <div class="my-service my-flow">
    <h3><?php echo $_smarty_tpl->tpl_vars['sonInfo']->value[2]["cname"];?>
</h3>
    <h6><?php echo $_smarty_tpl->tpl_vars['sonInfo']->value[2]["info"];?>
</h6>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="my-service-list">
            <li><img src="<?php echo IMG_ADD;?>
icon.png" alt=""></li>
            <li><h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4></li>
            <li><?php echo $_smarty_tpl->tpl_vars['v']->value["conts"];?>
</li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}

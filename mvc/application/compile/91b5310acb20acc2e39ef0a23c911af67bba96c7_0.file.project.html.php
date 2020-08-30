<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:01:08
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/project.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b9504cfc325_92885269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91b5310acb20acc2e39ef0a23c911af67bba96c7' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/project.html',
      1 => 1598788866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b9504cfc325_92885269 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>方案</title>
    <style>
        .lists-box {
            width: 1000px;
            background-color: #fff;
            margin: 10px auto;
            padding: 0 50px;
            box-sizing: border-box;
        }
        .list-content {
            width: 800px;
            margin: auto;
        }
        .list {
            float: left;
            width: 200px;
            height: 200px;
            text-align: center;
        }
        .list a {
            display: block;
            width: 100%;
            height: 100%;
            text-decoration: none;
            color: #555;
        }
        .list {
            font-size: 14px;
        }
    </style>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <ul class="lists-box">
        <div class="list-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sonInfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="list">
                <a href="/htdocs/mvc/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                    <h3><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</h3>
                    <div><?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</div>
                </a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div style="clear: both"></div>
        </div>
    </ul>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 04:42:18
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49dcaa6f7526_73492392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6393943cfd0eab8d33c2ff68f74ec7a3892dfce' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/index/header.html',
      1 => 1598676137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f49dcaa6f7526_73492392 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
<header>
        <div class="logo">
            <img src="<?php echo IMG_ADD;?>
logo.png" alt="佳速">
            <h3>更好更快的互联网开发服务商</h3>
        </div>
        <ul class="menu">
            <li>
                <a href="/htdocs/mvc/index.php">首页</a>
            </li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li>
                <a href="/htdocs/mvc/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                <ul class="son">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v2');
$_smarty_tpl->tpl_vars['v2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->do_else = false;
?>
                    <li>
                        <a href="/htdocs/mvc/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v2']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v2']->value["cname"];?>
</a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </header>
 <div class="swiper">
        <img src="<?php echo IMG_ADD;?>
swip.jpg" alt="">
    </div>
<?php }
}

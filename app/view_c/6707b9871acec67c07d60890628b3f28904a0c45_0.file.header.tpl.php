<?php
/* Smarty version 3.1.30, created on 2017-06-05 14:18:59
  from "/var/www/html/app/view/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5934f7d34c3655_36007786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6707b9871acec67c07d60890628b3f28904a0c45' => 
    array (
      0 => '/var/www/html/app/view/header.tpl',
      1 => 1496643516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5934f7d34c3655_36007786 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header">
    <div class="center">
        <p>fireupCMS</p>
            <ul>
                <li><a href="<?php echo makeUrl('Index','index');?>
">首页</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                <li><a href="<?php echo makeUrl('Index','articleList');?>
/id/<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
     </div>
</div>
<?php }
}

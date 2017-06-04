<?php
/* Smarty version 3.1.30, created on 2017-06-04 23:45:44
  from "/var/www/html/app/view/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59342b285d82d6_09862718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d0b6f8b9b23b509361b807f929f09bc49de6f96' => 
    array (
      0 => '/var/www/html/app/view/sidebar.tpl',
      1 => 1496591072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59342b285d82d6_09862718 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidebar">
    <p>文章排行</p>
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['topArticles']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topArticles']->value, 'article', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['article']->value) {
?>
        <li class="num<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
"><a href="<?php echo makeUrl('Index','article');?>
/id/<?php echo $_smarty_tpl->tpl_vars['article']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
    </ul>
</div>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-05-27 08:30:37
  from "/var/www/html/admin/view/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5928c8ad42da57_53458898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc34abe95b2dfc35adde17ccd6c7607c3e655f5f' => 
    array (
      0 => '/var/www/html/admin/view/header.tpl',
      1 => 1495844961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:static.tpl' => 1,
  ),
),false)) {
function content_5928c8ad42da57_53458898 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <title>CMS后台管理</title>
    <?php $_smarty_tpl->_subTemplateRender("file:static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/css/nav.css">
</head>
<?php }
}

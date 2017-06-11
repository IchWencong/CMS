<?php
/* Smarty version 3.1.30, created on 2017-06-11 18:32:36
  from "/var/www/html/app/view/articlelist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593d1c44bfdf55_77293658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caec8bee5b33b64a119ee1bad8efd94495928078' => 
    array (
      0 => '/var/www/html/app/view/articlelist.tpl',
      1 => 1497177129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_593d1c44bfdf55_77293658 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['basic']->value['web_desc'];?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['basic']->value['web_keywords'];?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['basic']->value['web_title'];?>
</title>
    <fireup style="display:none;"><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</fireup>
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/basic.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/index.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/sidebar.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/articlelist.css" />
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
    <div class="article-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArticleInfo']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <div class="item">
            <h2><a href="<?php echo makeUrl('Index','article');?>
/id/<?php echo $_smarty_tpl->tpl_vars['article']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_title'];?>
</a></h2>
            <p>
                <span class="copy-from">来源:<?php echo $_smarty_tpl->tpl_vars['article']->value['a_copy_from'];?>
</span>
                <span class="count">阅读(<?php echo $_smarty_tpl->tpl_vars['article']->value['a_count'];?>
)</span>
                <span class="create-time">时间:<?php echo $_smarty_tpl->tpl_vars['article']->value['a_create_time'];?>
</span>
            </p>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div class="page"><?php echo $_smarty_tpl->tpl_vars['show']->value;?>
</div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/js/jquery3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/front/js/nav.js"><?php echo '</script'; ?>
>
</html>
<?php }
}

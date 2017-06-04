<?php
/* Smarty version 3.1.30, created on 2017-06-05 00:14:20
  from "/var/www/html/app/view/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593431dc7ebe09_64962300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39cf4f567835f409f3b4d015ad63414cb9c2e62' => 
    array (
      0 => '/var/www/html/app/view/article.tpl',
      1 => 1496592858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_593431dc7ebe09_64962300 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['web_desc']->value;?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['web_keywords']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['web_title']->value;?>
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
/public/front/css/article.css" />
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
    <div class="article-info">
        <h2><?php echo $_smarty_tpl->tpl_vars['articleInfo']->value['a_title'];?>
</h2>
        <div class="cont">
            <?php echo $_smarty_tpl->tpl_vars['articleInfo']->value['a_cont'];?>

        </div>
        <div class="comment">
            <h2>评论:</h2>
            <div class="item">
                <p><b>薛文聪 说:</b></p>
                <div class="item-cont">
                    这是一些测试文字
                    这是一些测试文字
                    这是一些测试文字
                    这是一些测试文字
                </div>
                <div class="time">
                    发表于2017-09-09 00:00:00
                </div>
            </div>
            <form id="fireupadd">
                <p>
                    <label>昵称 : </label>
                    <input type="text" name="c_nickname" id="c_nickname" class="c_nickname">
                </p>
                <p>
                    <label>内容 : </label>
                    <textarea name="c_cont" id="c_cont" class="c_cont" row="5" col="50"></textarea>
                </p>
            </form>
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

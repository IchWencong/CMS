<?php
/* Smarty version 3.1.30, created on 2017-06-05 20:33:33
  from "/var/www/html/app/view/article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59354f9d85cb17_60492553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39cf4f567835f409f3b4d015ad63414cb9c2e62' => 
    array (
      0 => '/var/www/html/app/view/article.tpl',
      1 => 1496665962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_59354f9d85cb17_60492553 (Smarty_Internal_Template $_smarty_tpl) {
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
/public/front/css/article.css" />
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/wangEditor/dist/css/wangEditor.css">
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
            <div class="item">
                <p><b><?php echo $_smarty_tpl->tpl_vars['comment']->value['c_nickname'];?>
 说:</b></p>
                <div class="item-cont">
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['c_cont'];?>

                </div>
                <div class="time">
                    <?php echo $_smarty_tpl->tpl_vars['comment']->value['c_time'];?>

                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <form id="fireupadd">
                <input type="hidden" name="c_a_id" value="<?php echo $_smarty_tpl->tpl_vars['articleInfo']->value['a_id'];?>
">
                <p>
                    <label>昵称 : </label>
                    <input type="text" name="c_nickname" id="c_nickname" class="c_nickname">
                </p>
                <p>
                    <label style="vertical-align:top;">内容 : </label>
                    <textarea name="c_cont" id="c_cont" class="c_cont" rows="5" cols="50"></textarea><span> (不大于140个字)</span>
                </p>
                <input type="button" id="fireupadd-btn" value="发表评论" />
            </form>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
<?php echo '<script'; ?>
>
    var FIREUP = {
        'addurl'  : '<?php echo makeUrl("Index","addComment");?>
',
        'jumpurl' : window.location.href,
    };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/js/jquery3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/js/layer/layer/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/front/js/nav.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/js/fireup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/js/dialog.js"><?php echo '</script'; ?>
>
</html>
<?php }
}

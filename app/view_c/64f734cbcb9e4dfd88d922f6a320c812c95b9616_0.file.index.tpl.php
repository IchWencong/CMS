<?php
/* Smarty version 3.1.30, created on 2017-06-04 21:50:20
  from "/var/www/html/app/view/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5934101cbdad39_20335068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f734cbcb9e4dfd88d922f6a320c812c95b9616' => 
    array (
      0 => '/var/www/html/app/view/index.tpl',
      1 => 1496584070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_5934101cbdad39_20335068 (Smarty_Internal_Template $_smarty_tpl) {
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
    <fireup style="display:none;">首页</fireup>
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/basic.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/scroll.css" />
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/index.css">
    <link rel="stylesheet" href="<?php echo getRootDir();?>
/public/front/css/sidebar.css">
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
<div class="i_box">

    <div class="i_imglist">
        <ul id="J_imgList">
            <li><a href="http://sc.chinaz.com/"><img src="<?php echo getRootDir();?>
/public/front/images/01.jpg" alt="" title="" /></a></li>
            <li><a href="http://sc.chinaz.com/"><img src="<?php echo getRootDir();?>
/public/front/images/02.jpg" alt="" title="" /></a></li>
            <li><a href="http://sc.chinaz.com/"><img src="<?php echo getRootDir();?>
/public/front/images/03.jpg" alt="" title="" /></a></li>
            <li><a href="http://sc.chinaz.com/"><img src="<?php echo getRootDir();?>
/public/front/images/04.jpg" alt="" title="" /></a></li>
        </ul>
    </div><!--切换大图-->
    
    <div class="i_nav">
        <div class="i_navlist">
            <ul id="J_navList">
                <li><a href="#">我是新闻标题</a></li>
                <li><a href="#">我是新闻标题</a></li>
                <li><a href="#">我是新闻标题</a></li>
                <li><a href="#">我是新闻标题</a></li>
            </ul>
        
        </div>
    </div><!--图片导航-->

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
/public/front/js/scroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir();?>
/public/front/js/nav.js"><?php echo '</script'; ?>
>
</html>
<?php }
}

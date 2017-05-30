<?php
/* Smarty version 3.1.30, created on 2017-05-30 23:29:23
  from "/var/www/html/admin/view/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592d8fd36a94b5_92730266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78fbd923d9552652bfe8cc25e5c086cc694d0d4' => 
    array (
      0 => '/var/www/html/admin/view/nav.tpl',
      1 => 1496158158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592d8fd36a94b5_92730266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<style>
    .sidebar {
            position: fixed;
            top: 51px;
            bottom: 0;
            left: 0;
            z-index: 1000;
            display: block;
            padding: 20px;
            overflow-x: hidden;
            overflow-y: auto;
            background-color: #ddd;
            border-right: 1px solid #eee;
        }

        .nav-sidebar {
            margin-right: -21px;
            margin-bottom: 20px;
            margin-left: -20px;
        }

        .nav-sidebar > li > a {
            padding-right: 20px;
            padding-left: 20px;
        }

        .nav-sidebar > .active > a,
        .nav-sidebar > .active > a:hover,
        .nav-sidebar > .active > a:focus {
            color: #fff;
            background-color: #428bca;
        }
        iframe{
            position:fixed;
        }
</style>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    
    <a class="navbar-brand" >fireupCMS内容管理平台</a>
  </div>
  <ul class="nav navbar-right top-nav">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><?php echo $_COOKIE['username'];?>
<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo makeUrl('User','userMod');?>
" target="show-page"><i class="glyphicon glyphicon-user"></i> 个人中心</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo makeUrl('Index','logout');?>
"><i class="glyphicon glyphicon-off"></i>退出</a></li>
            </ul>
        </li>
    </ul>
  </ul>
</nav>
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar" id="left">
        <li class="active"><a href="<?php echo makeUrl('Index','info');?>
" target="show-page">首页</a></li>
        <li><a href="<?php echo makeUrl('Menu','index');?>
" target="show-page">菜单管理</a></li> 
        <?php if (isAdminLogin()) {?><li><a href="<?php echo makeUrl('User','index');?>
" target="show-page">用户管理</a></li><?php }?>
        <li><a href="<?php echo makeUrl('Article','index');?>
" target="show-page">文章管理</a></li>
        <li><a href="<?php echo makeUrl('Basic','index');?>
" target="show-page">基本管理</a></li>
    </ul>
</div>

<iframe src="<?php echo makeUrl('Index','info');?>
" name="show-page" frameborder="0"></iframe>
</body>
<?php echo '<script'; ?>
 src="<?php echo getRootDir();?>
/public/js/nav.js"><?php echo '</script'; ?>
>
</html>
<?php }
}

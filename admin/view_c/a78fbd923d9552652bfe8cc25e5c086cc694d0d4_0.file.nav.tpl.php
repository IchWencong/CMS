<?php
/* Smarty version 3.1.30, created on 2017-05-24 09:29:12
  from "/var/www/html/admin/view/nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5924e1e85dafb8_82225451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78fbd923d9552652bfe8cc25e5c086cc694d0d4' => 
    array (
      0 => '/var/www/html/admin/view/nav.tpl',
      1 => 1495589349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5924e1e85dafb8_82225451 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<style>
.nav>li>a{
    color:#fff;
}
.nav>li>a:hover{
    color:#fff;
    background-color:#000;
}
.nav .open>a, .nav .open>a:focus, .nav .open>a:hover{
    background-color:#000;
}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    
    <a class="navbar-brand" >cms内容管理平台</a>
  </div>
  <ul class="nav navbar-right top-nav">
    
    
    <li class="dropdown">
      <a href="#" class="dropdown-toggle my" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i><?php echo $_COOKIE['username'];?>
<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="#"><i class="glyphicon glyphicon-user"></i> 个人中心</a>
        </li>
       
        <li class="divider"></li>
        <li>
          <a href="<?php echo makeUrl('Index','logout');?>
"><i class="glyphicon glyphicon-off"></i>退出</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<div class="left-nav">
    <nav class="navbar navbar-inverse navbar-fixed-left">
<li class="active"><a href="##">Home</a></li>
     <li><a href="##">CSS3</a></li>
     <li><a href="##">Sass</a></li>
     <li><a href="##">jQuery</a></li>
     <li class="disabled"><a href="##">Responsive</a></li>
    </nav>
<div>
</body>

</html>
<?php }
}

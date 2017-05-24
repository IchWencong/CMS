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
      <a href="#" class="dropdown-toggle my" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>{$smarty.cookies.username}<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="#"><i class="glyphicon glyphicon-user"></i> 个人中心</a>
        </li>
       
        <li class="divider"></li>
        <li>
          <a href="{makeUrl('Index', 'logout')}"><i class="glyphicon glyphicon-off"></i>退出</a>
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

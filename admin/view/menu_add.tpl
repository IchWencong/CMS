<!doctype html>
<html>
<head>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/menu_add.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('Menu', 'index')}">菜单管理</a>
            </li>
            <li class="active">添加菜单</li>
        </ol>
    </div>
    <form id="fireupadd">
        <div class="form-group">
            <label for="nav_name">菜单名称: <span> (*不大于6个字符)</span></label>
            <input type="text" name="menu_name" class="form-control" id="nav_name" placeholder="请填写菜单名称">
            <label>父菜单: </label>
            <select name="p_id" class="form-control">
                <option value="0">没有父菜单</option>
                {foreach $allMenuInfo as $menu}
                <option value="{$menu['menu_id']}">{$menu['menu_name']}</option>
                {/foreach}
            </select>
            <br />
            <label>状态:</label>
            <div class="form-control">
                <input type="radio" name="status"" value="1" checked> 开启
                <input type="radio" name="status"  value="0"> 关闭
            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupadd-btn">添加</button>
        </div>
    </form>
</body>
<script>
var FIREUP={
   addurl : '{makeUrl("Menu", "addMenu")}',  
   jumpurl : '{makeUrl("Menu", "index")}',  
};
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
</html>

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
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('User', 'index')}">用户管理</a>
            </li>
            <li class="active">修改用户</li>
        </ol>
    </div>
    <form id="fireupmod">
        <div class="form-group">
            <label for="username">用户名: </label>
            <input type="text" name="username" class="form-control" id="username" readonly value="{$userInfo['username']}">
            <label for="realname">真实姓名: <span> (*不大于20个字符,不填则为fireup)</span></label>
            <input type="text" name="realname" class="form-control" id="realname" placeholder="请填写真实姓名" value="{$userInfo['realname']}">
            <label for="password">密码: <span> (*留空则不修改)</span></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="请填写密码">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-default btn-primary" id="fireupmod-btn">修改</button>
        </div>
        <input type="hidden" name="id" value="{$userInfo['id']}">
    </form>
</body>
<script>
var FIREUP={
   modurl : '{makeUrl("User", "modUser")}',  
   jumpurl : '{makeUrl("User", "index")}',  
};
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
</html>

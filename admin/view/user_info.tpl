<!doctype html>
<html>
<head>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/user_info.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('User', 'index')}">用户管理</a>
            </li>
            <li class="active">个人中心</li>
        </ol>
    </div>
    <div class="userinfo">
        <p><span>用户名：</span>{$userInfo['username']}</p>
        <p><span>真实姓名：</span>{$userInfo['realname']}</p>
        <p><span>用户ID：</span>{$userInfo['id']}</p>
        <p><span>角色：</span>{if isAdminLogin()}超级管理员{else}普通管理员{/if}</p>
    </div>
</body>
</html>

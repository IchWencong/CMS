<!doctype html>
<html>
<head>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/menu_index.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('User', 'index')}">用户管理</a>
            </li>
            <li class="active">用户列表</li>
        </ol>
        <a href="{makeUrl('User', 'addUser')}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>添加</a>
    </div>
    <div>
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <th>用户名</th>
                <th>真实姓名</th>
                <th>最后登录时间</th>
                <th>操作</th>
            </thead>
            <tbody>
                <form id="fireup-order">
                {foreach $allUserInfo as $user}
                <tr>
                    <td>{$user['username']}</td>
                    <td>{$user['realname']}</td>
                    <td>{$user['last_login_time']}</td>
                    <td>
                        <a href="javascript:void(0)" class="fireup-mod" attr-id="{$user['id']}"><i class="glyphicon glyphicon-edit"></i></a> 
                        <a href="javascript:void(0)" class="fireup-del" attr-id="{$user['id']}"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
                {/foreach}
                <tr><td colspan="5">{$show}</tr>
                </form>
            </tbody>
        </table>
    </div>
</body>   
<script>
    var FIREUP = {
        modurl        : '{makeUrl("User", "modUser")}',
        delurl        : '{makeUrl("User", "delUser")}',
    }
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>

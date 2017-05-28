<!doctype html>
<html>
<head>
    <title>fireupCMS</title>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/index_info.css">
</head>
<body>
<div class="header">
    <p><i>^_^</i>欢迎<span> {$smarty.cookies.username} </span>，感谢使用{$web_title}内容管理系统!</p>
</div>
<div class="desc"><i class="glyphicon glyphicon-leaf"></i> 网站整体指标:</div>
<div class="cont">
    <div class="item">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-user"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">今日登录人数</p>
                    <p class="fireup-res">{$today_login}</p>
                </div>
             </div>
        </div>
    </div>
    <div class="item right">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-comment"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">文章最大阅读数</p>
                    <p class="fireup-res">{$maxReading}</p>
                </div>
             </div>
        </div>
    </div>
    <div class="item">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-tags"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">文章总数</p>
                    <p class="fireup-res">{$articleCount}</p>
                </div>
             </div>
        </div>
    </div>
    <div class="item right">
        <div class="panel panel-default panel-primary">
             <div class="panel-heading">fireupCMS</div>
             <div class="panel-body">
                <div class="fireup-icon"><i class="glyphicon glyphicon-th"></i></div>
                <div class="fireup-cont">
                    <p class="fireup-msg">前端导航数</p>
                    <p class="fireup-res">{$menuCount}</p>
                </div>
             </div>
        </div>
    </div>
</div>    
</body>
</html>

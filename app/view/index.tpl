<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{$web_desc}">
    <meta name="keywords" content="{$web_keywords}">
    <title>{$web_title}</title>
    <fireup style="display:none;">首页</fireup>
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/basic.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/scroll.css" />
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/index.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/sidebar.css">
</head>
<body>
{include file="header.tpl"}
<div class="main">
<div class="i_box">

    <div class="i_imglist">
        <ul id="J_imgList">
            <li><a href="http://sc.chinaz.com/"><img src="{getRootDir()}/public/front/images/01.jpg" alt="" title="" /></a></li>
            <li><a href="http://sc.chinaz.com/"><img src="{getRootDir()}/public/front/images/02.jpg" alt="" title="" /></a></li>
            <li><a href="http://sc.chinaz.com/"><img src="{getRootDir()}/public/front/images/03.jpg" alt="" title="" /></a></li>
            <li><a href="http://sc.chinaz.com/"><img src="{getRootDir()}/public/front/images/04.jpg" alt="" title="" /></a></li>
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

{include file="sidebar.tpl"}

</div>
</body>
<script type="text/javascript" src="{getRootDir()}/public/js/jquery3.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/front/js/scroll.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/front/js/nav.js"></script>
</html>

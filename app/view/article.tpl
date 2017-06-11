<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{$basic['web_desc']}">
    <meta name="keywords" content="{$basic['web_keywords']}">
    <title>{$basic['web_title']}</title>
    <fireup style="display:none;">{$cat}</fireup>
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/basic.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/index.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/sidebar.css">
    <link rel="stylesheet" href="{getRootDir()}/public/front/css/article.css" />
    <link rel="stylesheet" href="{getRootDir()}/public/wangEditor/dist/css/wangEditor.css">
</head>
<body>
{include file="header.tpl"}
<div class="main">
    <div class="article-info">
        <h2>{$articleInfo['a_title']}</h2>
        <div class="cont">
            {$articleInfo['a_cont']}
        </div>
        <div class="comment">
            <h2>评论:</h2>
            {foreach $comments as $comment}
            <div class="item">
                <p><b>{$comment['c_nickname']} 说:</b></p>
                <div class="item-cont">
                    {$comment['c_cont']}
                </div>
                <div class="time">
                    {$comment['c_time']}
                </div>
            </div>
            {/foreach}
            <form id="fireupadd">
                <input type="hidden" name="c_a_id" value="{$articleInfo['a_id']}">
                <p>
                    <label>昵称 : </label>
                    <input type="text" name="c_nickname" id="c_nickname" class="c_nickname">
                </p>
                <p>
                    <label style="vertical-align:top;">内容 : </label>
                    <textarea name="c_cont" id="c_cont" class="c_cont" rows="5" cols="50"></textarea><span> (不大于140个字)</span>
                </p>
                <input type="button" id="fireupadd-btn" value="发表评论" />
            </form>
        </div>
    </div>
    {include file="sidebar.tpl"}
</div>
</body>
<script>
    var FIREUP = {
        'addurl'  : '{makeUrl("Index", "addComment")}',
        'jumpurl' : window.location.href,
    };
</script>
<script type="text/javascript" src="{getRootDir()}/public/js/jquery3.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/js/layer/layer/layer.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/front/js/nav.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/js/fireup.js"></script>
<script type="text/javascript" src="{getRootDir()}/public/js/dialog.js"></script>
</html>

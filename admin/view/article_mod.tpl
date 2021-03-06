<!doctype html>
<html>
<head>
    {include file="static.tpl"}
    <link rel="stylesheet" href="{getRootDir()}/public/css/article_add.css">
    <link rel="stylesheet" href="{getRootDir()}/public/wangEditor/dist/css/wangEditor.css">
</head>
<body>
    <div>
        <ol class="breadcrumb">
            <li>
                <i class="glyphicon glyphicon-dashboard"></i> <a href="{makeUrl('Article', 'index')}">文章管理</a>
            </li>
            <li class="active">修改文章</li>
        </ol>
    </div>
    <form id="fireupmod" class="form-horizontal">
        <div class="form-group">
            <label for="a_title" class="col-sm-2 control-label">文章标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{$articleInfo['a_title']}" id="a_title" name="a_title" placeholder="请输入文章标题">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">类别 </label>
            <div class="col-sm-10">
                <select name="a_catid" class="form-control">
                    {foreach $allMenuInfo as $menu}
                    <option value="{$menu['menu_id']}" {if $articleInfo['a_catid'] == $menu['menu_id']}checked{/if}>{$menu['menu_name']}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">来源 </label>
            <div class="col-sm-10">
                <select name="a_copy_from" class="form-control">
                    {foreach $smarty.const.COPY_FROM as $val}
                    <option value="{$val}" {if $val==$articleInfo['a_copy_from']}checked{/if}>{$val}</option>
                    {/foreach}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">文章内容</label>
            <div class="col-sm-10">
                <textarea name="a_cont" id="wang" style="height:400px;">{$articleInfo['a_cont']}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">状态</label>
            <div class="col-sm-10">
                <input type="radio" name="a_status" value="1" {if $articleInfo['a_status'] == 1}checked{/if}>开启
                <input type="radio" name="a_status" value="0" {if $articleInfo['a_status'] == 0}checked{/if}>关闭
            </div>
        </div>
        <div class="form-group">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-default btn-primary" id="fireupmod-btn">修改</button>
            </div>
        </div>
        <input type="hidden" name="a_id" value="{$articleInfo['a_id']}">
    </form>
</body>
<script>
var FIREUP={
   modurl  : '{makeUrl("Article", "modArticle")}',
   imgurl : '{makeUrl("Common", "upload")}',  
};
</script>
<script src="{getRootDir()}/public/js/fireup.js"></script>
<script src="{getRootDir()}/public/wangEditor/dist/js/wangEditor.js"></script>
<script src="{getRootDir()}/public/js/wangConfig.js"></script>
</html>

<div class="header">
    <div class="center">
        <p>fireupCMS</p>
            <ul>
                <li><a href="{makeUrl('Index', 'index')}">首页</a></li>
                {foreach $menus as $menu}
                <li><a href="{makeUrl('Index', 'articleList')}/id/{$menu['menu_id']}">{$menu['menu_name']}</a></li>
                {/foreach}
            </ul>
     </div>
</div>

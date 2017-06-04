<div class="sidebar">
    <p>文章排行</p>
    <ul>
        {if $topArticles}
        {foreach $topArticles as $index => $article}
        <li class="num{$index+1}"><a href="{makeUrl('Index', 'article')}/id/{$article['a_id']}">{$article['a_title']}</a></li>
        {/foreach}
        {/if}
    </ul>
</div>

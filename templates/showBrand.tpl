{include file='templates/header.tpl'}
<h1>{$brand->nombre}</h1>
<ul>
    {foreach from=$models item=$model}
        <li><a class="text-white bg-dark"  href="viewModel/{$model->id}">{$model->modelo}</li>
    {/foreach}

</ul>
    
{include file='templates/footer.tpl'}
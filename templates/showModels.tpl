{include file='templates/header.tpl'}

<ul>
    {foreach from=$cars item=$car}
        <li><a class="text-white bg-dark"  href="viewModel/{$car->id}">{$car->modelo}</li>
    {/foreach}

</ul>

{include file='templates/footer.tpl'}

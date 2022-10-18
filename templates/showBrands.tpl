{include file='templates/header.tpl'}
{if isset ($smarty.session.email)}
<form method="post" action="insertBrand">
<label>Marca</label>
<input type="text"  name="marca" id="marca">
<input type="submit" id="submit" value="Agregar Marca" class="btn btn-primary" name="submit">
</form>
{/if}




<table >
     <thead>
        <tr>
            <th class="text-center" >Marca</a></th>
        </tr>
    </thead>  
    <tbody> 
        {foreach from=$brands item=brand}
            <tr>
                <td class="text-center">
                    <a class="text-success" href="viewBrand/{$brand->id_marca}">{$brand->nombre}</a>
                </td>
                    <td class="text-center">
                    {if isset ($smarty.session.email)}
                        <a href="deleteBrand/{$brand->id_marca}" class='btn btn-danger'>delete</a>
                        <a href="editBrand/{$brand->id_marca}" class='btn btn-warning'>edit</a> 
                    {/if}
                    </td>
             <tr>
        {/foreach}
     </tbody>
    </table>

{include file='templates/footer.tpl'}
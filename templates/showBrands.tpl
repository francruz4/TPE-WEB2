{include file='templates/header.tpl'}
<form method="post" action="insertBrand">
<label>Marca</label>
<input type="text"  name="marca" id="marca">
<input type="submit" id="submit" value="Agregar Marca" class="btn btn-primary" name="submit">
</form>




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
                        <a href="deleteBrand/{$brand->id_marca}" >delete</a>
                        <a href="editBrand/{$brand->id_marca}" >edit</a> 
                    </td>
             <tr>
        {/foreach}
     </tbody>
    </table>

{include file='templates/footer.tpl'}
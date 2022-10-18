{include file='templates/header.tpl'}



<form action="updateCar" method="post">  
<input hidden name="id" value="{$car->id}">    
<label class="navbar-brand" >Modelo</label>
<input class="form-control" type="text" value="{$car->modelo}" name="modelo" id="modelo">
<label class="navbar-brand">Marca</a></label>
<select class="form-control" name="marca"  id="marca">
    {foreach from=$brands item=$brand}
        <option value="{$brand->id_marca}">{$brand->nombre}</option>   
    {/foreach}                                                     
</select>
<label class="navbar-brand" >Precio</label>
<input class="form-control" type="number" name="precio" value="{$car->precio}" id="precio">
<label class="navbar-brand" >Descripcion</label>
<input class="form-control" type="text" name="descripcion" value="{$car->descripcion}"id="descripcion">
<br>
<div class="boton-container">
<input type="submit" id="submit" value="Editar" class="btn btn-primary" name="submit">
</div>
<p>{$error}</p>
<br><br>
</form>

{include file='templates/footer.tpl'}
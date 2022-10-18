{include file='templates/header.tpl'}


<h1 class="titulo">{$titulo}</h1>

<form  action="updateBrand" method="post">
    <label>
        <a class="text-dark" >Marca</a>
    </label>
    <input class="form-control" type="text" class="form" name="nombre" value="{$marca->nombre}"id="nombre">
    <input hidden name="id" value="{$marca->id_marca}"id="id">
    <div class="boton-container">
        <input type="submit"  class="btn btn-primary my-2" id="submit" value="Guardar" name="submit">
    </div>		
</form>


{include file='templates/footer.tpl'}


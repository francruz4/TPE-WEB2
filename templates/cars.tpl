{include file='templates/header.tpl'}


    <h1>{$titulo}</h1>
    {if isset ($smarty.session.email)}
    <div class="form-container">
    <form action="addProd" method="post">      
            <label class="navbar-brand" >Modelo</label>
            <input class="form-control" type="text" name="modelo" id="modelo">
            <label class="navbar-brand">Marca</a></label>
            <select class="form-control" name="marca" id="marca">
            {foreach from=$brands item=$brand}
                    <option value="{$brand->id_marca}">{$brand->nombre}</option>   
                {/foreach}                                                     
            </select>
            <label class="navbar-brand" >Precio</label>
            <input class="form-control" type="number" name="precio" id="precio">
            <label class="navbar-brand" >Descripcion</label>
            <input class="form-control" type="text" name="descripcion" id="descripcion">
            <br>
            <div class="boton-container">
            <input type="submit" id="submit" value="Agregar" class="btn btn-primary" name="submit">
        </div>
        <p>{$error}</p>
        <br><br>
    </form>
    </div>
    {/if}
   
    <div class="table">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th ><a class="text-white bg-dark"  href="Models/">Modelo</th>
                    <th >Descripcion</th>
                    <th >Precio</th>
                    <th><a class="text-white bg-dark"  href="Brands/">Marca</th>  
                    {if isset ($smarty.session.email)}
                    <th></th>
                    <th></th>
                    {/if}
                </tr>
            </thead>
            <tbody>
                {foreach from=$cars item=$car}
                    <tr>
                        <td ><a class="text-white bg-dark"  href="viewModel/{$car->id}">{$car->modelo}</td>
                        <td> {$car->descripcion}</td>
                        <td >$ {$car->precio}</td>
                        <td><a class="text-white bg-dark"  href="viewBrand/{$car->id_marca}">{$car->marca}</td> 
                        {if isset ($smarty.session.email)}
                        <td><a href='delete/{$car->id}' type='button' class='btn btn-danger'>Borrar</a></td> 
                        <td><a href='edit/{$car->id}'  type='button' class='btn btn-warning'>Editar</a></td>    
                        {/if}         
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>    

{include file='templates/footer.tpl'}
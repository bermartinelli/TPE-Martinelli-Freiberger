{include file='templates/header.tpl'}
</head>
   
    <h2>EDITAR/ELIMINAR AUTOR:</h2>

   <form id="myForm1" method="POST" action="editAuthor">

        <select class="form-select mt-2 mb-4" name="id_autor" aria-label="Default select example">
        <option selected>Elija el autor a editar/eliminar</option>
        {foreach from=$authorsData item=$autor}
            <option value={$autor->id_autor}>{$autor->nombre}</option>
        {/foreach}
        </select>

        <div class="mb-3 mt-2">
            <label for="exampleFormControlInput1" class="form-label">Nuevo nombre del Autor</label>
            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingrese el nombre modificado" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="exampleFormControlInput1" placeholder="Fecha de nacimiento" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Muerte</label>
            <input type="date" class="form-control" name="fecha_muerte" id="exampleFormControlInput1" placeholder="Fecha de muerte">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" name="nacionalidad" id="exampleFormControlInput1" placeholder="Ingrese la nacionalidad" required>
        </div>

        <div class="col-auto">
            {*  <button type="submit" class="btn btn-primary mb-3 btn-danger">Editar Autor</button>  *}

            <div class="alert alert-info" role="alert">
            Tené en cuenta que al borrar un autor también <strong>eliminarás todos sus libros de la lista</strong>.
            </div>
            
            <input type="submit" class="btn btn-primary mb-3" name="update_button" value="Editar Autor" />
            
            <input type="submit" class="btn btn-primary mb-3 btn-danger" name="delete_button" value="Eliminar Autor" />

            
        </div>

    </form>
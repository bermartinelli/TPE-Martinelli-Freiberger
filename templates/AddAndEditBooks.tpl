{include file='templates/header.tpl'}

   
   <form method="POST" action="addBook">
        <select class="form-select mt-2 mb-2" aria-label="Default select example">
        <option selected>Elija el autor del Libro</option>
        {foreach from=$authorsData item=$author}
            <option value="1">{$author->nombre}</option>
        {/foreach}
        
        </select>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Genero</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Introduzca el genero">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Autor</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

    </form>
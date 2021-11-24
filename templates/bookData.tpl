{include file='templates/header.tpl'}
</head>

{foreach from=$data item=$queryData}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">{$cabeceraCol_1}</th>
                <th scope="col">{$cabeceraCol_2}</th>
                <th scope="col">{$cabeceraCol_3}</th>
                <th scope="col">{$cabeceraCol_4}</th>
                <th scope="col">{$cabeceraCol_5}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$queryData ->nombre}</td>
                <td>{$queryData ->genero}</td>
                <td>{$queryData ->capitulos}</td>
                <td>{$queryData ->editorial}</td>
                <td>{$queryData ->anio}</td>
            </tr>

        </tbody>
    </table>
{/foreach}

{if isset($smarty.session.USER_ID) }
    <form method="POST" id="FormComments" action="">
        <div class="container">
            <label for="exampleFormControlInput1" class="form-label"><strong>Comentarios</strong></label>
            <div class="mb-3 mt-2">

                <label for="exampleFormControlInput1" class="form-label">Agregue un comentario: </label>
                <textarea type="text" class="form-control" name="comentario" id="exampleFormControlInput1"
                    placeholder="Que le parecio el libro?">
                </textarea>
            </div>

            <div>
                <label>Puntaje</label>
                <select name="puntaje" class="form-select" aria-label="Default select example">

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <input type="hidden" name="usuario" value="{$smarty.session.USER_ID}">
            <input type="hidden" name="libro" value="{$queryData ->id_libros}">


            <button type="submit" class="btn btn-primary mb-3 mt-3">Enviar</button>
        </div>
    {/if}

</form>

    {include file="vue/comments.tpl"}
    

<script src="../js/app.js"></script>
{include file='templates/footer.tpl'}
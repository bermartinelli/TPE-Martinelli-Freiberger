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


 <label for="exampleFormControlInput1" class="form-label"><strong>Comentarios</strong></label>
{include file="vue/comments.tpl" id_libro_actual=$queryData ->id_libros}



{include file="templates/formAltaComment.tpl"}

<form id="formDeleteComment">
<label>Seleccione comentario a eliminar</label>
                <select name="commentId" class="form-select" aria-label="Default select example">
                    {foreach from=$dataComment item=$comment}
                    <option value="{$comment ->id}"><strong>{$comment ->email}</strong> - {$comment ->comentario}</option>
                    {/foreach}
                </select>
            </div>

<button  type="submit" id="deleteComment" name="delete_button" class="btn btn-primary btn-danger">Eliminar</button>
</form>

<script src="../js/app.js"></script>
{include file='templates/footer.tpl'}
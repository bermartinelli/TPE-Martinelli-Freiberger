{include file='templates/header.tpl'}
</head>
<table class="table">
    <thead>
        <tr>
          <th scope="col">{$cabeceraCol_1}</th>
          <th scope="col">{$cabeceraCol_2}</th>
          <th scope="col">{$cabeceraCol_3}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$books item=$bookData}
        <tr>
            <td>
                <a class="navbar-brand" href="{BASE_URL}libros/{$bookData ->id_libros}">{$bookData ->nombre}</a>
                {if isset($smarty.session.USER_ID)}
                    <button class="btn btn-danger rounded-pill btn-sm"><a href="deleteBook/{$bookData->id_libros}" class="text-decoration-none text-white">BORRAR</a></button>
                {/if}
            </td>
            <td><a class="navbar-brand" href="{BASE_URL}genero/{$bookData ->genero}">{$bookData ->genero}</a></td>
            <td><a class="navbar-brand" href="{BASE_URL}autor/{$bookData ->id_autor_fk}">{$bookData->autor}</a>
                {if isset($smarty.session.USER_ID)}
                    <button class="btn btn-danger rounded-pill btn-sm"><a href="deleteAuthor/{$bookData->autor}" class="text-decoration-none text-white">BORRAR</a></button>
                {/if}
            </td>
        </tr> 
        {/foreach}
    
    </tbody>
</table>



{include file='templates/footer.tpl'}
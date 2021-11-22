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

<form method="POST" action="comment">
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


        <button type="submit" class="btn btn-primary mb-3 mt-3">Enviar</button>
    </div>


</form>

<div class="card mb-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><strong>Usuario</strong> comentó:</h5>
        <h6 class="card-subtitle mb-2 text-muted">Puntaje: 5</h6>
        <p class="card-text">Aca va el comentario</p>

        {if isset($smarty.session.ADMIN_ID) }
            <form id="myForm1" method="DELETE" action="deleteComment">

                <input type="button" class="btn btn-primary mb-3 btn-danger" value="Eliminar Comentario"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Confirmar </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center"> ¿Confirma que desea elimnar el Comentario? </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" name="delete_button"
                                    class="btn btn-primary btn-danger">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        {/if}
    </div>

</div>




{include file='templates/footer.tpl'}
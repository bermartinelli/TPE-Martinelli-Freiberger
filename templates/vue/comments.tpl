{literal}
    <div id="app">
        <ul v-for="data in commentsData">

        <div class="card-body " v-if="data.id_libro =={/literal}{$id_libro_actual}">
            {literal}


                <div class="card" style="width: 60rem;">
                    <h5 class="card-title">{{ data.email }} comento: </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Puntaje: {{ data.puntuacion }}</h6>
                    <p class="card-text">{{ data.comentario }}</p>

                {/literal}


                {if isset($smarty.session.ADMIN_ID) }
                    <form id="deleteComment" method="POST" action="deleteComment">

                        <input type="button" class="btn btn-primary mb-3 btn-danger" value="Eliminar Comentario"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Confirmar </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            x
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center"> ¿Confirma que desea elimnar el Comentario? </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
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
    </ul>
</div>
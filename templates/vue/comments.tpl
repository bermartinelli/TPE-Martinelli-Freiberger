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


                {if isset($smarty.session.ADMIN_ID)}
                
    
                    <form id="deleteComment" method="POST">

                    

                        <button  type="submit" id="deleteComment" name="delete_button" class="btn btn-primary btn-danger">Eliminar</button>
                    </form>
                   
        
                {/if}
            </div>
        </div>
    </ul>
</div>

<script src="../js/deletefunction.js"></script>


<!--  {literal}
                    <div id="eliminarComentario">
                    <form id="deleteComment" method="POST">

                    

                        <button  v-on:click="deleteComment" name="delete_button" class="btn btn-primary btn-danger">Eliminar</button>
                    </form>
                    </div>
                {/literal} --> 
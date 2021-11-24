"use strict";

const API_URL = "../api/comentarios";
let comentarios = [];

let app = new Vue({
    el: "#app",
    data: {
        commentsData:[],
    }

})

async function getAll(){
    try{
        let response = await fetch(API_URL);
        let data = await response.json();

        app.commentsData = data;
    }
    catch(e){
        console.log(e)
    }
}

getAll(); 

let form = document.querySelector("#FormComments");
form.addEventListener('submit',addComment);

 async function addComment(e) {
    e.preventDefault();
    let data = new FormData(form);
    let comment = {
        comentario: data.get('comentario'),
        puntuacion: data.get('puntaje'),
        usuario: data.get('usuario'),
        id_libro: data.get('libro'),
    }

    try {
        let response = await fetch(API_URL, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(comment),
        });

        if (response.ok) {
            let comment = await response.json();
            app.commentsData.push(comment);
        }

    } catch(e) {
        console.log(e)
    }
}


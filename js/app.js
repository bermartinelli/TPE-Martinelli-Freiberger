"use strict";

const API_URL = "../api/comentarios";

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


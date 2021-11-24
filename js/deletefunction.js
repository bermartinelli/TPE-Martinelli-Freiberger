"use strict"



 let deleteButton = document.getElementById("deleteComment");
deleteButton.addEventListener('submit', mandaHola);

function mandaHola(e) {
    e.preventDefault();
    console.log('hola');
}


async function deleteComment(id) {
    try {
        let response = await fetch(`${API_URL}/${id}`, {
            "method": "DELETE",
        })
        if (response.ok) {
            console.log("Se elimino correctamente");
        }

    } catch (e) {
        console.log(e);
    }
}

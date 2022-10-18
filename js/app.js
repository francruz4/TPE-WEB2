"use strict"
const API_URL = "api/tareas";

document.querySelector(".form-alta").addEventListener("submit", agregarTarea);

let app = new Vue({
    el: "#app",
    data: {
        titulo: "Lista de tareas CSR",
        subtitulo: "Esta lista de tareas se renderiza desde JS usando Vue",

        tareas: [], // this->smarty->assign("tareas",  $tareas)
    },
}); 

async function getTareas() {
    // fetch para traer todas las tareas
    try {
        let response = await fetch(API_URL);
        let tareas = await response.json();

        app.tareas = tareas;
    } catch (e) {
        console.log(e);
    }
}

async function agregarTarea(e) {
    console.log("as");
    e.preventDefault();
    alert("Si te animás hace el POST via fetch ;)");
}

getTareas();
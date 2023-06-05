//3 importar 1.2
import {getCampers, deleteCamper} from '../apiConnection/API.js';


//function IIFE
(function(){
    const lista = document.querySelector('.lista');

    document.addEventListener('DOMContentLoaded', showCampers)
    lista.addEventListener('click', confirmDelete)


    async function showCampers(){
        console.log('DESDE LA IIFE');
        const campers = await getCampers()
        console.log(campers);
        const contenedor = document.querySelector('tbody')
        campers.forEach(camper => {
            const {imagen,nombre,promedio,especialidad,expertoTecnologia,id} = camper
            const rows = document.createElement('tr')
            rows.innerHTML= `
            
            <th scope="row">${id}</th>
            <td><img src="img/${imagen}" class="cuenta"/></td>
            <td>${nombre}</td>
            <td>${promedio}</td>
            <td>${especialidad}</td>
            <td>${expertoTecnologia}</td>
            <td><button type="button" class="btn btn-warning" >Details</button></td>
            <td><button type="button" data-camper="${id}" class="btn btn-danger delete" >Delete</button></td>

            
            `;
            contenedor.appendChild(rows)
        });
    }
    function confirmDelete(e){
        if(e.target.classList.contains('delete')){
            const camperId = parseInt(e.target.dataset.camper);
            const confirmar = confirm('¿Deseas eliminar el camper?');
            if(confirmar){
               deleteCamper(camperId); 
            }
            
        }
    }
})();


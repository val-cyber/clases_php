const url = "http://localhost/ArTeM02-038/clases_php/apiRest/backend/controllers/campers.php?op=GetAll";

//metodo get     obtener todos los campers de la api (get)

export const getCampers = async ()=>{
    try {
        const result = await fetch(url);
        const campers = await result.json();
        return campers

        
    } catch (error) {
        console.log(error);
    }
}

// metodo post insertar  unn nuevo camper a la rest api

export const newCamper = async (camper) =>{
    console.log(camper);
    try {
        await fetch(url, {
            method: 'POST',
            body: JSON.stringify(camper),
            headers: {
                'Content-Type': 'application/json'
            }
        });
        window.location.href = 'index.html'
    }catch(error){
        console.log(error);
    }
}


//metodo DELETE eliminar campers metodo http delete

export const deleteCamper = async id =>{
    try {
        await fetch(`${url}/${id}`,{
            method: 'DELETE'
        })
    } catch (error) {
        console.log(error);
    }
}
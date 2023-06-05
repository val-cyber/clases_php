const ulrEstudiantes = "http://localhost/ArTeM02-038/clases_php/Profesor/backend/controles/campers.php?op=GetAll"



export const getEstudaintes = async () =>{
    try{     
        const result = await fetch (ulrEstudiantes);
        const datosUsuarios = await result.json();
        return datosUsuarios;
        
    }
    catch(error){
        console.log(error);
    }
}
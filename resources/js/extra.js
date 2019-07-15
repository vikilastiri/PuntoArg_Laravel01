window.onload=function(){

// Alerta Con Info Atracciones

document.queryElementById('.consulta').addEventListener("click", function(){
event.preventDefault();
swal("Here's the title!", "...and here's the text!"); });


// API PROVINCIAS

fetch('https://apis.datos.gob.ar/georef/api/provincias')
.then(function(response){
  return response.json();
})
.then(function(data){

  provincias=data.provincias;

  nombres=[];

   form = document.querySelector('.form-control')

  for (var i = 0; i < provincias.length; i++) {
    form.innerHTML += "<option value=" + data.provincias[i].id+ ">" + data.provincias[i].nombre + "</option>"

    console.log("<option value=" + data.provincias[i].id+ ">" + data.provincias[i].nombre + "</option>")
  }

})
.catch(function(error){
  console.log(error);
})



}

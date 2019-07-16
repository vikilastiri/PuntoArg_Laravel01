window.onload=function(){


// API PROVINCIAS

  fetch('https://apis.datos.gob.ar/georef/api/provincias')
  .then(function(response){
    return response.json();
  })
  .then(function(data){
    console.log(data)
    provincias=_.sortBy(data.provincias, 'nombre')

    nombres=[];

     form = document.querySelector('#location_id');

    for (var i = 0; i < provincias.length; i++) {
      form.innerHTML += "<option value=" + provincias[i].id+ ">" + provincias[i].nombre + "</option>"

      // console.log("<option value=" + data.provincias[i].id+ ">" + data.provincias[i].nombre + "</option>")
    }

  })
  .catch(function(error){
    console.log(error);
  })

}

// Alerta Con Info Atracciones

  var botones = document.querySelectorAll(".consulta a");
  if(botones){
    botones.forEach(function(e){
      //  console.log(e.dataset.name);
      e.addEventListener("click", function(){
        event.preventDefault();
        swal(e.dataset.name, e.dataset.description);
      })
    })
  }


//}

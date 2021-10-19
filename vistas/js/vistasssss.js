document.addEventListener('DOMContentLoaded', cargarInfo);

function cargarInfo() {
  cargarModelos()
}


var arraymodelos = []
function cargarModelos() {
  //solicita al web service todos los productos
  //var arrayCate=[]
  const endPoint = "http://34.122.90.249/Controls/Control.php";

  fetch(endPoint, {
    method: "GET",
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    }
  })
    .then(function (res) {
      return res.json()
    })
    .then(function (res) {
      console.log(res)
      arraymodelos = convertirJSONarray(res);
      mostrarMOD(arraymodelos)
      //console.log("arry SO", arraySisOp)

    })
    .catch(console.error);

}


function convertirJSONarray(datos) {
  var array = []
  datos.forEach(function (item) {
    array.push(item)
  })
  return array;
}


function mostrarMOD(arraymodelos) {
  let selecid = document.getElementById('selecid')

  arraymodelos.forEach(function (M) {
    var option = document.createElement("option"); //Creamos la opcion
    option.innerHTML = M.id; //Metemos el texto en la opción
    selecid.appendChild(option); //Metemos la opción en el select
  })
}
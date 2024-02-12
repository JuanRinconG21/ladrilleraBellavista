const URLROOT = "https://ladrillerabv.000webhostapp.com/";

let nave = document.getElementById("nave");
let quema = document.getElementById("quema");
let paquete = document.getElementById("paquete");
let linea = document.getElementById("linea");
let fechaCargue = document.getElementById("fechaCargue");
let frmCargueDescargue = document.getElementById("frmCargueDescargue");

//Carga Inicial de las interacciones        ******************************
function init() {
  frmCargueDescargue.addEventListener("submit", function (e) {
    guardar(e);
  });
  frmCargueDescargueEdit.addEventListener("submit", function(e) {
    guardarEdicion(e);
  });
  frmCargueDescargueDel.addEventListener("submit", function(e) {
    guardarDelet(e);
  });
}
//Fin carga Inicial de las interacciones        ******************************

//=========================================================================================================
// INICIO FUNCIONES AGREGAR ***************************************************************************************************************************************************************************************************
//modal busqueda de operarios
let tblOperarios = $("#tblOperarios").DataTable({
  autoWidth: false,
  ajax: {
      url: "https://ladrillerabv.000webhostapp.com/Operarios/todos",
      dataSrc: "",
  },
  columns: [
      {
          data: null,
          defaultContent:
              "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarResp'>+</button>",
      },
      { data: "nombres" },
      { data: "apellidos" },
  ],
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios tbody").on("click", "#agregarResp", function () {
  var data = tblOperarios.row($(this).parents("tr")).data(); //captura la fila
  agregarResp1(
      data.nombres,
      data.apellidos
  );
});

//agrega el item al detalle 
function agregarResp1(nombres, apellidos) {
  let nomOperario = document.getElementById("responsableCargue");
  nomOperario.value = `${nombres} ${apellidos}`;

}

//modal busqueda de referencias
let tblReferencias = $("#tblReferencias").DataTable({
  autoWidth: false,
  ajax: {
    url: "https://ladrillerabv.000webhostapp.com/Referencias/todos",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRef'>+</button>",
    },
    { data: "id" },
    { data: "nombre" },
    { data: "medidas" },
    { data: "rendimiento" },
    { data: "peso" },
    { data: "referencia" },
  ],
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblReferencias tbody").on("click", "#agregarRef", function () {
  var data = tblReferencias.row($(this).parents("tr")).data(); //captura la fila
  agregarDetalle( 
      data.id,   
      data.nombre,
      data.medidas,
      data.rendimiento,
      data.peso,
      data.referencia
      );
});
//});

//agrega el item al detalle
function agregarDetalle(id,nombre,medidas,rendimiento,peso,referencia) {
  detalle = document.getElementById("detalle");
  let cantidad = 0;
  fila = `  
  <tr id='filas' > 
  <td><input type="number" name="id[]" id="id[]" value = '${id}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="nombre[]"  id="nombre[]" value = '${nombre}' class="form-control form-control-sm"></td>
  <td><input type="text" name="medidas[]"  id="medidas[]" value = '${medidas}' class="form-control form-control-sm"></td>
  <td><input type="text" name="rendimiento[]" id="rendimiento[]" value = '${rendimiento}' class="form-control form-control-sm"></td>
  <td><input type="text" name="peso[]"  id="peso[]" value = '${peso}' class="form-control form-control-sm"></td>
  <td><input type="text" name="referencia[]" id="referencia[]" value = '${referencia}' class="form-control form-control-sm"></td>
  <td><input type="number" name="cantidad[]" id="cantidad[]" value = '${cantidad}' class="form-control form-control-sm"></td>
  <td><button id="borrar" type="button"style='background-color: red; color:white;' class="btn" data-bs-toggle="modal" data-bs-target="#eliminarItem">Eliminar</button></td>
  </tr>
  `;
  detalle.innerHTML += fila;
}
//selecciona el  item para quitar una fila del detalle del cargue
$(document).on('click', '#borrar', function(event) {
  event.preventDefault();
  $(this).closest('tr').remove();
}); 


//Guardar el documento
 function guardar(e) {
  e.preventDefault();
  let datos = new FormData(frmCargueDescargue);

  fetch("https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/Add", {
    method: "POST",
    body: datos,
  })
  .then((response) => response.json())
  .then((data) => {
    Swal.fire({
      title: data,
      icon: "success",
      confirmButtonText: "Ok",
    });
  })
  .catch((error) => {
    console.log("hay un error :", error);
  });
} 



// FIN FUNCIONES AGREGAR ***************************************************************************************************************************************************************************************************







//                                                                       ++++++++++++++++++++++++++++++++++++                                                                       //







// INICIO FUNCIONES EDITAR ***************************************************************************************************************************************************************************************************

// Llenamos la tabla de referencias de la modal para saleccionar ----------------------------------------------------------------------------- 
let tblReferenciasUpdate = $("#tblReferenciasUpdate").DataTable({
  autoWidth: false,
  ajax: {
    url: "https://ladrillerabv.000webhostapp.com/Referencias/todos",
    dataSrc: "",
  },
  columns: [
    {
      data: null,
      defaultContent:
        "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRefUpdate'>+</button>",
    },
    { data: "id" },
    { data: "nombre" },
    { data: "medidas" },
    { data: "rendimiento" },
    { data: "peso" },
    { data: "referencia" },
  ],
});

// -----------------------------------------------------------------------------------------------------------

//selecciona el item para agregarlo al formulario
$("#tblOperariosUpdate tbody").on("click", "#agregarRespUpdate", function () {
  var data = tblOperariosUpdate.row($(this).parents("tr")).data(); //captura la fila
  agregarRespUp(
      data.nombres,
      data.apellidos,
  );
});

//agrega el item al formulario
function agregarRespUp(nombres, apellidos) {
  let responsableCargueEdit = document.getElementById("responsableCargueEdit");
  responsableCargueEdit.value = `${nombres} ${apellidos}`;

}

// Llenamos la tabla de referencias de la modal para saleccionar ----------------------------------------------------------------------------- 
let tblOperariosUpdate = $("#tblOperariosUpdate").DataTable({
  autoWidth: false,
  ajax: {
      url: "https://ladrillerabv.000webhostapp.com/Operarios/todos",
      dataSrc: "",
  },
  columns: [
      {
          data: null,
          defaultContent:
              "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRespUpdate'>+</button>",
      },
      { data: "nombres" },
      { data: "apellidos" },
  ],
});

// -----------------------------------------------------------------------------------------------------------


// Llenamos la tabla de cargues para visualizar, editar o eliminar su contenido -----------------------------------------------------------------------
let tblCargues = $("#tblCargues").DataTable({
  ajax: {
    url: "https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/getAll",
    dataSrc: "",
  },
  columns: [
    { data: "responsableCargue" },
    { data: "fechaCargue" },
    { data: "nave" },
    { data: "quema" },
    { data: "paquete" },
    { data: "linea" },
    { data: "id" },
    { data: "nombre" },
    { data: "medidas" },
    { data: "rendimiento" },
    { data: "peso" },
    { data: "referencia" },
    { data: "cantidad" },
    { data: "idCargueHeader" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editar' data-bs-toggle='modal' data-bs-target='#modalEditarCargue' class='btn' style='background-color: #4EB700; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='eliminar' data-bs-toggle='modal' data-bs-target='#modalEliminarCargue' class='btn' style='background-color: #FF0000; color:white;'>Eliminar</a>",
    },
  ],
});
//----------------------------------------------------------------------------------------------------------------------------------

// Opción de editar ----------------------------------------------------------------------------------------------------------------------------------------
// #1  TOMAMOS LOS DATOS DE LA TABLA PARA LLENAR EL DETALLE DE LA MODAL PARA EDITAR _________________________________________________
$("#tblCargues tbody").on("click", "#editar", function () {
  var data = tblCargues.row($(this).parents("tr")).data(); //captura la fila
  agregarDetalleUpdate1(
    data.id,
    data.nombre,
    data.medidas,
    data.rendimiento,
    data.peso,
    data.referencia,
    data.cantidad
  );
});

//agrega el item al detalle de la modal
function agregarDetalleUpdate1(id, nombre, medidas, rendimiento, peso, referencia, cantidad) {
  detalleUpdate = document.getElementById("detalleUpdate");
/*   fila = `  
  <tr id='filas' > 
  <td><input type="number" name="idEdit[]" id="idEdit[]" value = '${id}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="nombreEdit[]"  id="nombreEdit[]" value = '${nombre}' class="form-control form-control-sm"></td>
  <td><input type="text" name="medidasEdit[]"  id="medidasEdit[]" value = '${medidas}' class="form-control form-control-sm"></td>
  <td><input type="text" name="rendimientoEdit[]" id="rendimientoEdit[]" value = '${rendimiento}' class="form-control form-control-sm"></td>
  <td><input type="text" name="pesoEdit[]"  id="pesoEdit[]" value = '${peso}' class="form-control form-control-sm"></td>
  <td><input type="text" name="referenciaEdit[]" id="referenciaEdit[]" value = '${referencia}' class="form-control form-control-sm"></td>
  <td><input type="number" name="cantidadEdit[]" id="cantidadEdit[]" value = '${cantidad}' class="form-control form-control-sm"></td>
  <td><button id="borrarUpdate" type="button"style='background-color: red; color:white;' class="btn" data-bs-toggle="modal" data-bs-target="#eliminarItem">Eliminar</button></td>
  </tr>
  `; */
  fila = `  
  <tr id='filas' > 
  <td><input type="number" name="idEdit" id="idEdit" value = '${id}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="nombreEdit"  id="nombreEdit" value = '${nombre}' class="form-control form-control-sm"></td>
  <td><input type="text" name="medidasEdit"  id="medidasEdit" value = '${medidas}' class="form-control form-control-sm"></td>
  <td><input type="text" name="rendimientoEdit" id="rendimientoEdit" value = '${rendimiento}' class="form-control form-control-sm"></td>
  <td><input type="text" name="pesoEdit"  id="pesoEdit" value = '${peso}' class="form-control form-control-sm"></td>
  <td><input type="text" name="referenciaEdit" id="referenciaEdit" value = '${referencia}' class="form-control form-control-sm"></td>
  <td><input type="number" name="cantidadEdit" id="cantidadEdit" value = '${cantidad}' class="form-control form-control-sm"></td>
  <td><button id="borrarUpdate" type="button"style='background-color: red; color:white;' class="btn" data-bs-toggle="modal" data-bs-target="#eliminarItem">Eliminar</button></td>
  </tr>
  `;
  detalleUpdate.innerHTML += fila;
}

//selecciona el  item para quitar una fila del detalle del cargue
$(document).on('click', '#borrarUpdate', function(event) {
  event.preventDefault();
  $(this).closest('tr').remove();
}); 

// #2  TOMAMOS LOS DATOS DE LA TABLA PARA LLENAR EL FORMULARIO DE LA MODAL PARA EDITAR _________________________________________________
$("#tblCargues tbody").on("click", "#editar", function () {
  var data = tblCargues.row($(this).parents("tr")).data(); //captura la fila
  editarCargue(
    data.responsableCargue,
    data.fechaCargue,
    data.nave,
    data.quema,
    data.paquete,
    data.linea,
    data.idCargueHeader
  );
});

// Llenamos el formulario con los datos
function editarCargue(responsableCargue, fechaCargue, nave, quema, paquete, linea, idCargueHeader) {
  let respEdit = document.getElementById("responsableCargueEdit");
  let naveEdit = document.getElementById("naveEdit");
  let quemaEdit = document.getElementById("quemaEdit");
  let paqueteEdit = document.getElementById("paqueteEdit");
  let lineaEdit = document.getElementById("lineaEdit");
  let fechaCargueEdit = document.getElementById("fechaCargueEdit");
  let numCargue = document.getElementById("numCargue");

  respEdit.value = responsableCargue;
  naveEdit.value = nave;
  quemaEdit.value = quema;
  paqueteEdit.value = paquete;
  lineaEdit.value = linea;
  fechaCargueEdit.value = fechaCargue;
  numCargue.value = idCargueHeader;
}








// FIN FUNCIONES EDITAR ***************************************************************************************************************************************************************************************************







//                                                                       ++++++++++++++++++++++++++++++++++++                                                                       //







// INICIO FUNCIONES ELIMINAR ***************************************************************************************************************************************************************************************************
init();





$("#tblCargues tbody").on("click", "#eliminar", function () {
  var data = tblCargues.row($(this).parents("tr")).data(); //captura la fila
  eliminarCargue(
    data.responsableCargue,
    data.fechaCargue,
    data.nave,
    data.quema,
    data.paquete,
    data.linea,
    data.idCargueHeader,

    data.nombre,
    data.medidas,
    data.rendimiento,
    data.peso,
    data.referencia,
    data.cantidad
  );
});

function eliminarCargue(responsableCargue, fechaCargue, nave, quema, paquete, linea, idCargueHeader, nombre, medidas, rendimiento, peso, referencia, cantidad) {
  let responsableCargueDel = document.getElementById("responsableCargueDel");
  let naveDel = document.getElementById("naveDel");
  let quemaDel = document.getElementById("quemaDel");
  let paqueteDel = document.getElementById("paqueteDel");
  let lineaDel = document.getElementById("lineaDel");
  let fechaCargueDel = document.getElementById("fechaCargueDel");
  let numCargueDel = document.getElementById("numCargueDel");

  let nombreDel = document.getElementById("nombreDel");
  let referenciaDel = document.getElementById("referenciaDel");
  let pesoDel = document.getElementById("pesoDel");
  let rendimientoDel = document.getElementById("rendimientoDel");
  let dimensionesDel = document.getElementById("dimensionesDel");
  let cantidadDel = document.getElementById("cantidadDel");

  responsableCargueDel.value = responsableCargue;
  naveDel.value = nave;
  quemaDel.value = quema;
  paqueteDel.value = paquete;
  lineaDel.value = linea;
  fechaCargueDel.value = fechaCargue;
  numCargueDel.value = idCargueHeader;

  nombreDel.value = nombre;
  referenciaDel.value = referencia;
  pesoDel.value = peso;
  rendimientoDel.value = rendimiento;
  dimensionesDel.value = medidas;
  cantidadDel.value = cantidad;
}

// INICIO DEL DETALLE UPDATE ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//selecciona el  item para agregarlo al detalle del cargue
/* $("#tblReferenciasUpdate tbody").on("click", "#agregarRefUpdate", function () {
  var data = tblReferenciasUpdate.row($(this).parents("tr")).data(); //captura la fila
  agregarDetalleUpdate(
    data.id,
    data.nombre,
    data.medidas,
    data.rendimiento,
    data.peso,
    data.referencia
  );
}); */

//agrega el item al detalle de la formula    id='filas' 
/* function agregarDetalleUpdate(id, nombre, medidas, rendimiento, peso, referencia) {
  detalleUpdate = document.getElementById("detalleUpdate");
  let cantidad = 0;
  fila = `  
  <tr id='filas' > 
  <td><input type="number" name="id[]" id="id[]" value = '${id}' class="form-control form-control-sm" readonly></td>
  <td><input type="text" name="nombre[]"  id="nombre[]" value = '${nombre}' class="form-control form-control-sm"></td>
  <td><input type="text" name="medidas[]"  id="medidas[]" value = '${medidas}' class="form-control form-control-sm"></td>
  <td><input type="text" name="rendimiento[]" id="rendimiento[]" value = '${rendimiento}' class="form-control form-control-sm"></td>
  <td><input type="text" name="peso[]"  id="peso[]" value = '${peso}' class="form-control form-control-sm"></td>
  <td><input type="text" name="referencia[]" id="referencia[]" value = '${referencia}' class="form-control form-control-sm"></td>
  <td><input type="number" name="cantidad[]" id="cantidad[]" value = '${cantidad}' class="form-control form-control-sm"></td>
  <td><button id="borrarUpdate" type="button"style='background-color: red; color:white;' class="btn" data-bs-toggle="modal" data-bs-target="#eliminarItem">Eliminar</button></td>
  </tr>
  `;
  detalleUpdate.innerHTML += fila;
} */
// FIN DE DETALLE UPDATE ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  
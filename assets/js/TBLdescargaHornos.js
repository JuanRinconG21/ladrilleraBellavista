// INICIO FUNCIONES PARA AGREGAR DESCARGUES ******************************************************************************************************************************************************************************************************
const URLROOT = "https://ladrillerabv.000webhostapp.com/";
//Carga Inicial de las interacciones
function init() {
    frmDescargueHorno.addEventListener("submit", function (e) {
        guardar(e);
    });
    frmDescargueHornoEdit.addEventListener("submit", function (e) {
        guardarDescargueEdit(e);
    });
    frmDescargueHornoDelete.addEventListener("submit", function (e) {
        eliminarDescargueForm(e);
    });
}

//=========================================================================================================

// CARGA INICIAL DE LA TABLA DE DESCARGUES *********************************************************************************************************************************************************************
let tblDescargues = $("#tblDescargues").DataTable({
  ajax: {
    url: "https://ladrillerabv.000webhostapp.com/DescargueHornos/getAll",
    dataSrc: "",
  },
  columns: [
    { data: "id" },
    { data: "responsableHornos" },
    { data: "responsablePatios" },
    { data: "referencia" },
    { data: "descargueEstimado" },
    { data: "diferencia" },
    { data: "cantPrimera" },
    { data: "cantSegunda" },
    { data: "roturaHorno" },
    { data: "porcentaje" },
    { data: "crudos" },
    { data: "totalDescargue" },
    { data: "totalRoturaDia" },
    { data: "PorcentajeRoturaDia" },
    { data: "fecha" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editar' data-bs-toggle='modal' data-bs-target='#modalEditarDescargue' class='btn' style='background-color: #4EB700; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='eliminar' data-bs-toggle='modal' data-bs-target='#modalEliminarDescargue' class='btn' style='background-color: #FF0000; color:white;'>Eliminar</a>",
    },
  ],
});

// FINAL CARGA DE TABLA ******************************************************************************************************************************************************************************************************************************


//modal búsqueda de referencias
let tblOperarios = $("#tblOperarios").DataTable({
    autoWidth: false,
    ajax: {
        url: "https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/operarios",
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

//modal busqueda de referencias
let tblOperarios2 = $("#tblOperarios2").DataTable({
    autoWidth: false,
    ajax: {
        url: "https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/operarios",
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
    agregarRef(
        data.referencia,
        data.id
    );
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblReferencias tbody").on("click", "#agregarRef", function () {
    var data = tblReferencias.row($(this).parents("tr")).data(); //captura la fila
    agregarID(
        data.id
    );
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios tbody").on("click", "#agregarResp", function () {
    var data = tblOperarios.row($(this).parents("tr")).data(); //captura la fila
    agregarResp1(
        data.nombres,
        data.apellidos
    );
});


//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperarios2 tbody").on("click", "#agregarResp", function () {
    var data = tblOperarios2.row($(this).parents("tr")).data(); //captura la fila
    agregarResp2(
        data.nombres,
        data.apellidos
    );
});

//agrega el item al detalle de la formula    id='filas' 
function agregarResp1(nombres, apellidos) {
    responsableHornos = document.getElementById("responsableHornos");
    responsableHornos.value = `${nombres}${apellidos}`;

}
//agrega el item al detalle de la formula    id='filas' 
function agregarResp2(nombres, apellidos) {
    responsablePatios = document.getElementById("responsablePatios");
    responsablePatios.value = `${nombres}${apellidos}`;

}

//agrega el item al detalle de la formula    id='filas' 
function agregarRef(referencia) {
    referencial = document.getElementById("referencial");
    referencial.value = `${referencia}`;
}
//agrega el item al detalle de la formula    id='filas' 
function agregarID(id) {
    idr = document.getElementById("idr[]");
    idr.value = `${id}`;
}

//selecciona el  item para quitar una fila del detalle del cargue
$(document).on('click', '#borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});



//Guardar el documento
function guardar(e) {
    e.preventDefault();
    let datos = new FormData(frmDescargueHorno);

    fetch("https://ladrillerabv.000webhostapp.com/DescargueHornos/Add", {
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


// FIN FUNCIONES AGREGAR ***********************************************************************************************************************************

//                                                                         ------------------------------------------------------------------------------------------                                                        //

// INICIO FUNCIONES EDITAR ******************************************************************************************************************************************

// TOMAMOS LOS DATOS DE LA TABLA PARA LLENAR EL FORMULARIO DE LA MODAL PARA EDITAR _________________________________________________
$("#tblDescargues tbody").on("click", "#editar", function () {
    var data = tblDescargues.row($(this).parents("tr")).data(); //captura la fila
    editarDescargue(
      data.id,
      data.responsableHornos,
      data.responsablePatios,
      data.referencia,
      data.descargueEstimado,
      data.diferencia,
      data.cantPrimera,
      data.cantSegunda,
      data.roturaHorno,
      data.porcentaje,
      data.crudos,
      data.totalDescargue,
      data.totalRoturaDia,
      data.PorcentajeRoturaDia
    );
  });
  
  // Llenamos el formulario con los datos
  function editarDescargue(id, responsableHornos, responsablePatios, referencia, descargueEstimado, diferencia, cantPrimera, cantSegunda,
    roturaHorno, porcentaje, crudos, totalDescargue, totalRoturaDia, PorcentajeRoturaDia) {
    
    let numDescargueEdit = document.getElementById("numDescargueEdit");
    let responsableHornosEdit = document.getElementById("responsableHornosEdit");
    let responsablePatiosEdit = document.getElementById("responsablePatiosEdit");
    let referencialEdit = document.getElementById("referencialEdit");
    let descargueEstimadoEdit = document.getElementById("descargueEstimadoEdit");
    let diferenciaEdit = document.getElementById("diferenciaEdit");
    let cantPrimeraEdit = document.getElementById("cantPrimeraEdit");
    let cantSegundaEdit = document.getElementById("cantSegundaEdit");
    let roturaHornoEdit = document.getElementById("roturaHornoEdit");
    let porcentajeEdit = document.getElementById("porcentajeEdit");
    let crudosEdit = document.getElementById("crudosEdit");
    let totalDescargueEdit = document.getElementById("totalDescargueEdit");
    let totalRoturaDiaEdit = document.getElementById("totalRoturaDiaEdit");
    let PorcentajeRoturaDiaEdit = document.getElementById("PorcentajeRoturaDiaEdit");
  
    numDescargueEdit.value = id;
    responsableHornosEdit.value = responsableHornos;
    responsablePatiosEdit.value = responsablePatios;
    referencialEdit.value = referencia;
    descargueEstimadoEdit.value = descargueEstimado;
    diferenciaEdit.value = diferencia;
    cantPrimeraEdit.value = cantPrimera;
    cantSegundaEdit.value = cantSegunda;
    roturaHornoEdit.value = roturaHorno;
    porcentajeEdit.value = porcentaje;
    crudosEdit.value = crudos;
    totalDescargueEdit.value = totalDescargue;
    totalRoturaDiaEdit.value = totalRoturaDia;
    PorcentajeRoturaDiaEdit.value = PorcentajeRoturaDia;
  }


// INICIO FUNCIONES PARA ELIMINAR ******************************************************************************************************************************************************************************************
// TOMAMOS LOS DATOS DE LA TABLA PARA LLENAR EL FORMULARIO DE LA MODAL PARA ELIMINAR _________________________________________________
$("#tblDescargues tbody").on("click", "#eliminar", function () {
    var data = tblDescargues.row($(this).parents("tr")).data(); //captura la fila
    eliminarDescargue(
      data.id,
      data.responsableHornos,
      data.responsablePatios,
      data.referencia,
      data.descargueEstimado,
      data.diferencia,
      data.cantPrimera,
      data.cantSegunda,
      data.roturaHorno,
      data.porcentaje,
      data.crudos,
      data.totalDescargue,
      data.totalRoturaDia,
      data.PorcentajeRoturaDia
    );
  });
  
  // Llenamos el formulario con los datos
  function eliminarDescargue(id, responsableHornos, responsablePatios, referencia, descargueEstimado, diferencia, cantPrimera, cantSegunda,
    roturaHorno, porcentaje, crudos, totalDescargue, totalRoturaDia, PorcentajeRoturaDia){
    
    let numDescargueDel = document.getElementById("numDescargueDel");
    let responsableHornosDel = document.getElementById("responsableHornosDel");
    let responsablePatiosDel = document.getElementById("responsablePatiosDel");
    let referencialDel = document.getElementById("referencialDel");
    let descargueEstimadoDel = document.getElementById("descargueEstimadoDel");
    let diferenciaDel = document.getElementById("diferenciaDel");
    let cantPrimeraDel = document.getElementById("cantPrimeraDel");
    let cantSegundaDel = document.getElementById("cantSegundaDel");
    let roturaHornoDel = document.getElementById("roturaHornoDel");
    let porcentajeDel = document.getElementById("porcentajeDel");
    let crudosDel = document.getElementById("crudosDel");
    let totalDescargueDel = document.getElementById("totalDescargueDel");
    let totalRoturaDiaDel = document.getElementById("totalRoturaDiaDel");
    let PorcentajeRoturaDiaDel = document.getElementById("PorcentajeRoturaDiaDel");
  
    numDescargueDel.value = id;
    responsableHornosDel.value = responsableHornos;
    responsablePatiosDel.value = responsablePatios;
    referencialDel.value = referencia;
    descargueEstimadoDel.value = descargueEstimado;
    diferenciaDel.value = diferencia;
    cantPrimeraDel.value = cantPrimera;
    cantSegundaDel.value = cantSegunda;
    roturaHornoDel.value = roturaHorno;
    porcentajeDel.value = porcentaje;
    crudosDel.value = crudos;
    totalDescargueDel.value = totalDescargue;
    totalRoturaDiaDel.value = totalRoturaDia;
    PorcentajeRoturaDiaDel.value = PorcentajeRoturaDia;
  }


//Elimina el registro
function eliminarDescargueForm(e) {
    e.preventDefault();
    let datos = new FormData(frmDescargueHornoDelete);

    fetch("https://ladrillerabv.000webhostapp.com/DescargueHornos/Delete", {
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


//modal busqueda de referencias
let tblReferenciasHornoUpdate = $("#tblReferenciasHornoUpdate").DataTable({
    autoWidth: false,
    ajax: {
        url: "https://ladrillerabv.000webhostapp.com/Referencias/todos",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRefUp'>+</button>",
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
$("#tblReferenciasHornoUpdate tbody").on("click", "#agregarRefUp", function () {
    var data = tblReferenciasHornoUpdate.row($(this).parents("tr")).data(); //captura la fila
    agregarRefUp(
        data.referencia,
        data.id
    );
});
function agregarRefUp(referencia) {
    let referencialEdit = document.getElementById("referencialEdit");
    referencialEdit.value = referencia;
}

//modal busqueda de operarios
let tblOperariosHornoUp1 = $("#tblOperariosHornoUp1").DataTable({
    autoWidth: false,
    ajax: {
        url: "https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/operarios",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRespPUp'>+</button>",
        },
        { data: "nombres" },
        { data: "apellidos" },
    ],
});

$("#tblOperariosHornoUp1 tbody").on("click", "#agregarRespPUp", function () {
    var data = tblOperariosHornoUp1.row($(this).parents("tr")).data(); //captura la fila
    agregarRespPUp(
        data.nombres,
        data.apellidos
    );
});

function agregarRespPUp(nombres, apellidos) {
    let responsablePatiosUp = document.getElementById("responsablePatiosEdit");
    responsablePatiosUp.value = `${nombres}  ${apellidos}`;
} 

//modal busqueda de operarios
let tblOperariosHornoUp2 = $("#tblOperariosHornoUp2").DataTable({
    autoWidth: false,
    ajax: {
        url: "https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/operarios",
        dataSrc: "",
    },
    columns: [
        {
            data: null,
            defaultContent:
                "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRespPUp2'>+</button>",
        },
        { data: "nombres" },
        { data: "apellidos" },
    ],
});

$("#tblOperariosHornoUp2 tbody").on("click", "#agregarRespPUp2", function () {
    var data = tblOperariosHornoUp2.row($(this).parents("tr")).data(); //captura la fila
    agregaresponsableHornosEdit(
        data.nombres,
        data.apellidos
    );
});

function agregaresponsableHornosEdit(nombres, apellidos) {
    let responsableHornosEdit = document.getElementById("responsableHornosEdit");
    responsableHornosEdit.value = `${nombres}  ${apellidos}`;
}


init();

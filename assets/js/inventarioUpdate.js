let tblInventarioUpdate = $("#tblInventarioUpdate").DataTable({
  ajax: {
    url: "https://ladrillerabv.000webhostapp.com/DiarioInventario/getAllUp",
    dataSrc: "",
  },
  columns: [
    { data: "idCtrDesp" },
    { data: "responsableCargue" },
    { data: "fechaDiario" },
    { data: "codigo" },
    { data: "referencia" },
    { data: "primera" },
    { data: "segunda" },
    { data: "rotura" },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='editarInventario'  class='btn' data-bs-toggle='modal' data-bs-target='#modalEditarInv' style='background-color: #4EB700; color:white;'>Editar</a>",
    },
    {
      data: null,
      defaultContent:
        "<a type='button' href='#' id='eliminarInventario'  class='btn' data-bs-toggle='modal' data-bs-target='#modalEliminarInv' style='background-color: #FF0000; color:white;'>Eliminar</a>",
    },
  ],
});

//selecciona el registro para editarlo
$("#tblInventarioUpdate tbody").on("click", "#editarInventario", function () {
  var data = tblInventarioUpdate.row($(this).parents("tr")).data(); //captura la fila
  editar(
    data.idCtrDesp,
    data.responsableCargue,
    data.fechaDiario,
    data.codigo,
    data.referencia,
    data.primera,
    data.segunda,
    data.rotura
  );
});

function editar(idCtrDesp, responsableCargue, fechaDiario, codigo, referencia, primera, segunda, rotura) {
  let idEdit = document.getElementById("idInvEdit");
  let responsableDiarioEdit = document.getElementById("responsableDiarioEdit");
  let codigoRefEdit = document.getElementById("codigoRefEdit");
  let refEdit = document.getElementById("refEdit");
  let primeraEdit= document.getElementById("primeraEdit");
  let segundaEdit = document.getElementById("segundaEdit");
  let roturaEdit = document.getElementById("roturaEdit");
  let fechaInvEdit = document.getElementById("fechaInvEdit");

  idEdit.value = idCtrDesp;
  responsableDiarioEdit.value = responsableCargue;
  codigoRefEdit.value = codigo;
  refEdit.value = referencia;
  primeraEdit.value = primera;
  segundaEdit.value = segunda;
  roturaEdit.value = rotura;
  fechaInvEdit.value = fechaDiario;
}

//selecciona el registro para eliminarlo
$("#tblInventarioUpdate tbody").on("click", "#eliminarInventario", function () {
  var data = tblInventarioUpdate.row($(this).parents("tr")).data(); //captura la fila
  eliminar(
    data.idCtrDesp,
    data.responsableCargue,
    data.fechaDiario,
    data.codigo,
    data.referencia,
    data.primera,
    data.segunda,
    data.rotura
  );
});

function eliminar(idCtrDesp, responsableCargue, fechaDiario, codigo, referencia, primera, segunda, rotura) {
  let idInvDel = document.getElementById("idInvDel");
  let respDiarioEditDel = document.getElementById("respDiarioDel");
  let codigoRefDel = document.getElementById("codigoRefDel");
  let refDel = document.getElementById("refDel");
  let primeraDel= document.getElementById("primeraDel");
  let segundaDel = document.getElementById("segundaDel");
  let roturaDel = document.getElementById("roturaDel");
  let fechaInvDel = document.getElementById("fechaInvDel");

  idInvDel.value = idCtrDesp;
  respDiarioEditDel.value = responsableCargue;
  codigoRefDel.value = codigo;
  refDel.value = referencia;
  primeraDel.value = primera;
  segundaDel.value = segunda;
  roturaDel.value = rotura;
  fechaInvDel.value = fechaDiario;
}

let tblOperariosInvUpdate = $("#tblOperariosInvUpdate").DataTable({
  autoWidth: false,
  ajax: {
      url: "https://ladrillerabv.000webhostapp.com/Operarios/todos",
      dataSrc: "",
  },
  columns: [
      {
          data: null,
          defaultContent:
              "<button type='button' style='background-color:#FF5733;' class='btn btn-sm shadow-sm' id='agregarRespInvUpdate'>+</button>",
      },
      { data: "nombres" },
      { data: "apellidos" },
  ],
});

//selecciona el  item para agregarlo al detalle del cargue
$("#tblOperariosInvUpdate tbody").on("click", "#agregarRespInvUpdate", function () {
  var data = tblOperariosInvUpdate.row($(this).parents("tr")).data(); //captura la fila
  agregarRespInv(
      data.nombres,
      data.apellidos
  );
});

//agrega el item al detalle 
function agregarRespInv(nombres, apellidos) {
  let responsableDiarioEdit = document.getElementById("responsableDiarioEdit");
  responsableDiarioEdit.value = `${nombres} ${apellidos}`;

}
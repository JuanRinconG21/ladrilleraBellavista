let tblOperariosIndex = $("#tblOperariosIndex").DataTable({
    autoWidth: false,
    ajax: {
        url: "https://ladrillerabv.000webhostapp.com/Operarios/todos",
        dataSrc: "",
    },
    columns: [
        { data: "id" },
        { data: "nombres" },
        { data: "apellidos" },
        {
            data: null,
            defaultContent:
                "<a type='button' href='#' id='editar' data-bs-toggle='modal' data-bs-target='#modalEditarOperario' class='btn' style='background-color: #4EB700; color:white;'>Editar</a>",
        },
        {
            data: null,
            defaultContent:
                "<a type='button' href='#' id='eliminar' data-bs-toggle='modal' data-bs-target='#modalEliminarOperario' class='btn' style='background-color: #FF0000; color:white;'>Eliminar</a>",
        },
    ],
});

//selecciona la referencia para editarla
$("#tblOperariosIndex tbody").on("click", "#editar", function () {
    var data = tblOperariosIndex.row($(this).parents("tr")).data(); //captura la fila
    editar(
      data.id,
      data.nombres,
      data.apellidos
    );
  });
  
  function editar(id, nombres, apellidos) {
    let idRespEdit = document.getElementById("idRespEdit");
    let nombresEdit = document.getElementById("nombresEdit");
    let apellidosEdit = document.getElementById("apellidosEdit");
  
    idRespEdit.value = id;
    nombresEdit.value = nombres;
    apellidosEdit.value = apellidos;
  }
  
  $("#tblOperariosIndex tbody").on("click", "#eliminar", function () {
    var data = tblOperariosIndex.row($(this).parents("tr")).data(); //captura la fila
    eliminar(
        data.id,
        data.nombres,
        data.apellidos
    );
  });
  
  function eliminar(id, nombres, apellidos) {
    let idRespDel = document.getElementById("idRespDel");
    let nombresDel = document.getElementById("nombresDel");
    let apellidosDel = document.getElementById("apellidosDel");
  
    idRespDel.value = id;
    nombresDel.value = nombres;
    apellidosDel.value = apellidos;
  }
$("#tblCargues").DataTable({
  ajax: {
    url: "https://ladrillerabv.000webhostapp.com/CargueDescargueHornos/getAll",
    dataSrc: "",
  },
  columns: [
    { data: "responsableCargue" },
    { data: "fechaCargue" },
    { data: "paquete" },
    { data: "nombre" },
    { data: "medidas" },
    { data: "rendimiento" },
    { data: "peso" },
    { data: "referencia" },
    { data: "cantidad" },
    { data: "idCargueHeader" },
  ],
});

  
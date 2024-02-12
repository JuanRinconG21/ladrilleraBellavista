let tblDescargues = $("#tblDescargues").DataTable({
    ajax: {
      url: "https://ladrillerabv.000webhostapp.com/DescargueHornos/getAll",
      dataSrc: "",
    },
    columns: [
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
    ],
  });
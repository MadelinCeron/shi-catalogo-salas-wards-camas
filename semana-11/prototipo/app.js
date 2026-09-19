const wards = {
  "Pediatría": [
    { codigo: "PED-01", estado: "Disponible" },
    { codigo: "PED-02", estado: "Ocupada" }
  ],
  "Medicina Interna": [
    { codigo: "MED-01", estado: "Disponible" },
    { codigo: "MED-02", estado: "Limpieza" }
  ]
};

let wardActual = "";

function mostrarCamas(ward) {
  wardActual = ward;

  document.getElementById("wards").classList.add("oculto");
  document.getElementById("camas").classList.remove("oculto");
  document.getElementById("tituloWard").textContent = `Camas — ${ward}`;

  renderizarCamas();
}

function renderizarCamas() {
  const lista = document.getElementById("listaCamas");

  lista.innerHTML = wards[wardActual]
    .map(cama => `
      <article class="cama">
        <strong>${cama.codigo}</strong>
        <p class="estado">Estado: ${cama.estado}</p>
      </article>
    `)
    .join("");
}

function volver() {
  document.getElementById("camas").classList.add("oculto");
  document.getElementById("wards").classList.remove("oculto");
}

document.getElementById("formCama").addEventListener("submit", event => {
  event.preventDefault();

  const codigo = document.getElementById("codigo").value;
  const estado = document.getElementById("estado").value;

  wards[wardActual].push({
    codigo,
    estado
  });

  renderizarCamas();
  event.target.reset();

  document.getElementById("mensaje").textContent =
    "Cama registrada correctamente.";
});
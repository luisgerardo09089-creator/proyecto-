mostrar();

function guardar(){

let nombre = document.getElementById("nombre").value;
let grupo = document.getElementById("grupo").value;
let proyector = document.getElementById("proyector").value;
let observaciones = document.getElementById("observaciones").value;

let prestamos =
JSON.parse(localStorage.getItem("prestamos")) || [];

prestamos.push({
nombre,
grupo,
proyector,
observaciones
});

localStorage.setItem(
"prestamos",
JSON.stringify(prestamos)
);

mostrar();
}

function mostrar(){

let tabla =
document.getElementById("tabla");

tabla.innerHTML = `
<tr>
<th>Profesor</th>
<th>Grupo</th>
<th>Proyector</th>
<th>Observaciones</th>
</tr>
`;

let prestamos =
JSON.parse(localStorage.getItem("prestamos")) || [];

prestamos.forEach(function(p){

tabla.innerHTML += `
<tr>
<td>${p.nombre}</td>
<td>${p.grupo}</td>
<td>${p.proyector}</td>
<td>${p.observaciones}</td>
</tr>
`;
});

}

import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-bs4';

// Inicializa DataTables cuando el documento esté listo
$(document).ready(function() {
    $('#categorias').DataTable();
});

$(document).ready(function() {
    $('#actores').DataTable();
});

$(document).ready(function() {
    $('#clasificaciones').DataTable();
});

$(document).ready(function() {
    $('#clientes').DataTable();
});

$(document).ready(function() {
    $('#directores').DataTable();
});

$(document).ready(function() {
    $('#funciones').DataTable();
});

$(document).ready(function() {
    $('#generos').DataTable();
});

$(document).ready(function() {
    $('#peliculas').DataTable();
});

$(document).ready(function() {
    $('#reservas').DataTable();
});

$(document).ready(function() {
    $('#salas').DataTable();
});




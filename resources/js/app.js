import $ from 'jquery';
import 'datatables.net';
import 'datatables.net-bs4';

// Inicializa DataTables cuando el documento esté listo
$(document).ready(function() {
    $('#categorias').DataTable();
});

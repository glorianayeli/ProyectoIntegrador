function activarTiempo() {
    //se activa la función Mensaje() luego de 2 segundos
    setTimeout(actualizarDatos, 5000);
}
function actualizarDatos() {
    $.ajax({
        url:'../controllers/PaginaPrincipal.php/ultimoID',
        type: 'POST',
        data: 'consulta=' + Consulta,
    }).done(function(resp){
        alert(resp);
    });
}
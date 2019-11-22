function activarTiempo() {
    setTimeout(getTemperaturaHumedad, 2000);
}
function getTemperaturaHumedad() {
    $.post("<?php echo base_url()?>PaginaPrincipal/showMedicion",
        function (data) {
            console.log('xd');
            var parametrosTemperatura = [];
            var parametrosHumedad = [];
            var getTemperatura = JSON.parse(data);
            $.each(getTemperatura, function (i, item) {
                parametrosTemperatura.push(item.Temperatura);
                parametrosHumedad.push(item.Humedad);
            });
            //Eliminar y crear la etiqueta canvas
            $('#contenedorTemperatura').remove();
            $('#Temperatura').append("<p class='card-text' id='Temperatura' style='font-size:110px;'>"+parametrosTemperatura+"°C</p>");
            $('#Humedad').remove();
            $('#contenedorHumedad').append("<p class='card-text' id='Temperatura' style='font-size:110px;'>"+parametrosHumedad+"°C</p>");
        });
    activarTiempo();
}
document.addEventListener('DOMContentLoaded', function (event) {
    activarTiempo();
});
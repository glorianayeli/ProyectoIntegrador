var temperatura = document.getElementById('myChart').getContext('2d');
var humedad = document.getElementById('humedad').getContext('2d');

var chart = new Chart(temperatura, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Temperatura',
            backgroundColor: 'rgb(255, 215, 0)',
            borderColor: 'rgb(255, 255, 224)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});
//humedad chart
var chart2 = new Chart(humedad, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Humedad',
            backgroundColor: 'rgb(32, 178, 170)',
            borderColor: 'rgb(255, 255, 224)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});

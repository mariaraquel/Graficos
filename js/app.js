// var ctx = document.getElementById("myChart");

// var chart = ctx.getContext('2d');

// chart.fillStyle = "red";
// chart.fillRect(0,0,100,200);

// chart.fillStyle = "blue";
// chart.fillRect(150, 50, 100, 200);




$('document').ready(function () {

    $.ajax({
        type: "POST",
        url: "chart.php",
        dataType: "json",
        success: function (data) {


            var mesarray = [];
            var vendasarray = [];

            for (var i = 0; i < data.length; i++) {

                mesarray.push(data[i].mes);
                vendasarray.push(data[i].valor_venda);

            }

            grafico(mesarray,vendasarray);

        }
    });

})

function grafico(mes,vendas) {


    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'line',
        data: {
            labels: mes,


            datasets: [{
                label: 'Valor das Vendas (mil)',
                backgroundColor: 'transparent',
                borderColor: 'rgb(255, 99, 132)',
                data: vendas
            }]
        },

        options: {
            title: {
                display: true,
                fontSize: 20,
                text: 'Relatório de Vendas'
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

<link rel="stylesheet" href="http://www.chartjs.org/samples/latest/style.css">


<h2 style="text-align: center;color:green;" >Analizar Resultados Comerciales de Campañas</h2>

<br>

<div class="jumbotron">

<h4  >Analizar Resultados Comerciales de Campañas</h4>

                
    <div class="form-group">

        <div class="row">

                <div class="col-md-6">Fecha Inicio :  {{ Form::text('fecha_inicio', '', array('class' => 'form-control datepicker')) }}</div>

                <div class="col-md-6">Fecha Fin :   {{ Form::text('fecha_fin', '', array('class' => 'form-control datepicker')) }}</div>

        </div>                

    </div>
            
</div>


<div class="content">
<div class="wrapper col-2"><canvas id="chart-area"></canvas></div>
<div class="wrapper col-2"><canvas id="chart_2"></canvas></div>
<div class="wrapper col-2"><canvas id="chart_3"></canvas></div>
<div class="wrapper col-2"><canvas id="chart-3"></canvas></div>


</div>


<script type="text/javascript">

var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var color = Chart.helpers.color;

$( function() {
    $( ".datepicker" ).datepicker();

    var presets = window.chartColors;
    var utils = Samples.utils;
    var inputs = {
        min: -100,
        max: 100,
        count: 8,
        decimals: 2,
        continuity: 1
    };

    function generateData(config) {
        return utils.numbers(Chart.helpers.merge(inputs, config || {}));
    }

    function generateLabels(config) {
        return utils.months(Chart.helpers.merge({
            count: inputs.count,
            section: 3
        }, config || {}));
    }

    var options = {
        maintainAspectRatio: false,
        spanGaps: false,
        elements: {
            line: {
                tension: 0.000001
            }
        },
        plugins: {
            filler: {
                propagate: false
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    autoSkip: false,
                    maxRotation: 0
                }
            }]
        }
    };

    var horizontalBarChartData = {
            labels: ["Socio 1", "Socio 2", "Socio 3", "Socio 4", "Socio 5", "Socio 6", "Socio 7"],
            datasets: [{
                label: 'Data',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    10,
                    14,
                    24,
                    15,
                    7,
                    3,
                    6
                ]
            }]

        };

        var barChartData = {
            labels: ["Tipo 1", "Tipo 2"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    10,
                    14,
                    
                ]
            },{
                label: 'Data 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                   
                    
                    3,
                    6
                ]
            }]

        };

    ['start'].forEach(function(boundary, index) {

        // reset the random seed to generate the same data for all charts
        utils.srand(8);

        new Chart('chart-3' , {
            type: 'line',
            data: {
                labels: generateLabels(),
                datasets: [{
                    backgroundColor: utils.transparentize(presets.red),
                    borderColor: presets.red,
                    data: generateData(),
                    label: 'Data',
                    fill: boundary
                }]
            },
            options: Chart.helpers.merge(options, {
                title: {
                    text: '4.Rentabilidad de Campañas',
                    display: true
                }
            })
        });
    });

    var ctx = document.getElementById("chart-area").getContext("2d");
    var config_dough = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.green,
                    window.chartColors.orange,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Tipo 1",
                "Tipo 2",
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: '1.Campañas realizadas por tipo de Socio:'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
    window.myDoughnut = new Chart(ctx, config_dough);

    var ctx_horizontal = document.getElementById("chart_3").getContext("2d");
            window.myHorizontalBar = new Chart(ctx_horizontal, {
                type: 'horizontalBar',
                data: horizontalBarChartData,
                options: {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each horizontal bar to be 2px wide
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                        }
                    },
                    responsive: true,
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: '2. Campañas realizadas por Socios'
                    }
                }
            });
            var ctx_bar = document.getElementById("chart_2").getContext("2d");
            window.myBar = new Chart(ctx_bar, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: '2. Campañas realizadas por Tipo socios'
                    }
                }
            });

});


</script>
<style>

.col-2{
    width:400px;
    height:200px;
}

</style>

@endsection



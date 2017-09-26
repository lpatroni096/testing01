
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

<div class="container-fluid">

<h2 style="text-align: center;color:green;" >Analizar Resultados Comerciales de Campañas</h2>

<br>

<div class="jumbotron">

<h4  >Analizar Resultados Comerciales de Campañas</h4>

                
    <div class="form-group">

        <div class="row">

                <div class="col-md-6">Fecha Inicio :  {{ Form::text('fecha_inicio', '', array('class' => 'form-control datepicker')) }}</div>

                <div class="col-md-6">Fecha Inicio :   {{ Form::text('fecha_fin', '', array('class' => 'form-control datepicker')) }}</div>

        </div>                
    

    
            
    </div>
            
</div>


    <div class="row">
        
        <div class="col-md-6">

            
            <canvas id="myChart" width="200" height="200"></canvas>


        </div>
        
        <div class="col-md-6">

            
			<canvas id="myChart" width="200" height="200"></canvas>


        </div>
        

    </div>

</div>

<script type="text/javascript">

$( function() {
    $( ".datepicker" ).datepicker();

    	var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});

		
});


function muestra_resultado()
{
    bootbox.confirm({
    title: "Resultado de analisis",
    message: '<span style="width: 100%;text-align: center" class="glyphicon  glyphicon-signal"></span><br><h3 style="text-align: center;color:green;"  >Rentable</h3> <br> <h5 style="text-align: center;">Rentabilidad Esperada : x %</h5>',
    buttons: {
        confirm: {
            label: 'Imprimir',
            className: 'btn-success'
        },
        cancel: {
            label: 'Regresar',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result)
        {
            imprimir();
        }
    }
    });
}

function imprimir()
{
               $.notify({
                // options
                message: 'Analisis se esta imprimiendo' 
            },{
                // settings
                type: 'success',
                    placement: {
                    from: "bot",
                    align: "right"
                },
            });
}

</script>

<style type="text/css">
    
    .jumbotron {
    padding: 0.5em 0.6em;
    h1 {
        font-size: 2em;
    }
    p {
        font-size: 1.2em;
        .btn {
            padding: 0.5em;
        }
    }
}
.centered{

display: table !important;
   margin: 0 auto !important;
   margin:auto !important; display:block !important;
}
</style>

@endsection



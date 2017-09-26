
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

<div class="container-fluid">

    <div class="row">
        
        <div class="col-md-4">

            <div class="jumbotron">
                
                <h4>Socio</h4>

                <div class="form-group">
                    
                    {{ Form::select('tipo_socio', config('variables_configuration.tipo_socio'), null, ['class'=>'form-control']) }}

                </div>

                <div class="form-group">
                    
                    {{ Form::select('socio', config('variables_configuration.socios'), null, ['class'=>'form-control']) }}
                
                </div>

            </div>


            <div class="jumbotron">
                    
                
                <h4>Seguro</h4>
    
                <div class="form-group">
                        
                    {{ Form::select('ramo', config('variables_configuration.ramo'), null, ['class'=>'form-control']) }}
    
                </div>

                <div class="form-group">
                        
                    {{ Form::select('producto', config('variables_configuration.productos'), null, ['class'=>'form-control']) }}
                    
                </div>

                <div class="form-group">
                            
                    {{ Form::select('rango_prima', config('variables_configuration.rango_prima'), null, ['class'=>'form-control']) }}
                    
                </div>

                <div class="form-group">
                            
                    {{ Form::select('comision_socio', config('variables_configuration.comision_socio'), null, ['class'=>'form-control']) }}
                        
                </div>
    
            </div>

        </div>
        
        <div class="col-md-4">

            <h2>Planificar Campaña</h2>
        
            <div class="form-group">
                        
                Fecha Inicio :  {{ Form::text('fecha_inicio', '', array('class' => 'form-control datepicker')) }}
            
            </div>
            
            <div class="form-group">
                        
                Fecha Inicio :   {{ Form::text('fecha_fin', '', array('class' => 'form-control datepicker')) }}
                    
            </div>
    
            <div class="form-group">
                        
                {{ Form::select('fondo', config('variables_configuration.fondo'), null, ['class'=>'form-control']) }}
                    
            </div>

            <br><br><br><br>

            <div class="form-group">
                        
                {{ Form::button('Iniciar analisis', array('class' => 'btn btn-primary centered','onclick'=>'muestra_resultado()')) }}
                    
            </div>
            <div class="form-group">
                        
                {{ Form::button('Detener Analisis', array('class' => 'btn btn-danger centered')) }}
                    
            </div>
            <div class="form-group">

                <br>
                        
                {{ Form::button('Imprimir', array('class' => 'btn btn-success centered','onclick'=>'imprimir()')) }}
                    
            </div>
 


        </div>
        
        <div class="col-md-4">

            <div class="jumbotron">
                
                <h4>Datos del Potencial Asegurado</h4>

                <div class="form-group">
                    
                    {{ Form::select('sexo', config('variables_configuration.sexo'), null, ['class'=>'form-control']) }}

                </div>

                <div class="form-group">
                    
                    {{ Form::select('rango_edad', config('variables_configuration.rango_edad'), null, ['class'=>'form-control']) }}
                
                </div>
                <div class="form-group">
                    
                    {{ Form::select('nivel_socio', config('variables_configuration.nivel_socioeconomico'), null, ['class'=>'form-control']) }}
                
                </div>
                <div class="form-group">
                    
                    {{ Form::select('grado_estudios', config('variables_configuration.grado_estudios'), null, ['class'=>'form-control']) }}
                
                </div>

                <div class="form-group">
                    
                    {{ Form::select('nro_hijos', config('variables_configuration.nro_hijos'), null, ['class'=>'form-control']) }}
                
                </div>

                <div class="form-group">
                    
                    {{ Form::select('distritos', config('variables_configuration.distritos'), null, ['class'=>'form-control']) }}
                
                </div>

            </div>

        </div>
        
    </div>

</div>

<script type="text/javascript">

$( function() {
    $( ".datepicker" ).datepicker();
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


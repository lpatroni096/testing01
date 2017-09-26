
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')


    <div class="row">

        <h2 style="text-align: center;color:green;" >Analizar Campaña Historicas</h2><br>

        <div class="col-md-4">

            <div class="jumbotron">
                
                <h4 style="text-align: center;">Socio</h4>

                <div class="form-group">
                    
                    {{ Form::select('tipo_socio', config('variables_configuration.tipo_socio'), null, ['class'=>'form-control']) }}

                </div>

                <div class="form-group">
                    
                    {{ Form::select('socio', config('variables_configuration.socios'), null, ['class'=>'form-control']) }}
                
                </div>

            </div>

        </div>
        
        <div class="col-md-4">

            <div class="form-group">
                        
                Fecha Inicio :  {{ Form::text('fecha_inicio', '', array('class' => 'form-control datepicker')) }}
            
            </div>
            
            <div class="form-group">
                        
                Fecha Inicio :   {{ Form::text('fecha_fin', '', array('class' => 'form-control datepicker')) }}
                    
            </div>
    
            <br>


        </div>
        
        <div class="col-md-4">

            <div class="jumbotron">
                
                 <h4 style="text-align: center;">Seguro</h4>
    
                <div class="form-group">
                        
                    {{ Form::select('ramo', config('variables_configuration.ramo'), null, ['class'=>'form-control']) }}
    
                </div>

                <div class="form-group">
                        
                    {{ Form::select('producto', config('variables_configuration.productos'), null, ['class'=>'form-control']) }}
                    
                </div>

                <div class="form-group">
                            
                    {{ Form::select('tipo_comercializacion', config('variables_configuration.tipo_comercializacion'), null, ['class'=>'form-control']) }}
                    
                </div>


            </div>

        </div>

        <br><br>

            <div class="form-group">
                        
                {{ Form::button('Iniciar analisis', array('class' => 'btn btn-primary centered','onclick'=>'redirecciona_resultado()')) }}
                    
            </div>
            <div class="form-group">
                        
                {{ Form::button('Detener Analisis', array('class' => 'btn btn-danger centered')) }}
                    
            </div>
            <div class="form-group">

                <br>
                        
                {{ Form::button('Imprimir', array('class' => 'btn btn-success centered','onclick'=>'imprimir()')) }}
                    
            </div>
        
    </div>


<script type="text/javascript">

$( function() {
    $( ".datepicker" ).datepicker();
});




</script>


@endsection



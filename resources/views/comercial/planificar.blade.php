
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

    <div class="row">

    <h2 style="text-align: center;color:green;" >Planificar Campaña</h2><br>
    
        <div class="col-md-4">

            <div class="jumbotron">
                
                <h4 style="text-align: center;" >Socio</h4>

                <div class="form-group">
                    
                    {{ Form::select('tipo_socio', config('variables_configuration.tipo_socio'), null, ['class'=>'form-control']) }}

                </div>

                <div class="form-group">
                    
                    {{ Form::select('socio', config('variables_configuration.socios'), null, ['class'=>'form-control']) }}
                
                </div>

            </div>


            <div class="jumbotron">
                    
                
                <h4 style="text-align: center;" >Seguro</h4>
    
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
        
            <div class="form-group">
                        
                Fecha Inicio :  {{ Form::text('fecha_inicio', '', array('class' => 'form-control datepicker')) }}
            
            </div>
            
            <div class="form-group">
                        
                Fecha Inicio :   {{ Form::text('fecha_fin', '', array('class' => 'form-control datepicker')) }}
                    
            </div>
    
            <div class="form-group">

                <br>
                        
                {{ Form::select('fondo', config('variables_configuration.fondo'), null, ['class'=>'form-control']) }}
                    
            </div>

        </div>
        
        <div class="col-md-4">

            <div class="jumbotron">
                
                <h4 style="text-align: center;">Potencial Asegurado</h4>

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

<script type="text/javascript">

$( function() {
    $( ".datepicker" ).datepicker();
});





</script>



@endsection



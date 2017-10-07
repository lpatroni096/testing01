
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

</div>
<div class="container-fluid" > 

{{ Form::open(['url' => '/analizar/reclamo','method'=>'POST','enctype'=>'multipart/form-data','id'=>'Filtro_Form']) }}

<h2 style="text-align: center;color:green;" >Analizar Siniestro Reportado</h2><br>

    <div class="jumbotron">

        <h4>Datos Generales</h4>
                
        <div class="row">

            <div class="col-sm-6">

                <div class="form-group">

                    {{ Form::label('Fecha ') }}
                            
                    {{ Form::text('fecha', '', array('class' => 'form-control datepicker')) }}                    

                </div>


                <div class="form-group">

                    {{ Form::label('Siniestro ') }}
                            
                    {{ Form::select('siniestro', $siniestros, null, ['class' => 'form-control','title'=>'Seleccionar Siniestro']) }}
                    
                </div>

            </div>

            <div class="col-sm-6">

                <div class="form-group">

                    {{ Form::label('Cliente') }}
                            
                    {{ Form::text('cliente', '', array('class' => 'form-control ')) }}                    

                </div>

                <div class="form-group">

                    {{ Form::label('N° Documento') }}
                            
                    {{ Form::text('documento', '', array('class' => 'form-control ')) }}                    
                    
                </div>

            
            </div>            

        </div>    
    </div>


                
        <div class="row jumbotron">

            <div class="col-sm-6 " >

                <h4>Fondos</h4>

                <div class="form-group">

                    {{ Form::label('Fecha apertura de cuenta ') }}
                            
                    {{ Form::text('fecha', '', array('class' => 'form-control datepicker')) }}                    

                </div>

                <div class="form-group">

                    {{ Form::label('Motivo apertura de cuenta ') }}
                            
                    {{ Form::text('motivo', '', array('class' => 'form-control ')) }}                    
                    
                </div>

                <div class="form-group">

                    {{ Form::label('Frecuencia uso de Cuenta') }}
                            
                    {{ Form::text('frecuencia', '', array('class' => 'form-control ')) }}                    
                    
                </div>     

                <div class="form-group">

                    {{ Form::label('Destino de los Fondos') }}
                            
                    {{ Form::text('destino', '', array('class' => 'form-control ')) }}                    
                    
                </div>    

                <div class="form-group">

                    {{ Form::label('Destino de los Fondos') }}
                            
                    {{ Form::select('si_no', config('variables_configuration.si_no'), null, ['class' => 'form-control','title'=>'Seleccionar Siniestro']) }}
                    
                </div>


                <div class="form-group">

                    {{ Form::label('Destino de los Fondos') }}
                            
                    {{ Form::select('si_no', config('variables_configuration.si_no'), null, ['class' => 'form-control','title'=>'Seleccionar Siniestro']) }}
                    
                </div>                                              

            </div>

    
            <div class="col-sm-6 ">
            
                <h4>Siniestro</h4>

                <div class="form-group">

                    {{ Form::label('Como sucedio el robo?') }}
                            
                    {{ Form::text('cliente', '', array('class' => 'form-control ')) }}                    

                </div>

                <div class="form-group">

                    {{ Form::label('Tiempo entre retiro de dinero') }}
                            
                    {{ Form::text('documento', '', array('class' => 'form-control ')) }}                    
                    
                </div>

                <div class="form-group">

                    {{ Form::label(' "T" entre robo y reporte de robo') }}
                            
                    {{ Form::text('destino', '', array('class' => 'form-control ')) }}                    
                    
                </div>    

                <div class="form-group">

                    {{ Form::label('Estuvo en/ cerca a zona peligrosa?') }}
                            
                    {{ Form::select('si_no', config('variables_configuration.si_no'), null, ['class' => 'form-control','title'=>'Seleccionar Siniestro']) }}
                    
                </div>                                              

                <div class="form-group">

                <br>

                {{ Form::button('Analizar', array('class' => 'btn btn-success centered','type'=>'button','onclick'=>'analizar()')) }}

                </div> 

                <div class="form-group">

                <br>

                {{ Form::button('Limpiar', array('class' => 'btn btn-danger centered','type'=>'button','onclick'=>'limpiar()')) }}

                </div> 
            
            </div>            

        </div>    
        {{ Form::close() }}


<script type="text/javascript">

var tabla ; 
$( function() {

});

function limpiar()
{
    window.location.href=window.location.href;  
}

function analizar()
{
    $.get("/analisis/python", function(data, status)
    {
        if(status=='success')
        {
            //El resultado data se imprimira
            alert(data);
        }
        
    });
}

</script>

<style>

</style>
@endsection



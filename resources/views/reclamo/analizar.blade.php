
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

</div>
<div class="container-fluid" > 

{{ Form::open(['url' => '/csv_masivo','method'=>'POST','enctype'=>'multipart/form-data','id'=>'Filtro_Form']) }}

<h2 style="text-align: center;color:green;" >Analizar Siniestro Reportado</h2><br>

    <div class="jumbotron">

        <h4>Datos Generales</h4>
                
        <div class="form-group">

        <div class="row">

            <div class="col-sm-6">

                <div class="form-group">

                    {{ Form::label('Fecha ') }}
                            
                    {{ Form::text('fecha', '', array('class' => 'form-control datepicker')) }}                    

                </div>


                <div class="form-group">

                    {{ Form::label('Siniestro ') }}
                            
                    {{ Form::text('siniestro', '', array('class' => 'form-control ')) }}                    

                </div>

                <div class="form-group">

                    {{ Form::label('Importe Reclamado ') }}
                            
                    {{ Form::text('importe_reclamado', '', array('class' => 'form-control ')) }}                    
                    
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


                <div class="form-group">

                    <br>

                    {{ Form::button("Buscar", array('class' => 'btn btn-primary btn-block','type'=>'button','onclick'=>'buscar_siniestro()')) }}                 
                    
                </div>
            
            </div>            

        </div>    
    </div>

</div>

            <table id ="myTable" class="table table-striped table-bordered" cellspacing="0">
            <thead>
                <tr>
                    <th>Siniestro</th>
                    <th>Importe</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Estado Ev.</th>
                    <th>Estado</th>
                </tr>
            </thead>
   
        </table>

            





<script type="text/javascript">

var tabla ; 
$( function() {
    $( ".datepicker" ).datepicker();

    tabla = $('#myTable').DataTable({
      
      "columns": [
        { "data": "siniestro" },
        { "data": "importe" },
        { "data": "nombre" },
        { "data": "documento" },
        { "data": "estado_ev" },
        { "data": "estado" },
        
        ]
    
    });
});




</script>


@endsection



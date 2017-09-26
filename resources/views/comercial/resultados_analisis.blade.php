
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

<div class="container-fluid">

<h2 style="text-align: center;color:green;">Planificar Campaña</h2>

    <br>

    <div class="row">
        
        <div class="col-md-6">

            <div class="jumbotron">
                
                <h4>Datos del Potencial Asegurado</h4>

                <div class="form-group">

                    {{ Form::label('Sexo') }}

                    {{ Form::text('sexo', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Edad') }}

                    {{ Form::text('edad', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Nivel Socio Economico') }}

                    {{ Form::text('nivel', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Grado de Estudio') }}

                    {{ Form::text('grado', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Nro de Hijos') }}

                    {{ Form::text('nro', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Distritos') }}

                    {{ Form::text('dist', '', array('class' => 'form-control')) }}

                </div>

            </div>


            

        </div>
        
        <div class="col-md-6">
        
            <div class="jumbotron">
                
                <h4>Datos del Potencial Asegurado</h4>

                <div class="form-group">

                    {{ Form::label('Fondo de Marketing') }}

                    {{ Form::text('sexo', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Rango de Prima') }}

                    {{ Form::text('edad', '', array('class' => 'form-control')) }}

                </div>


                <div class="form-group">

                    {{ Form::label('Comision del Socio') }}

                    {{ Form::text('nivel', '', array('class' => 'form-control')) }}

                </div>

             </div>

                <div class="form-group">

                    <h4 style="text-align: center;color:green;">Rentable</h4>

                    <br>

                    <h5 style="text-align: center;">Rentabilidad estimado: x% </h5>

                </div>

                <div class="form-group">

                {{ Form::button('Imprimir', array('class' => 'btn btn-success centered','onclick'=>'imprimir()')) }}
                    
                </div>



           


        </div>
        

    </div>

</div>

<script type="text/javascript">




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



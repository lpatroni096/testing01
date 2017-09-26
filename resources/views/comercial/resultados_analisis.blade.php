
@extends('layouts.app')

@section('title', 'Planificar Campaña')

@section('body')

<h2 style="text-align: center;color:green;">Planificar Campaña</h2>

    <br>

    <div class="row">
        
        <div class="col-md-6">

            <div class="jumbotron">
                
                <h4 style="text-align: center;" >Datos del Potencial Asegurado</h4>

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
                
                <h4 style="text-align: center;" >Datos del Potencial Asegurado</h4>

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

                    @if($numero>=50)

                        <h3 style="text-align: center;color:green;">Rentable</h3>

                        <br>

                        <h4 style="text-align: center;">Rentabilidad estimado: {{$numero}}% <span style='font-size: 25px;color:green;' class="glyphicon glyphicon-ok"></span> </h4> 

                    @else

                        <h3 style="text-align: center;color:red;">No Rentable</h3>

                        <br>

                        <h4 style="text-align: center;">Rentabilidad estimado: {{$numero}}% <span style='font-size: 25px;color:red;' class="glyphicon glyphicon-remove"></span> </h4> 

                    @endif

                    <br>

                    {{ Form::button('Imprimir', array('class' => 'btn btn-success centered','onclick'=>'imprimir()')) }}


                </div>
        </div>
        
    </div>

@endsection



function notificacion(mensaje,tipo)
{
    $.notify({
        title: 'Notificación : ',
        message: mensaje,
        delay: 5000,
        animate: {enter: 'animated fadeInDown',exit: 'animated fadeOutUp'},
        timer: 1000,
        },{
        type: tipo,
        placement: {
        from: "bottom",
        align: "right"
        }
    });
}


function imprimir()
{
    notificacion('Imprime.','success');
}

function muestra_resultado()
{


    bootbox.confirm({
        
        title: "Resultado de analisis",
        message: mensaje_resultado(0),
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

function redirecciona_resultado()
{
    bootbox.confirm({
        title: "Resultado de analisis",
        message:  mensaje_resultado(0),
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
                window.location.href = "/resultados/analisis/campanas";
            }
        }
    });
}

function numero_entero(min, max)
{
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function mensaje_resultado(numero)
{
    var numero = numero_entero(0,100);
    
    var mensaje= '<span style="width: 100%;text-align: center;font-size: 30px;" class="glyphicon  glyphicon-signal"></span><br><h3 style="text-align: center;color:green;">Rentable</h3><h4 style="text-align: center;">Rentabilidad Esperada : '+numero+' %<span style="font-size: 25px;color:green;" class="glyphicon glyphicon-ok"></span></h4>';

    if(numero<=50)
    {
        mensaje= '<span style="width: 100%;text-align: center;font-size: 30px;" class="glyphicon  glyphicon-signal"></span><br><h3 style="text-align: center;color:red;">No Rentable</h3><h4 style="text-align: center;">Rentabilidad Esperada : '+numero+' %<span style="font-size: 25px;color:red;" class="glyphicon glyphicon-remove"></span></h4>';
    }

    return mensaje;
}
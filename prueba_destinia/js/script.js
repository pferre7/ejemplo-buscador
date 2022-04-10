
$(document).ready(function(){
    //inicializamos una variable que haga referencia al valor del input donde vamos a capturar el evento de keyup
    var inputSugerencias = $('#inputSugerencias');

    //realizamos la petición AJAX inicial
    $.ajax({
        url: 'libs/functions.php',
        type: 'POST',
        data: {
            inputEmpty: 'inputEmpty'
        },
        success: function(response){
            //mostramos los resultados de la peticion
            $('#sugerenciasContainer').html(response);
        }
    });

    //capturamos el evento keyup del input
    inputSugerencias.keyup(function(){
        //recogemos el valor del input
        let inputText = inputSugerencias.val();
        //realizamos la petición AJAX
        $.ajax({
            url: 'libs/functions.php',
            type: 'POST',
            data: {
                inputKeyup: 'inputKeyup',
                inputText: inputText
            },
            success: function(response){
                //mostramos los resultados de la peticion
                $('#sugerenciasContainer').html(response);
            }
        });
    });
});
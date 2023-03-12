jQuery(document).ready(function($) {


 /**
 * Método que activa/desactiva los botones y el segundo operador en la opción de raíz cuadrada
 */
   $(".process").click(function(e)
   {
    $(".process").removeClass("active");
    $(this).addClass("active");

    if($(this).val() =='square')
    {
        $("#operador2").val(0);
        $("#operador2").prop( "disabled", true );
    }
    else
        $("#operador2").prop( "disabled", false );


   }); 

    /**
     * Método que recoge todos los valores del formulario y realiza la petición a la API
     */
   $("#calculo").click(function(e)
   {

    var ruta = $("#ruta").val();
    var operador1 = $("#operador1").val();
    var operador2 = $("#operador2").val();
    var operacion = $(".process.active").val();

    //Realizamos comprobación de que los operadores y la ruta han sido escritos correctamente
    if(checkOperadores(operador1, operador2) === true && checkRuta(ruta) === true)
        envio(ruta, operador1, operador2, operacion);
    else
        alert('Por favor, rellena todos los campos correctamente');



   }); 


    /**
     * Método que comprueba que los dos operadores son números
     */
   function checkOperadores(op1, op2)
   {
    if($.isNumeric(op1) && $.isNumeric(op2))
        return true;
    else
        return false;
   }

    /**
     * Método que comprueba que se ha escrito una ruta
     */
   function checkRuta(rut)
   {
        if(rut === null)
            return false;
        else
            return true;
   }

    /**
     * Método que envía los datos para el cálculo a la API por medio de Ajax
     */
   function envio(ruta,operador1,operador2,operacion)
   {
    
    $.ajax({
            url : ruta+'/'+operacion+'/'+operador1+'/'+operador2,
            type : 'GET',
            dataType : 'json',

            success : function(json) 
            {
                $('#result').html(json.result);            
            },
            error : function(xhr, status) {
                alert('Ha surgido un problema con el envío de datos');
            }
        });

   }


});
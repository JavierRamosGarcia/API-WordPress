<?php 

namespace App\Service;
/**
 * Servicio que realiza las tareas de cálculo
 * Autor: Javier Ramos
 */
class ServicioCalculadora
{


    /**
     * Suma dos números y devuelve el resultado.
     *
     * @param int $sum1 El primer número a sumar.
     * @param int $sum2 El segundo número a sumar.
     *
     * @return int El resultado de la suma.
     */
    public function sumar($sum1, $sum2)
    {
        $resultado = $sum1 + $sum2;

        return $resultado;
    }


     /**
     * Resta dos números y devuelve el resultado.
     *
     * @param int $res1 El primer número a restar.
     * @param int $res2 El segundo número a restar.
     *
     * @return int El resultado de la resta.
     */
    public function restar($res1, $res2)
    {
        $resultado = $res1 - $res2;

        return $resultado;
    }

    
     /**
     * Multiplica dos números y devuelve el resultado.
     *
     * @param int $mul1 El primer número a multiplicar.
     * @param int $mul2 El segundo número a multiplicar.
     *
     * @return int El resultado de la multiplicación.
     */
    public function multiplicar($mul1, $mul2)
    {
        $resultado = $mul1 * $mul2;

        return $resultado;
    }
    

     /**
     * Divide dos números y devuelve el resultado.
     *
     * @param int $div1 El primer número a dividir.
     * @param int $div2 El segundo número a dividir.
     *
     * @return int El resultado de la división.
     */
    public function dividir($div1, $div2)
    {
        $resultado = $div1 / $div2;

        return $resultado;
    }

    
     /**
     * Obtiene la raíz cuadrada de un número.
     *
     * @param int $raiz El número del que se va a obtener la raiz cuadrada.
     *
     * @return int El resultado de la raíz cuadrada.
     */
    public function raiz($raiz)
    {
        $resultado = sqrt($raiz);

        return $resultado;
    }

 
     /**
     * Obtiene el porcentaje elegido de un número.
     *
     * @param int $porce1 El número del que se quiere obtener un porcentaje.
     * @param int $porce2 El porcentaje a obtener.
     *     
     * @return int El resultado del porcentaje.
     */
    public function porcentaje($porce1,$porce2)
    {
        $resultado = ($porce1 * $porce2) / 100;

        return $resultado;
    }
}

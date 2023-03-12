<?php

namespace App\Controller;

use App\Service\ServicioCalculadora;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controlador que gestiona las rutas disponibles para los cálculos
 * Autor: Javier Ramos
 */
class CalculadoraController extends AbstractController
{

    private $calculadora;

    /**
     * Constructor que inicializa el servicio ServicioCalculadora.
     */ 
    public function __construct( ServicioCalculadora $serviciocalculadora)
    {
        $this->calculadora = $serviciocalculadora;
    }

    /** 
     * @Route("/add/{op1}/{op2}", name="sumar")
    */
    public function rutasumar($op1,$op2)
    {
        $resultado = $this->calculadora->sumar($op1, $op2);

        $response = new JsonResponse();

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $response->setData(["result" => $resultado]);

        return $response;

    }

    /** 
     * @Route("/subtract/{op1}/{op2}", name="restar")
    */
    public function rutarestar(ServicioCalculadora $calculadora,$op1,$op2)
    {
        $resultado = $this->calculadora->restar($op1, $op2);

        $response = new JsonResponse();

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $response->setData(["result" => $resultado]);

        return $response;

    }

    /** 
     * @Route("/multiply/{op1}/{op2}", name="multiplicar")
    */
    public function rutamultiplicar(ServicioCalculadora $calculadora,$op1,$op2)
    {
        $resultado = $this->calculadora->multiplicar($op1, $op2);

        $response = new JsonResponse();

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $response->setData(["result" => $resultado]);

        return $response;

    }

    /** 
     * @Route("/divide/{op1}/{op2}", name="dividir")
    */
    public function rutadividir(ServicioCalculadora $calculadora,$op1,$op2)
    {
        $resultado = $calculadora->dividir($op1, $op2);

        $response = new JsonResponse();

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $response->setData(["result" => $resultado]);

        return $response;

    }

    /** 
     * @Route("/square/{op1}/0", name="raiz")
    */
    public function rutaraiz(ServicioCalculadora $calculadora,$op1)
    {
        $resultado = $calculadora->raiz($op1);

        $response = new JsonResponse();

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $response->setData(["result" => $resultado]);

        return $response;

    }

    /** 
     * @Route("/percentage/{op1}/{op2}", name="porcentaje")
    */
    public function rutaporcentaje(ServicioCalculadora $calculadora,$op1, $op2)
    {
        $resultado = $calculadora->porcentaje($op1, $op2);

        $response = new JsonResponse();

        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $response->setData(["result" => $resultado]);

        return $response;

    }

}
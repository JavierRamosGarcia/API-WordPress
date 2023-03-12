<?php

namespace App\Service;
use PHPUnit\Framework\TestCase;

/**
 * Clase que realiza las pruebas unitarias del servicio ServicioCalculadora
 * Autor: Javier Ramos
 */
class ServicioCalculadoraUnitTest extends TestCase
{


    /**
     * Prueba de suma correcta
     */
    public function testSumaCorrecta()
    {
        $calculadora = new ServicioCalculadora();

        $result = $calculadora->sumar(4, 2);
        $this->assertEquals(6, $result);

    }

    
    /**
     * Prueba de resta correcta
     */
    public function testRestaCorrecta()
    {
        $calculadora = new ServicioCalculadora();

        $result = $calculadora->restar(10, 6);
        $this->assertEquals(4, $result);

    }

    
    /**
     * Prueba de multiplicación correcta
     */
    public function testMultiCorrecta()
    {
        $calculadora = new ServicioCalculadora();

        $result = $calculadora->multiplicar(2, 2);
        $this->assertEquals(4, $result);

    }

    
    /**
     * Prueba de división correcta
     */
    public function testDivCorrecta()
    {
        $calculadora = new ServicioCalculadora();

        $result = $calculadora->dividir(12, 2);
        $this->assertEquals(6, $result);

    }


    /**
     * Prueba de raiz cuadrada correcta
     */
    public function testRaizCorrecta()
    {
        $calculadora = new ServicioCalculadora();

        $result = $calculadora->raiz(9);
        $this->assertEquals(3, $result);

    }

    /**
     * Prueba de porcentaje correcta
     */
    public function testPorcenCorrecta()
    {
        $calculadora = new ServicioCalculadora();

        $result = $calculadora->porcentaje(50,5);
        $this->assertEquals(2.5, $result);

    }


}

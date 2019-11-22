<?php


use PHPUnit\Framework\TestCase;
use Proyecto\Encriptador;

class EncriptadorTest extends TestCase
{
    
    function testInputTextToEncript()
    {
        $inputTextUser = new Encriptador();
        $EsperoQueRetorneHola = 'Hola ';
        $valorDevueltoPorElMetodo=$inputTextUser->startEncription();

        $this->assertEquals($EsperoQueRetorneHola, $valorDevueltoPorElMetodo);
    }
    
    function testDevuelveUnArray()
    {   
        $array = new Encriptador();
        $valorDevueltoPorElMetodoEsArray = $array->getAbecedario();

        $this->assertIsArray($valorDevueltoPorElMetodoEsArray);

    }

    function testDevuelve27Elementos()
    {
        $elementos = new Encriptador();
        $valorEsperado = 27;
        $valorDevueltoParaContarArray = $elementos->getAbecedario();
        $this->assertCount($valorEsperado, $valorDevueltoParaContarArray);
    }


}
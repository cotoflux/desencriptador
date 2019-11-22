<?php


use PHPUnit\Framework\TestCase;
use Proyecto\Encriptador;

class EncriptadorTest extends TestCase
{
    
    function testInputTextToEncript()
    {
        $newInputText = new Encriptador();
        $this->assertEquals('Hola ', $newInputText->startEncription());
    }

}
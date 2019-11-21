<?php


use PHPUnit\Framework\TestCase;
use Proyecto\Encriptador;

final class EncriptadorTest extends TestCase
{
    
    public function testInputText()
    {
        $abecedario=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j',
    'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
    'y', 'z',' '];
        $newInputText = new Encriptador();
        $resultado = $newInputText->getKey();
        dd($resultado);
        $this->AssertEquals($abecedario, $resultado);
    }

}
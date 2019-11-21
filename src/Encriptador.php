<?php 
namespace Proyecto;

class Encriptador
{
    public $inputTexto;
    public $inputTextoEncripted="";
    private $clavePrivada;
    private $abecedario2=['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j',
    'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
    'y', 'z',' '];

    function strartEncription()
    {
        $textoEncript = $this->inputTexto = 'Hola ';
        return $textoEncript;
    }

    

    function keyGenerate()
    {
        $primerResultado = $this->getAbecedario();
        shuffle($primerResultado);
        $original = $this->getAbecedario(); 
        $newAbc=[];         
        foreach($primerResultado as $key => $letraShuffeled){            
            $newAbc[$original[$key]] = $letraShuffeled;
        }
        $this->setKey($newAbc);
    

        return $this->getKey();

    }

    function setKey($valor)
    {
        $this->clavePrivada = $valor;
    }

    function getKey()
    {
        return $this->clavePrivada;
    }

    function getAbecedario()
    {   
        return $this->abecedario2;
    }

    function encriptIt()
    {
        $longTexto = strlen($this->inputTexto);
        for($i = 0; $i<=$longTexto-1; $i++){
            $result = substr($this->inputTexto, $i);
            $devuelveResultado = $this->conversor($result);
            var_dump($this->inputTextoEncripted += $devuelveResultado);
        }
    }

    function conversor($letraDesencriptada)
    {
        $variableKey = $this->getKey();
        $variableKey[$letraDesencriptada];
        return $variableKey[$letraDesencriptada];
        
    }

}

$primerEncriptado = new Encriptador();
$primerEncriptado->strartEncription();
$primerEncriptado->keyGenerate();
var_dump($primerEncriptado->keyGenerate());
$primerEncriptado->encriptIt();
var_dump($primerEncriptado->inputTextoEncripted);


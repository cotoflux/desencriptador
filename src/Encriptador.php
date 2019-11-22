<?php 
namespace Proyecto;

class Encriptador
{
    public $inputTexto = 'Hola ';
    public $inputTextoEncripted="";
    private $clavePrivada;
    private $abecedario2=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i','j',
    'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
    'y', 'z', ' ');

    function setInputToLoweCaseText($introductionText){

        return strtolower($introductionText);
    }
    
    function startEncription()
    {   
        $this->keyGenerate();
        $convertir=$this->inputTexto;
        $valorAencriptar=$this->setInputToLoweCaseText($convertir);
        $resultado=$this->encriptIt($valorAencriptar);
        return $resultado;
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

    function encriptIt($valorAencriptar)
    {
        $longTexto = str_split($valorAencriptar, 1);
        foreach ($longTexto as  $char) {
            $devuelveResultado = $this->conversor($char);
            $this->inputTextoEncripted .= $devuelveResultado;
        }
    }

    function conversor($letraDesencriptada)
    {
         $variableKey = $this->getKey();

          return $variableKey[$letraDesencriptada];
        
    }

}





<?php
/**
*
*Descripción: Completar si falta número en la colección en el rango.
*@author Tavo Sanchez <gtavo427@gmail.com>
*@copyright 2018 Tavo Sanchez
*
*/ 

class CompleteRange{

    function build($rango){
        
        return range($rango[0], $rango[count($rango)-1]);
    
    }
}

$completeRango  = new CompleteRange();
$resultado      = $completeRango->build( [2, 4, 9]);
print_r($resultado);

?>
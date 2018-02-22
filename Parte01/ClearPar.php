<?php
/**
*
*Descripción: Completar si falta número en la colección en el rango.
*@author Tavo Sanchez <gtavo427@gmail.com>
*@copyright 2018 Tavo Sanchez
*
*/ 

class ClearPar{

    function built($cadena){
        $parent = array("()"=>"()", "("=>"", ")"=>"");
        return strtr($cadena, $parent);
    }
}

$eliminarParentesis = new ClearPar();
echo $eliminarParentesis->built("()())((()()()())((())()(())");

?>
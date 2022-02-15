<?php

    function ValidString($pValue){
        if (strlen($pValue)<1){
            return 6000;
        }else {
            return 0;
        }
    }

    function ValidNum($pValue){
        if (is_numeric($pValue)<1){
            return 6001;
        }else{
            return 0;
        }
    }

    function ValidNum2($pValue, $pValue2){
        if ((is_numeric($pValue)<1) or (is_numeric($pValue2)<1)){
            return 6002;
        }else{
            return 0;
        }
    }

    function numeric($pValue){
        if (is_numeric($pValue)<1){
            return "No es numerico";
        }else{
            return "Es numerico";
        }
    }

    function equal($pValue, $pValue2){
        if ($pValue== $pValue2){
            return "Son iguales";
        }
        else{
            return "No son iguales";
        }
    }

    function descerror($perr){
        if ($perr == 6000){
            $res = "No es una frase valida";
            return $res;
        }
        if ($perr == 6001){
            $res="No es un numero";
            return $res;
        }
        if ($perr == 6002){
            return "No se puede hacer una operacion con letras";
        }
        if ($perr==5001){
            return "Metodo no definidos";
        }
        else{
            return ;
        }
    }

?>
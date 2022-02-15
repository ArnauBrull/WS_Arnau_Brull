<?php

    // echo"<br>Modulo EXECUTE";

    function ExecuteMethod($pMethod, $pP1, $pP2){

        $err=0;
        global $response;

        switch ($pMethod){
            case "lcase";
                $response=strtolower($pP1);
                //echo "<br>executeMethod", $response;
                break;
            case "ucase";
                $response=strtoupper($pP1);
                //echo "<br>executeMethod", $response;
                break;
            case "reverse";
                $response=strrev($pP1);
                //echo "<br>executeMethod", $response;
                break;
            case "capitalize";
                $response = ucfirst($pP1);
                break;
            case "sumar";
                $response= ($pP1 + $pP2);
                //echo "<br>executeMethod", $response;
                break;
            case "restar";
                $response= ($pP1 - $pP2);
                break;
            case "multi";
                $response= ($pP1 * $pP2);
                break;
            case "isnumeric";
                $response = numeric($pP1);
                break;
            case "equal";
                $response = equal($pP1, $pP2);
                break;
            case "istype";
                $response = gettype($pP1);
                break;
            case "length";
                $response = strlen($pP1);
                break;
            
        };   
        return $err;
    };

    if ($err==0){
        $err=ExecuteMethod($method, $p1, $p2);
    };

?>
<?php
    // echo "<br>Module VALIDATE";

    #Validar si el metodo existe
////////////////////////////////////////////////////////////////////////////
    function _validationMethodExsists($pMethod){
        $method_list = array('lcase','ucase','reverse','sumar','restar' ,'isnumeric', "equal", "multi", "istype", "length", "capitalize"); 
        if (in_array($pMethod, $method_list, TRUE)){
            return 0;
        } else {
            return 5001;
        };
    };
    
/////////////////////////////////////////////////////////////////////////////
    function _ValidateParamsForThisMethod($pMethod,$pP1,$pP2){
        $err=99999999;
        global $err_desc;
        switch ($pMethod){
            case "lcase";
                $err=ValidString($pP1);
                $err_desc=descerror($err);
                break;
            case "ucase";
                $err=ValidString($pP1);
                $err_desc=descerror($err);
                break;
            case "reverse";
                $err=ValidString($pP1);
                $err_desc=descerror($err);
                break;
            case "capitalize";
                $err = ValidString($pP1);
                $err_desc=descerror($err);
                break;
            case "length";
                $err = ValidString($pP1);
                $err_desc=descerror($err);
                break;
            case "sumar";
                $err=ValidNum2($pP1,$pP2);
                $err_desc=descerror($err);
                break;
            case "restar";
                $err=ValidNum2($pP1, $pP2);
                $err_desc=descerror($err);
                break;
            case "multi";
                $err=ValidNum2($pP1, $pP2);
                $err_desc=descerror($err);
                break;
            case "isnumeric";
                $err=0;
                break;
            case "equal";
                $err=0;
                break;
            case "istype";
                $err = ValidString($pP1);
                break;
        };
        return $err;

    };

    $err= _validationMethodExsists($method);
    $err_desc=descerror($err);
    if ($err==0){
       $err = _ValidateParamsForThisMethod($method,$p1,$p2);
    };

?>
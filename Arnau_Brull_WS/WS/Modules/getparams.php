<?php
    // echo "<br>Module GETPARAMS";
    
    $datetime=date('l j \d\e F \d\e\l Y\, h:i:s A');

    $method="";
    $p1="";
    $p2="";

    $response="UNDEFINED";

    $err=0;
    $err_desc="";

/////////////////////////////////////////////////////////////
    if(isset($_GET["method"])){
        $method=$_GET["method"];
    }

    if(isset($_GET["p1"])){
        $p1=$_GET["p1"];
    }
    
    if(isset($_GET["p2"])){
        $p2=$_GET["p2"];
    }


//////////////////////////////////////////////////////////
    // echo "<br>_____________________________________";
    // echo "<br>method=",$method;
    // echo "<br>p1=",$p1;
    // echo "<br>p2=",$p2;
    // echo "<br>p3=",$p3;

?>
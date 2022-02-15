<?php
    $xmlsrt=<<<XML

        <response>
            <datetime>$datetime</datetime>
            <call_params>
                <method>$method</method>
                <p1>$p1</p1>
                <p2>$p2</p2>
            </call_params>
            <response_info>
                <response>$response</response>
            </response_info>
            <error_info>
                <error_code>$err</error_code>
                <error_description>$err_desc</error_description>
            </error_info>
            
        </response>
    XML;
    header("Content-Type:text/xml");
    $xml=new SimpleXMLElement($xmlsrt);
    echo $xml->asXML();
?>
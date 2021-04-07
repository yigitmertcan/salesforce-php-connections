<?php



//list( , $token) = each($result);



function getCurl($url) { 

	$token = "00D4K000003898H!ARQAQKDGCCCNuMlvd54AXgECAdefOqlGxatxA2JDISr6sIECQ30nBw_aXNbIEKhOB08t5B9eoUbEDJmE_ZAllHL__6pTIpQL";
	$authorization = "Authorization: Bearer ".$token;
    $ch = curl_init(); 
    curl_setopt($ch,CURLOPT_URL,$url); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);   
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));

    $output=curl_exec($ch); 
    curl_close($ch); 
    
    $obj = json_decode($output);
    return  $obj; 
} 


echo  getCurl("https://um6.salesforce.com/!url") ;


?>
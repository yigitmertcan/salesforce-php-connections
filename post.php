
<?php
$token = "00D4K000003898H!ARQAQMyNMvioPqc1lBZuTY8o5FONYa7IPQxa_U8XooeSfs2qZ01VZXpskUa_HI27RbRSUa6moFOE6Y6qnoJPnm4AElUlfrhm";
//list( , $token) = each($result);



$authorization = "Authorization: Bearer ".$token;


   
$data = array("name" => "dsadasd", "website" => "fdsfsdf" );                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('https://um6.salesforce.com/!url');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json', $authorization,                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);       

$result = curl_exec($ch);
    curl_close($ch);

$obj = json_decode($result,true);
echo $obj;
?>
 <?php
 //! is your secret ids and passwords...
 $ch = curl_init("https://login.salesforce.com/services/oauth2/token?username=!your_mail&&password=!your_password!code&&client_id=!secret_code&&client_secret=!secret_code&&grant_type=password");                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );  


                                                                                                                         
    $result = curl_exec($ch);
    curl_close($ch);
    //echo $result;

    $obj = json_decode($result);


    $mert= $obj->access_token;
    echo $mert;


?>
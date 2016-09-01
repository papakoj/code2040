<?php
$data = array("token" => "42e375ea6007fb0d8b353b5365844baf");                                                                    
$data_string = json_encode($data);                                                  
$ch = curl_init('http://challenge.code2040.org/api/reverse');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string)) 
);                                       

$result = curl_exec($ch);
$result = strrev($result);

$data2 = array("token" => "42e375ea6007fb0d8b353b5365844baf", "string" => "$result");                                                                    
$data_string2 = json_encode($data2);                                                  
$ch2 = curl_init('http://challenge.code2040.org/api/reverse/validate');                                                                      
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data_string2);  
#curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch2, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string2))                                                                   
);                                                                  

curl_exec($ch2);

?>
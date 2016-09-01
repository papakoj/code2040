<?php
$data = array("token" => "42e375ea6007fb0d8b353b5365844baf", "github" => "https://github.com/papakoj/code2040");                                                                    
$data_string = json_encode($data);                                                  
$ch = curl_init('http://challenge.code2040.org/api/register');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  
#curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
curl_exec($ch);
?>
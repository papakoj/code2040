<?php
$data = array("token" => "42e375ea6007fb0d8b353b5365844baf");                                                                    
$data_string = json_encode($data);                                                  
$ch = curl_init('http://challenge.code2040.org/api/haystack');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string)) 
);                                       


$result = curl_exec($ch);
echo $result;
echo "\n\n<br/>";
$arr1 = explode(",", $result);
$nedd = explode(":", $arr1[0]);
$acneed = $nedd[1];
echo "\n\n<br/>";
echo "$acneed";

echo "\n\n<br/>";
// function my_search($haystack) {
//     $needle = "$acneed";
//     return(stripos($haystack, $needle));
// }
// $matches = array_filter($arr1, 'my_search');
$i = 0;
$arr1 = array_slice($arr1, 1);
print_r($arr1);
echo "\n\n<br/>";
foreach($arr1 as $string)
{
  if(strpos($acneed, $string) !== false) 
  {
    echo "$acneed";
    echo "$string";
    echo "$i";
    break;
  }
  $i++;
}

$data2 = array("token" => "42e375ea6007fb0d8b353b5365844baf", "needle" => "$i");                                                                    
$data_string2 = json_encode($data2);                                                  
$ch2 = curl_init('http://challenge.code2040.org/api/haystack/validate');                                                                      
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data_string2);  
#curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch2, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string2))                                                                   
);                                                                  

curl_exec($ch2);

?>
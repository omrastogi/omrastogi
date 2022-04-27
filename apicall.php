<?php

$curl = curl_init();
//echo $_POST['body'];


curl_setopt_array($curl, array(
  CURLOPT_URL => '13.234.118.61:4000',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('body' => $_POST['body']),
  CURLOPT_SSL_VERIFYPEER => 0,   
  CURLOPT_SSL_VERIFYHOST => 0
));



$response = curl_exec($curl);

if ($response == false)
	echo "Error Calling:  ".curl_errno($curl).":". curl_error($curl);
	
else
	echo $response;
 

curl_close($curl);

?>
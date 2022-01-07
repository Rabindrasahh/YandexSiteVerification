<?php

// url for token   https://oauth.yandex.ru/authorize?response_type=token&client_id=<application ID>

//get user-id----------------------------------------------------------------------------
/*$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch); 
}
curl_close($ch);*/
// userid = 1542490558


//get host-id  https://api.webmaster.yandex.net/v4/user/{user-id}/hosts-------------------------------------


/*$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user/1542490558/hosts');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch); 
}
curl_close($ch);*/

// host-id  https:moduleszone.com:443
// verification-    https://api.webmaster.yandex.net/v4/user/{user-id}/hosts/{host-id}/verification--------------------

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.webmaster.yandex.net/v4/user/1542490558/hosts/https:moduleszone.com:443/verification');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: OAuth AQAAAABb8Im-AAeYLlyOf6DNgUejp92eu2AReBo';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch); 
}
curl_close($ch);

print_r($result);
?>
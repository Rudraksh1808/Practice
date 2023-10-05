<?php
$from = 'USD';
$currency = curl_init('https://api.exchangerate-api.com/v4/latest/INR'.$from);

curl_setopt($currency, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($currency);

curl_close($currency);

$exchangeRates = json_decode($json, true);


echo $exchangeRates['rates']['INR'];

 

echo var_dump($exchangeRates)
?>
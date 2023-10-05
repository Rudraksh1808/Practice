<?php

    

    if(isset($_POST['submit'])){

        $amount = $_POST['amount'];

        $from = $_POST['from_currency'];

        $to = $_POST['to_currency'];

 

        $ch=curl_init();

 

    $url="https://v6.exchangerate-api.com/v6/f9f4fe50a0b8f4b715657d5b/pair/$to/$from/$amount";

 

 

 

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 

    curl_setopt($ch, CURLOPT_URL, $url);

 

    $result = curl_exec($ch);

 

    $json_obj = json_decode($result,true);

 

 

    echo $json_obj['conversion_result'];

    }

 

 

?>
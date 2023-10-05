<?php
if(isset($_POST["submit"])){

    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    $ch = curl_init();
    $url="https://www.googleapis.com/customsearch/v1?key=AIzaSyDzdZUUmTuzA9UE07L6b3biIZ23xKnzPjg&cx=47d751cd829d847d7&q=images";
    
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_URL, $url);

    $result = curl_exec($ch);
    $json_obj = json_decode($result,true);

    echo var_dump($json_obj);
}
?>
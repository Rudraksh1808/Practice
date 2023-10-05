<?php
if (isset($_POST["submit"])) {
    // Database connection credentials
    $servername = "localhost";
    $username = "root";
    $password = "Rudraksh3553@";
    $dbname = "rudraksh";
}

// Get form data
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



    // Create a database connection
    $conn =  mysqli_connect('localhost', 'root', 'Rudraksh3553@', 'rudraksh');


    
    // Check the connection
    if (!$conn) {
        die('Connection failed: ' .mysqli_connect_error());
    }

    else{


    // Insert data into the database
    $sql = "INSERT INTO biodata(email, first_name, last_name, password, gender) VALUES ('$email', '$firstname', '$lastname', '$password', '$gender')";


    
    if (mysqli_query($conn,$sql)) {
        echo 'Form submitted successfully! Data stored in the database.';
    } 
    mysqli_close($conn);
    }
?>




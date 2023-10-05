<?php
$con = mysqli_connect("localhost", "root", "Rudraksh3553@", "dataset");

if (!$con) {
    echo "DB not Connected...";
} else {
    $result = mysqli_query($con, "SELECT * FROM weather1");

    if (mysqli_num_rows($result) > 0) {
        $weatherData = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $weatherData[] = $row;
        }

        // Convert the PHP array to JSON format
        $jsonWeatherData = json_encode($weatherData);

        var_dump(json_decode($jsonWeatherData));

        // Send the JSON response with the appropriate content type header
        header('Content-Type: application/json');
        echo $jsonWeatherData;
    } else {
        echo "No records found.";
    }

    mysqli_close($con);
}
?>

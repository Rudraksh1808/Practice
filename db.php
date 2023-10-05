<?php
$con = mysqli_connect("localhost", "root", "Rudraksh3553@", "rudraksh");

if (!$con) {
    echo "DB not connected...";
} else {
    $result = mysqli_query($con, "SELECT * FROM Employee");

    if (!$result) {
        echo "Error: " . mysqli_error($con);
    } else {
        $employeeData = array(); 

        while ($row = mysqli_fetch_assoc($result)) {
            $employeeData[] = $row; 
        }


        foreach ($employeeData as $employee) {
            echo "Name: " . $employee['Employee_id'] . "<br>";
            echo "Age: " . $employee['Employee_name'] . "<br>";
        
        }
    }

    mysqli_close($con);
}
?>

<?php
$con = mysqli_connect("localhost", "root", "Rudraksh3553@", "dataset");

if (!$con) {
    echo "DB not Connected...";
} else {
    $result = mysqli_query($con, "SELECT * FROM weather1");

    if (mysqli_num_rows($result) > 0) {
        $xml = new DOMDocument("1.0");
        $xml->formatOutput = true;

        $employees = $xml->createElement("weather1");
        $xml->appendChild($employees);

        while ($row = mysqli_fetch_array($result)) {
            $employee = $xml->createElement("weather1");
            $employees->appendChild($employee);

            $uid = $xml->createElement("siteid", $row['siteid']);
            $employee->appendChild($uid);

            $uname = $xml->createElement("data", $row['data']);
            $employee->appendChild($uname);

            $dob = $xml->createElement("param", $row['param']);
            $employee->appendChild($dob);
        }

        echo "<xmp>" . $xml->saveXML() . "</xmp>";

        // Save the XML to a file if needed
        $xml->save("report.xml");
    } else {
        echo "No records found.";
    }

    mysqli_close($con);
}
?>

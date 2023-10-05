<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "<h1>";
    echo "Its 18th September 2023"; 
    print "</h1>";
    print "<hr>";
    print "<br>";
    echo "Today we are going to learn Condiitional Statements";
    print "<br>";

    $d=date("D");
    if($d=="Mon") /* It takes only 3 Initial letter of day*/
    echo "Have a nice Weekend";
    else
    echo "Have a nice day";
    print "<hr>";
    $today = date("l");
    echo "Today is " . $today;    
    print "<hr>";

    $daysofweek = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
    foreach($daysofweek as $day){
        echo $day . "<br>";
    }
    print "<hr>";

    $dayOfWeek = date("D");

    switch ($dayOfWeek) {
        case "Mon":
            echo "First day of week is Monday";
            break;
        case "Tue":
            echo "Second day of week is Tuesday";
            break;
        case "Wed":
            echo "Third day of week is Wednesday";
            break;
        case "Thu":
            echo "Fourth day of week is Thursday";
            break;
        case "Fri":
            echo "Fifth day of week is Friday";
            break;
        case "Sat":
            echo "Sixth day of week is Saturday";
            break;
        case "Sun":
            echo "Last day of week is Sunday";
            break;
        default:
            echo "Unable to determine the day of the week.";
            break;
    }
    
    ?>
</body>
</html>
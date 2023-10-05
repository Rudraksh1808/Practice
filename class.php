<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Person{
        private $firstname = "Rudraksh";
        private $lastname = "Mathuria";

        function getFirstname(){

            return $this->firstname;
        }
        function getLastname(){
            return $this->lastname;
        }
    }

    $obj = new Person;
    echo "<p>First name is " .$obj->getFirstname() ."</p>";
    echo "<p>Last name is " .$obj->getLastname() ."</p>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit{
        public $name = "Apple";
        public $color = "Red";
        public function fruit_name(){
            return $this->name;
        }
        public function fruit_color(){
            return $this->color;
        }
        public function intro(){
            echo "The fruit is {$this->name} and it is {$this->color} in color. \n";
            print "<br>";
        }
    }
    
    class Apple extends Fruit{
        public function message(){
            echo "I am a healty fruit";
        }
    }

    $Apple = new Apple();
        $Apple->intro();
        $Apple->message();
    ?>
</body>
</html>
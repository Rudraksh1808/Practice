<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class HelloWorld{
        public $helloWorld;
        public function _constructor($string = 'Hello World'){
            $this->helloWorld = $string;
        }

        public function sayHello(){
            return $this->helloWorld;
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Test{
        private $foo;
        public function constructor($foo){
            $this->foo = $foo;
        }
        private function bar(){
            echo 'Accessed the private method';
        }
        public function baz(Test $other){
            $other->foo = 'hello';
            var_dump($other->foo);
            $other->bar();
        } 
    }    
    $test = new Test('test');
    $test->baz(new test('other'));
    ?>
</body>
</html>
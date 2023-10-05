<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Myclass{
        public function MyPublic(){}
        protected function MyProtected(){}
        private function Myprivate(){}

        function Foo(){
            $this->MyPublic();
            $this->MyProtected();
            $this->Myprivate();
        }
    }
    class Myclass2 extends Myclass{
        function Foo2(){
            $this->MyPublic();
            $this->MyProtected();
            $this->Myprivate();
        }
    }

    $myclass2 = new Myclass2;
    $myclass2->MyPublic();
    //$myclass->MyProtected();
    //$myclass->Myprivate();
    $myclass2->Foo2();
    ?>
</body>
</html>
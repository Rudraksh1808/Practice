<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo (new DateTime())->format('d/M/Y');

    class Foo
{
    public $bar = 'property';

    public function bar() {
        return 'method';
    }
}

$obj = new Foo;
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
    ?>
</body>
</html>
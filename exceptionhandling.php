<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try {
        throw new Exception("A terrible error has occurred. ", 42);
    } catch (Exception $e) {
        echo "Exception " . $e->getCode() . ": " . $e->getMessage() . "<br>" . $e->getFile() . " on line " . $e->getLine() . "<br>";
    }

    class MyException extends Exception {
        function __toString() {
            return "<table border=\"1\">
<tr>
<td><strong>Exception " . $this->getCode() .
"</strong>: " . $this->getMessage() . "<br>" . "in " . $this->getFile() . " on line " . $this->getLine() . "</td></tr></table><br>";
        }
    }
    ?>
</body>
</html>

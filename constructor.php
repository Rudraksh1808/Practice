<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class vehicle{
        private $strDescription;
        function getDescription(){
            return $this->getDescription();
        }
        function setDescription($strDescription){
            $this->strDescription = $strDescription;
        }

        function construct($strDescription){
            $this->strDescription = $strDescription;
        }
    }
    ?>
</body>
</html>
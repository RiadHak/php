<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variables.php</h1>
    <?php
	    require 'fruit.php';
        foreach($fruits as $item){
            echo "$item <br>";
        }
    ?>

</body>
</html>
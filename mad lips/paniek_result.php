<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class='parent_body'>
        <h2>Er Heerst Paniek...</h2>

        <ul>
            <?php 
                $vraag_lijst = ['v1','v2','v3','v4','v5','v6','v7'];
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    foreach($vraag_lijst as $v){
                        echo "<li>{$_POST[$v]}</li>";
                    }
                }
            ?>
        </ul>


    </div>
</body>
</html>


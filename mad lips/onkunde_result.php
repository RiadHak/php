<div>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Mad Libs</h1>
    <div class="parent_body">
        <div class=parent_head> <a href="paniek.php"><h3>Er Heerst Paniek...</h3></a> <a href="onkunde.php"><h3>Onkunde</h3></a> </div>
        
        <div class="content">
            <h2>Onkunde</h2>
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
    </div>
    <footer class="parent_footer2"><h3>Gemaakt door Riad</h3></footer>



</body>
</html>



</div>  
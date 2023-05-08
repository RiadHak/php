<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/sty.css" rel="stylesheet"/>
</head>
<body>
<header>
    <?php 
        include "db_connection.php";
        $sql ='SELECT * FROM characters ORDER BY id DESC LIMIT 1';
        $result = $mysqli->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            echo '<h1>Alle '.$row['id'].' characters uit de database</h1>';
        }
    ?>
    
</header>

<div id="container">
<?php 

    include "db_connection.php";
    $sql = "SELECT * FROM characters";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $element = '

            
                <a class="item" href="ch.php?name='.$row["name"].'">
                    <div class="left">
                        <img class="avatar" src="resources/images/'.$row["avatar"].'">
                    </div>
                    <div class="right">'.
                    '<h2>'.$row["name"].'</h2>
                        <div class="stats">
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-heart"></i></span>'.$row["health"].'</li>
                                <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>'.$row["attack"].'</li>
                                <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>'.$row["defense"].'</li>
                            </ul>
                        </div>
                    </div>
                    <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
                </a> 
            ';
            echo $element;
 

        }}
?> 
</div>
<footer>&copy; [M.Riad Alhakim] 2023</footer>
</body>
</html>





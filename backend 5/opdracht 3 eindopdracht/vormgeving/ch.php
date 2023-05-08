<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/sty.css" rel="stylesheet" >
 
</head>
<body>
<?php 
include "db_connection.php";
$char = $_GET["name"];
$sql = "SELECT * FROM characters WHERE name = '$char'";
$result = $mysqli->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
    $element = '<header><h1>'.$row["name"].'</h1>
                <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
                <div id="container">
                <div class="detail">
                    <div class="left">
                        <img class="avatar" src="resources/images/'.$row["avatar"].'">
                        <div class="stats" style="background-color: '.$row["color"].'">
                            <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span>'.$row["health"].'</li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>'.$row["attack"].'</li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>'.$row["defense"].'</li>
                            </ul>
                            <ul class="gear">
                                <li><b>Weapon</b>:'.$row["weapon"].'</li>
                                <li><b>Armor</b>:'.$row["armor"].'</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <p>
                        '.$row["bio"].'
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </div>
                </div>';
                echo $element;
}}



?>

<footer>&copy; [M.Riad Alhakim] 2023</footer>
</body>
</html>
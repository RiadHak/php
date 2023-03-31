<?php 
    $vraag_lijst = ['v1','v2','v3','v4','v5','v6','v7'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        foreach($vraag_lijst as $v){
            echo $_POST[$v]."<br>";
        }
    }
?>
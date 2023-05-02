<?php 
    include "pages/db_connection.php";
    $info= [];

    $sql = "SELECT name,description,image FROM onderwerpen";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        if($row['image'] =="images/valo.jpg"){
            array_push($info,$row['name'], $row['description'],$row['image']);
        }
      }
    }
    else{
      echo "0 results";
    }
?>
<h1>
    <?php echo "Deze Headline is uit een data base gehaaald: ".$info[0]; ?>

</h1>
<img src="<?php echo $info[2]; ?>" class="content_image" alt="">
<p><?php echo "deze data zijn uit een Database gehaald: <br>".$info[1] ?></p>
<!-- jouw HTML met de inhoud over onderwerp 1 komt hier... -->
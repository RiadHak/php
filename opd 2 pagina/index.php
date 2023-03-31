<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='form_body'>
        <form method="POST" action="index.php">
            <label>Name</label><br>
            <input type="text" name="name" id="name"><br>
            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if($_POST["name"] == ""){
                        echo"<p class='error'>*Name field is rquired</p>";
                    }
                }
            ?>
            <label>E-mail</label><br>
            <input type="text" name="email" id="email"><br>
            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if($_POST["email"] == ""){
                        echo"<p class='error'>*E-mail field is rquired</p>";
                    }
                }
            ?>
            <br>
            <input type="submit">
        </form>
        <h2>de ingevullde gegevens zijn:</h2><br>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo "Welcome: ".$_POST["name"];  
                echo "<br>";
                echo 'Your email address is: '.$_POST["email"]; 
            }

        ?>
        
  
        
    </div>
</body>
</html>
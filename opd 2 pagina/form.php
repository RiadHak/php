
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
        <form method="POST" action="form.php">
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="validate" required><br>
            <label>E-mail</label><br>
            <input type="text" name="email" id="email" class="validate" required><br>
            <br>
            <input type="submit">
        </form>
        <h2>de ingevullde gegevens zijn:</h2><br>
        
        Welcome <?php print  $_POST["name"]; ?> <br>
        Your email address is: <?php print  $_POST["email"]; ?>
        
    </div>
    
</body>
</html>






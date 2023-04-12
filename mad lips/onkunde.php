<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mad Libs</h1>
    <div class="parent_body">
        <div class=parent_head> <a href="paniek.php"><h3>Er Heerst Paniek...</h3></a> <a href="onkunde.php"><h3>Onkunde</h3></a> </div>
        <h2>Onkunde</h2>
        <form class="form" method="POST" action="onkunde_result.php">
            <label>Wat zou je graag willen kunnen?</label> <input type="text" name="v1">
            <label>Met welke persoon kan je goed opschieten?</label> <input type="text" name="v2">
            <label>Wat is je favorite getal?</label> <input type="text" name="v3">
            <label>Wat is je favorite kleur?</label> <input type="text" name="v4">
            <label>Wat is je favorite spel?</label> <input type="text" name="v5" >
            <label>Wat is je favorite sport?</label> <input type="text" name="v6" >
            <label>Wat is je favorite mobiel?</label> <input type="text" name="v7" >
            <label></label><input type="submit">
        </form>
        <div class="parent_footer"><h3>Gemaakt door Riad</h3></div>
    </div>
    <form action="onkunde.php"></form>
    <form action="paniek.php"></form>
</body>
</html>
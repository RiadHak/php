<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php include "C:/xampp/htdocs/php projecten/backend 3/opdracht 4/J2F1BELP3L2_includes/includes/header.php" ?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php
  if(isset($_GET['name'])){
    $page = $_GET['name'] ;
    include "pages/$page.php";
  }
  else{
    echo "kies een van de onderwerpen in de navigationbar";
  }
    
  ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->


</body>
</html>
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
    if (isset($_GET['subject'])) {
      include "pages/onderwerp1.php";

    }
      // if (isset($_GET['name'])) {
      //   $name = $_GET['name'];
      //   switch ($name) {
      //     case 'python':
      //       include 'pages/onderwerp1.php';
      //       break;
      //     case 'islam':
      //       include 'pages/islam.php';
      //       break;
      //     case 'marokko':
      //       include 'pages/marokko.php';
      //       break;
      //     case 'kickboxing':
      //       include 'pages/kickboxing.php';
      //       break;
      //   }
      // } else {
      //   echo '<div id="indexDiv">';
      //   echo '<p id="index">Klik op een van de onderwerpen hierboven</p>';
      //   echo '</div>';
      // }
  ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->


</body>
</html>
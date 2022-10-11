<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akèy</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="images/M1.png">
</head>
<body>
  <!-- partial:index.partial.html -->
<script>
  //funtion to open menu
  function openSideMenu(){
    document.getElementById("side-nav").style.width = "30%";
  }
  //funtion to close menu
  function closeSideMenu(){
    document.getElementById("side-nav").style.width = "0";
  }
</script>
<div class="navbar">
  <div class="logo">
    <img src="images/M1.png" width="65" height="65">
  </div>
  <div id="nav-icon">
     <a href="#" class="open-btn" onClick='openSideMenu()'>&#9776;</a>
  </div>
  <nav id="nav-menu">
    <a href="index.php">Akèy</a>
    <a href="#">Apwopo</a>
    <a href="pages/sevis.php">Sèvis yo</a>
    <a href="pages/sign-in.php">Konekte</a>
  </nav>
  <div id="side-nav">
    <a href="#" class="close-btn" onClick="closeSideMenu()">&#9776;</a>
    <a href="index.php">Akèy</a>
    <a href="#">Apwopo</a>
    <a href="pages/sevis.php">Sèvis yo</a>
    <a href="pages/sign-in.php">Konekte</a>
  </div>
</div>
<!-- partial -->
  
    <?php include ('pages/home.php')?>
</body>
</html>
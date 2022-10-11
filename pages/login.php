<?php 
include ('serverlogin.php') ;
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css"> -->
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
    <img src="../images/M1.png" width="65" height="65">
  </div>
  <div id="nav-icon">
     <a href="#" class="open-btn" onClick='openSideMenu()'>&#9776;</a>
  </div>
  <nav id="nav-menu">
    <a href="../index.php">Akèy</a>
    <a href="#">Apwopo</a>
    <a href="sevis.php">Sèvis yo</a>
    <a href="sign-in.php">Konekte</a>
  </nav>
  <div id="side-nav">
    <a href="#" class="close-btn" onClick="closeSideMenu()">&#9776;</a>
    <a href="../index.php">Akèy</a>
    <a href="#">Apwopo</a>
    <a href="sevis.php">Sèvis yo</a>
    <a href="sign-in.php">Konekte</a>
  </div>
</div>
<!-- partial -->
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="pass_word">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<!-- <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p> -->
  </form>

  <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 1);
    }
    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
  </script>
</body>


</html>

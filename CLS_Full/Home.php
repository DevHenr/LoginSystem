<?php
include("auth_session.php");
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="Viewport" content="Width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





  <script type="text/javascript"
  src="Confirm.js"></script>
  
  



<title>Etec Albert Einstein</title>
<link rel="stylesheet" href="Test.css">
</head>


<body class="Home">

    <header>
        <div class="navbar">
		
		
		
  <a class="active" href="Home.php"><i class="fa fa-fw fa-home"></i>Home</a> 
     <a href="Sobre.php"><i class="fa fa-info-circle"></i>Sobre</a>
  <div class="dropdown">
    <button class="dropbtn">TCC  
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Tema.php">Tema TCC</a>
	
      <a href="Membros.php">Membros</a>
	  
    </div>
  </div> 
   <a href="Contatos.php"><i class="fa fa-fw fa-envelope"></i>Contatos</a>
   <a href="Logout.php" id="logout">Sair</a>
   

   
   

</div>
<div class="CLS">
        <h1 class="site-title">Conversor de Língua de Sinais </h1>
		</div>
        <h2 class="site-subtitle">-- CLS --</h2>
      </header>
	  
	  
	  
	 
	  <img src="LOGO.png" alt="Logo CLS" class="Logo">
	 
	 
	 
	 
	 <div class="Logout">
        <p class="Log">Bem Vindo, <?php echo $_SESSION['username']; ?>!</p>
        </div>
	 
	 
</body>
<html>
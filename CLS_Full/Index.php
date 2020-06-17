<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<meta name="Viewport" content="Width=device-width, initial-scale=1.0"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body class="Login">
<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
        
            header("Location: Home.php");
        } else {
            echo "<div class='form_not'>
                  <h3>Senha/Usuário incorretos.</h3><br/>
                  <p class='link'>Click aqui para fazer <a href='Index.php'>Login</a> novamente.</p>
                  </div>";
        }
    } else {
?>

<h1 class="site-title">-- CLS --</h1>

    <form class="form" method="post" name="login">
	<img src="LOGO.png" alt="Logo CLS" class="Logo">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Nome de Usuário" autofocus="true" required/>
        <input  type="password" class="login-input" name="password" placeholder="Senha" minlength="6" required/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Não tem conta? <a href="Cadastro.php">Cadastre-se agora</a></p>
  </form>
  <iframe class="video"  src="https://www.youtube-nocookie.com/embed/KEgRxx7D9Bc" 
  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
<?php
    }
?>
</body>
</html>
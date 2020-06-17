<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<meta name="Viewport" content="Width=device-width, initial-scale=1.0"/>
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body class="Login">
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form_not'>
                  <h3>Cadastro realizado com sucesso.</h3><br/>
                  <p class='link'>Click aqui para fazer <a href='Index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form_not'>
                  <h3>Há campos não preenchidos.</h3><br/>
                  <p class='link'>Click aqui para fazer <a href='Cadastro.php'>Cadastro</a> novamente.</p>
                  </div>";
        }
    } else {
?>

<h1 class="site-title">-- CLS --</h1>
    <form class="form" action="" method="post">
        <h1 class="login-title">Cadastro</h1>
		<img src="LOGO.png" alt="Logo CLS" class="Logo">
        <input type="text" class="login-input" name="username" placeholder="Nome de Usuário" autofocus="true" required />
        <input type="email" class="login-input" name="email" placeholder="Email" required >
        <input type="password" class="login-input" name="password" placeholder="Senha" minlength="6" required >
        <input type="submit" name="submit" value="Cadastrar" class="login-button">
        <p class="link">Já possui conta? <a href="Index.php">Faça Login</a></p>
    </form>
	
	<iframe class="video"  src="https://www.youtube-nocookie.com/embed/KEgRxx7D9Bc" 
  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php
    }
?>
</body>
</html>
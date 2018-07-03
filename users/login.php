<?php
		session_start();

		if(isset($_SESSION['username'])){
				header('location: dashboard.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	
  <title>Banding kampus</title>
</head>
<body>

      <a href="../">arrow_back</a>
      <form action="process/loginProcess.php" method="post">
  
            <h4>Masuk Akun</h4>
 
            <input name="username" type="text">
            <label>Username</label>
 
            <input name="password" type="password">
            <label>Password</label> <br><br>
            <button type="submit" value="Login">Login</button>
            <p>Belum punya akun? <a href="register.php">Daftar Disini</a></p>
			<p><a href="lupaPassword.php">Lupa Password</a></p>
      </form>

</body>
</html>

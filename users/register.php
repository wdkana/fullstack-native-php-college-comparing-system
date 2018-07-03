<?php
		session_start();

		if(isset($_SESSION['username'])){
				header('location: dashboard.php');
		}
?>
<html>
<head>
  <title>Banding kampus</title>
</head>
<body>

      <a href="../">arrow_back</a>
      <form class="login-form" action="process/registerProcess.php" method="post">
            <h4>Register</h4>
 
            <input name="username" type="text">
            <label>Username</label>
 
            <input name="email" type="email">
            <label>Email</label>
 
            <input id="password" name="password" type="password">
            <label>Password</label>
 
            <input name="repassword" type="password">
            <label>Ulangi Password</label>
 
            <button type="submit" value="Register">Register</button>
   
            <p>Sudah Punya Akun? <a href="login.php">Login Disini</a></p>
      </form>
    </div>
  </div>
</body>
</html>

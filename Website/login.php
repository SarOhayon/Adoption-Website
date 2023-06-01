<!DOCTYPE html>
<html>
<style>
      nav {
         position: fixed;
         top: 60px;
         left: 0;
         width: 25%;
         height: calc(100% - 50px);
         background-color: white;
         background-color: #5FCCC3;
      }

      .nav-link {
         display: block;
         padding: 20px;
         margin-bottom: 45px;
         text-decoration: none;
         color: #0c69f4;
      }

      .nav-link:hover {
         background-color: white;
         color: #0c69f4;
      }
      :root {
      --primary-color: #0c69f4;
      --secondary-color: #5FCCC3;
    }
    body {
      color: var(--primary-color);
      font-family: Arial, sans-serif;
      background-color: var(--secondary-color);
    }
    .content {
      margin-left: 25%;
      padding: 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .content h2 {
      color: var(--primary-color);
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    form {
      margin-top: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    form div {
      margin-bottom: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      width: 100%;
    }
    label {
      font-weight: bold;
      margin-bottom: 0.5rem;
      color: var(--primary-color);
      font-size: 1.2rem;
    }
    input[type="text"],
    input[type="password"] {
      padding: 0.5rem;
      border-radius: 0.5rem;
      border: none;
      background-color: white;
      width: 100%;
      font-size: 1rem;
      margin-top: 0.25rem;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
      outline: none;
      box-shadow: 0 0 0 3px var(--primary-color)33;
    }
    small {
      color: #777;
      font-size: 0.8rem;
      margin-top: 0.25rem;
    }
    button[type="submit"] {
      background-color: var(--primary-color);
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      border: none;
      font-size: 1rem;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      margin-top: 1rem;
      transition

   </style>
</head>
  <body>
  <nav>
    <a class="nav-link" href="home.php" target=_self>Home</a>
    <a class="nav-link" href="Findadogcat.php" target=_self>Find a dog/cat</a>
    <a class="nav-link" href="DogCare.php" target=_self>Dog Care</a>
    <a class="nav-link" href="CatCare.php" target=_self>Cat Care</a>
    <a class="nav-link" href="HaveAPetToGiveAway.php" target=_self>Have a Pet to Give Away</a>
    <a class="nav-link" href="ContactUs.php" target=_self>Contact Us</a>
   </nav>
	<div class="content">

   <h2>Login</h2>
	<form method="post" action="login.php">
		<label>Username:</label>
		<input type="text" name="username"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>

	<?php
session_start();?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$users_file = fopen("users.txt", "r");

	while (($line = fgets($users_file)) !== false) {

		list($file_username, $file_password) = explode(":", $line);

		if ($username == trim($file_username)) {

			if ($password == trim($file_password)) {
				$_SESSION["logged_in"] = true;
				$_SESSION["username"] = $username;
				header("Location: home.php");
				exit;
			} else {
				echo "Invalid password!";
				exit;
			}
		}
	}

	echo "Invalid username!";
	exit;
}
?>



</body>
<?php include 'HeaderFooter.php';?>
</html>

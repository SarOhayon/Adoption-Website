<!DOCTYPE html>
<html>
<head>
   <title>Eye's Adoption Center</title>
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
   <div class= "content">
   <?php session_start();?>
   <?php
function validateUsernameAndPassword($username, $password) {
    if (!ctype_alnum($username)) {
        return "Username can only contain letters and digits.";
    }
    if (!ctype_alnum($password)) {
        return "Password can only contain letters and digits.";
    }
    if (strlen($password) < 4) {
        return "Password must be at least 4 characters long.";
    }
    if (!preg_match('/[a-zA-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
        return "Password must have at least one letter and one digit.";
    }
    return "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $validationMsg = validateUsernameAndPassword($username, $password);
    
    if (!empty($validationMsg)) {
        echo "<p>$validationMsg</p>";
    } else {
        $loginFile = "logins.txt";
        if (file_exists($loginFile)) {
            $loginData = file_get_contents($loginFile);
            $loginArray = explode("\n", $loginData);
            foreach ($loginArray as $loginLine) {
                $loginParts = explode(" ", $loginLine);
                if ($loginParts[0] == $username) {
                    echo "<p>Username already exists. Please choose a different username.</p>";
                    exit();
                }
            }
        }
        $newLogin = "$username $password\n";
        file_put_contents($loginFile, $newLogin, FILE_APPEND | LOCK_EX);
        echo "<p>Account successfully created. You can now login whenever you're ready.</p>";
    }
}
?>

    <h2>Create Account</h2>

    <form method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password"><br><br>

      <input type="submit" value="Create Account">
    </form>
    </div>
    <?php include 'HeaderFooter.php';?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Eye's Adoption Center</title> 
  <style>
    body {
      color: #0c69f4;
      font-family: Arial, sans-serif;
      background-color: #5FCCC3;

    }

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

    .content {
      margin-left: 25%;
      padding: 50px;
    }

    .content h2 {
      color: #0c69f4;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 30px;

    }

    fieldset {
      border: none;
      padding: 0;
    }

    legend {
      font-size: 1.5em;
      font-weight: bold;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input,
    select {
      font-size: 1em;
      padding: 5px;
      border-radius: 5px;
      border: none;
      margin-bottom: 10px;
    }

    select {
      width: 100%;
    }

    form {
      background-color: #0c69f4;
      color: white;
      border-radius: 5px;
      padding: 30px;
      box-shadow: 0px 0px 10px #ccc;
      margin: auto;
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 10px;
    }

    input[type="text"],
    input[type="email"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type="submit"],
    input[type="reset"] {
      background-color: #4CAF50;
      border: none;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 3px;
      margin-top: 10px;
    }

    input[type="reset"] {
      background-color: #f44336;
      margin-left: 10px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #3e8e41;
    }

  </style>
</head>

<div content="navigation">
<nav>
    <a class="nav-link" href="home.php" target=_self>Home</a>
    <a class="nav-link" href="Findadogcat.php" target=_self>Find a dog/cat</a>
    <a class="nav-link" href="DogCare.php" target=_self>Dog Care</a>
    <a class="nav-link" href="CatCare.php" target=_self>Cat Care</a>
    <a class="nav-link" href="HaveAPetToGiveAway.php" target=_self>Have a Pet to Give Away</a>
    <a class="nav-link" href="ContactUs.php" target=_self>Contact Us</a>
   </nav>

<script>
  function updateTime() {
    const now = new Date();
    const time = now.toLocaleTimeString();
    const date = now.toLocaleDateString();
    document.getElementById('current-time').textContent = `${date} ${time}`;
  }
  setInterval(updateTime, 1000);
</script>
</div>
  <div content="form">
  <?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}
$username = $_SESSION['username'];
?>

    <form id="my-form" onsubmit="return validateForm()" method="POST">
      <h1>Animal's Information</h1>
      <label>Cat or dog?</label>
      <input type="radio" name="animal" value="cat">Cat
      <input type="radio" name="animal" value="dog">Dog
      <br><br>
      <label>Breed of cat or dog?</label>
      <input type="radio" name="breed" value="Purebred">Purebred
      <input type="radio" name="breed" value="Domestic">Domestic
      <br>
      <label>Age of animal:</label>
      <select name="age">
        <option value="0-2">0-2</option>
        <option value="3-5">3-5</option>
        <option value="6+">6+</option>
      </select>
      <br>
      <label>Animal gender:</label>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female
      <br><br>
      <label>Gets along with other dogs:</label>
      <input type="radio" name="compatible-dogs" value="yes">Yes
      <input type="radio" name="compatible-dogs" value="no">No
      <br><br>
      <label>Gets along with other cats:</label>
      <input type="radio" name="compatible-cats" value="yes">Yes
      <input type="radio" name="compatible-cats" value="no">No
      <br><br>
      <label>Suitable for a family with small children:</label>
      <input type="radio" name="compatible-children" value="yes">Yes
      <input type="radio" name="compatible-children" value="no">No
      <br><br>
      <label>Reason for rehoming:</label>
      <textarea name="comments"></textarea>
      <br>
      <label>Pet's name:</label>
      <input type="text" id="first-name" name="petName">
      <br>
      <label>Current owner's name:</label>
      <input type="text" id="first-name" name="ownerName">
      <br>
      <label>Current owner's email:</label>
      <input type="email" id="last-name" name="ownerEmail">
      <br>
      <input type="submit" value="Submit">
      <input type="reset" value="Clear">
    </form>

    <script>
      function validateForm() {
        var firstName = document.getElementById("first-name").value;
        var lastName = document.getElementById("last-name").value;

        if (firstName == "" || lastName == "") {
          alert("Please fill in all fields");
          return false;
        }
      }
    </script>
  </div>
  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = 'avaliblePets.txt';
    $existing_data = file_get_contents($filename);
    $data_lines = explode("\n", $existing_data);
    $last_line = trim(end($data_lines));
    $last_id = isset($_SESSION['last_id']) ? $_SESSION['last_id'] : 0;
    $new_id = $last_id + 1;
    $name = $_POST['petName'];
    $animalType = $_POST['animal'];
    $breed = $_POST['breed'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $likedog = isset($_POST['compatible-dogs']) ? "yes" : "no";
    $likecat = isset($_POST['compatible-cats']) ? "yes" : "no";
    $likekids = isset($_POST['compatible-children']) ? "yes" : "no";
    $data = "$new_id:$username:$animalType:$breed:$age:$gender:$likedog:$likecat:$likekids:$name\n";
    
    file_put_contents($filename, $data, FILE_APPEND);
    
    $_SESSION['last_id'] = $new_id;
    
    exit();
  }?>

</body>
<?php include 'HeaderFooter.php';?>

</html>
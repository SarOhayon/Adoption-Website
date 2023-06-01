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

<body>


  <div content="Navigation">
  <nav>
    <a class="nav-link" href="home.php" target=_self>Home</a>
    <a class="nav-link" href="Findadogcat.php" target=_self>Find a dog/cat</a>
    <a class="nav-link" href="DogCare.php" target=_self>Dog Care</a>
    <a class="nav-link" href="CatCare.php" target=_self>Cat Care</a>
    <a class="nav-link" href="HaveAPetToGiveAway.php" target=_self>Have a Pet to Give Away</a>
    <a class="nav-link" href="ContactUs.php" target=_self>Contact Us</a>
   </nav>
  </div>

  <div class="content">
  <?php session_start();?>
  <form id="my-form" onsubmit="return validateForm()" method="POST">
    <fieldset>
      <legend>Adoption Form</legend>
      <label for="first-name">Candidate's First Name</label>
      <input type="text" id="first-name" name="first-name">
      <br><br>
      <label for="last-name">Candidate's Family Name</label>
      <input type="text" id="last-name" name="last-name">
      <br><br>

      <label>What type of animal are you interested in?</label><br>
      <select id="animal" name="animal">
        <option value="doesnt-matter">Doesn't matter</option>
        <option value="cat">Cat</option>
        <option value="dog">Dog</option>
      </select>
      <br><br>
      <label>What breed type are you interested in?</label><br>
      <select id="breed" name="breed">
        <option value="doesnt-matter">Doesn't matter</option>
        <option value="domestic">Domestic</option>
        <option value="purebred">Purebred</option>
      </select>
      <br><br>
      <label>Age:</label><br>
      <select id="age" name="age">
        <option value="Doesn't Matter">Doesn't matter</option>
        <option value="0-2">0-2</option>
        <option value="3-5">3-5 months</option>
        <option value="6+">6+</option>
      </select>
      <br><br>
      <label>Gender:</label><br>
      <select id="gender" name="gender">
        <option value="Doesn't Matter">Doesn't matter</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
      <br><br>
      <label>Needs to get along with:</label><br>
      <input type="checkbox" id="compatible-dogs" name="compatible-dogs" value="compatible-dogs">
      <label for="compatible-dogs">Other dogs</label><br>
      <input type="checkbox" id="compatible-cats" name="compatible-cats" value="compatible-cats">
      <label for="compatible-cats">Other cats</label><br>
      <input type="checkbox" id="compatible-children" name="compatible-children" value="compatible-children">
      <label for="compatible-children">Small children</label><br><br>
    </fieldset>
    <input type="submit" value="Submit" onclick="submitForm()">
    <input type="reset" value="Reset">
  </form>

  <script>
function submitForm() {
  window.location.replace("option.php");
}
</script>

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
  $animal = $_POST['animal'];
  $breed = $_POST['breed'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $compatible_dogs = isset($_POST['compatible-dogs']) ? $_POST['compatible-dogs'] : '';
  $compatible_cats = isset($_POST['compatible-cats']) ? $_POST['compatible-cats'] : '';
  $compatible_children = isset($_POST['compatible-children']) ? $_POST['compatible-children'] : '';
  $filename = 'lookingPets.txt';
  $data = "$animal,$breed,$age,$gender,$compatible_dogs,$compatible_cats,$compatible_children\n";
  file_put_contents($filename, $data, FILE_APPEND);
  exit;
}
?>
<?php include 'HeaderFooter.php';?>
</body>
</html>
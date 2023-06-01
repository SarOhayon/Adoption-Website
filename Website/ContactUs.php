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
  <form onsubmit="return validateForm()">
      <h1>Contact Us</h1>
      <p>Our Information: <br>Sarah Ohayon_40209765<br>sarahpanda41@gmail.com</p>
         <label for="name">Name:</label>
         <input type="text" id="name" name="name"><br><br>
         <label for="email">Email:</label>
         <input type="email" id="email" name="email"><br><br>
         <label for="message">Message:</label>
         <textarea id="message" name="message" rows="10" cols="30"></textarea><br><br>
         <input type="submit" value="Submit">
      </form> 
     </div>
     
   </body>
   <?php include 'HeaderFooter.php';?>

</html>
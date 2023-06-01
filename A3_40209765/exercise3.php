<!DOCTYPE html>
<html>
<head>
  <title>Telephone Number Form</title>
  <script>
    function validatePhoneNumber() {
      var phoneNumber = document.getElementById("phone").value;
      var pattern = /^\d{3}-\d{3}-\d{4}$/;
      if (!pattern.test(phoneNumber)) {
        document.getElementById("error").innerHTML = "Please enter a valid phone number in the format ddd-ddd-dddd.";
        return false;
      }
      document.getElementById("error").innerHTML = "";
      return true;
    }
  </script>
</head>
<body>
  <h1>Telephone Number Form</h1>
  <form action="#" method="post" onsubmit="return validatePhoneNumber()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="phone">Telephone Number:</label>
    <input type="text" id="phone" name="phone" required><br>
    <span id="error" style="color:red"></span><br>
    <input type="submit" value="Submit">
  </form>

  <?php
$name = $_POST['name'];
$phone = $_POST['phone'];

if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $phone)) {
  die('Please enter a valid phone number in the format ddd-ddd-dddd.');
}
$file = fopen('phoneNumbers.txt', 'a');
fwrite($file, "$name,$phone\n");
fclose($file);
?>
</body>
</html>

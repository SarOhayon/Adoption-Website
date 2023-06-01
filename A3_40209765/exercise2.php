<?php
 date_default_timezone_set('EST');
$cookie_name = "num_of_visits";

if(isset($_COOKIE[$cookie_name])) {
  $num_of_visits = $_COOKIE[$cookie_name] + 1;

  setcookie($cookie_name, $num_of_visits, time() + (86400 * 30), "/"); 

  $last_visit = $_COOKIE["last_visit"];
  
  setcookie("last_visit", date("D M d H:i:s T Y"), time() + (86400 * 30), "/");

  echo "Hello, this is the " . $num_of_visits . " time that you are visiting my webpage.<br>";
  echo "Last time you visited my webpage on: " . $last_visit . "<br>";
} else {
  $num_of_visits = 1;
  setcookie($cookie_name, $num_of_visits, time() + (86400 * 30), "/");
  setcookie("last_visit", date("D M d H:i:s T Y"), time() + (86400 * 30), "/");

  echo "Welcome to my webpage! It is your first time that you are here.";
}
?>

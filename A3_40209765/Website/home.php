<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eye's Adoption Center</title>
  <style>
    body {
      color: #0c69f4;
      font-family: Arial, sans-serif;
      background-image: url("Cystoscope.jpg");
      background-size: cover;
      background-repeat: no-repeat;
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

    .privacy-disclaimer-popup {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
    }

    .privacy-disclaimer-content {
      background-color: #fff;
      padding: 20px;
      max-width: 500px;
      text-align: center;
    }

    .privacy-disclaimer-content h2 {
      margin-top: 0;
    }

    .privacy-disclaimer-content p {
      margin-bottom: 20px;
    }

    .privacy-disclaimer-close {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }

    .privacy-disclaimer-close:hover {
      background-color: #3E8E41;
    }
  </style>
</head>

<body>
  <?php session_start();?>
  <div content="navigaton">
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
    <h2>About Us</h2>
    <p>We are a non-profit organization dedicated to rescuing and finding forever homes for cats and dogs. Our goal is to provide a safe and loving environment for pets in need, until they are adopted into loving homes.</p>
  </div>

  <div id="privacy-disclaimer-popup" class="privacy-disclaimer-popup">
    <div class="privacy-disclaimer-content">
    <h2>Privacy Disclaimer</h2>
    <p>We take your privacy seriously. This website uses cookies to improve your browsing experience and to personalize the content and advertising we show you. We may also collect personal information from you if you choose to subscribe to our newsletter or contact us through our website.</p>
    <p>We will never sell or rent your personal information to third parties without your consent, unless required by law. However, we may share your information with trusted third-party service providers who assist us in operating our website or servicing you.</p>
    <p>By using our website, you consent to our use of cookies and collection of your personal information. If you do not agree with this policy, please do not use our website.</p>
    <a href="#" class="privacy-disclaimer-close">Close</a>
  </div>
</div>

<script>
var privacyDisclaimerPopup = document.getElementById("privacy-disclaimer-popup");
var privacyDisclaimerClose = document.getElementsByClassName("privacy-disclaimer-close")[0];

privacyDisclaimerPopup.style.display = "block";

privacyDisclaimerClose.onclick = function() {
  privacyDisclaimerPopup.style.display = "none";
}
</script>
<?php include 'HeaderFooter.php';?>
</body>
</html>
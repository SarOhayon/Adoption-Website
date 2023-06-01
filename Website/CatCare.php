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
         margin-left: 15%;
         padding: 20px;
      }

      .content h2 {
         color: #0c69f4;
      }

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
      <p>
         <main>
            <script>
               function updateTime() {
                   const now = new Date();
                   const time = now.toLocaleTimeString();
                   const date = now.toLocaleDateString();
                   document.getElementById('current-time').textContent = `${date} ${time}`;
               }
               setInterval(updateTime, 1000);
           </script>
 
       
 <div class="content">
 <?php session_start();?>
  <h1>How to Take Care of a Cat</h1>
  <ol>
    <li>
      <h2>Provide Proper Nutrition</h2>
      <p>Feed your cat a balanced diet with adequate amounts of protein, carbohydrates, and healthy fats. Provide
        them with fresh water at all times. Consider serving them both wet and dry food to ensure they get the
        hydration they need.</p>
    </li>
    <li>
      <h2>Provide a Safe and Comfortable Living Environment</h2>
      <p>Ensure your cat has a clean, dry, and comfortable place to sleep. Provide them with toys and other forms
        of stimulation to keep them entertained and prevent boredom. Make sure their living area is free of any
        hazards that could harm them.</p>
    </li>
    <li>
      <h2>Provide Scratching Posts and Litter Box</h2>
      <p>Cats have a natural instinct to scratch, so provide them with scratching posts to keep their claws
        healthy. Also, make sure to have a litter box available and keep it clean to encourage proper elimination
        habits.</p>
    </li>
    <li>
      <h2>Regular Grooming</h2>
      <p>Regular grooming is important to keep your cat's coat and skin healthy. Brush their fur regularly to
        remove loose hair and distribute natural oils. Give them baths when necessary.</p>
    </li>
    <li>
      <h2>Regular Vet Visits</h2>
      <p>Regular visits to the veterinarian are important to ensure your cat stays healthy. The vet can identify
        and treat any health issues, give them necessary vaccinations, and advise on any health-related concerns
        you may have.</p>
    </li>
  </ol>
  <p>For more information, visit <a href="https://www.aspca.org/pet-care/cat-care/General-cat-care">the ASPCA
      website</a>.</p>
</div>

   </main>
  </div>
  <?php include 'HeaderFooter.php';?>

</html>
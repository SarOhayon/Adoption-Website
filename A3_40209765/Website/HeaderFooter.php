<style>
   header {
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      height: 50px;
      background-color: white;
      color: #0c69f4;
      padding-right: 50px;
      box-sizing: border-box;
      z-index: 1;
   }
   header img {
      width: 50px;
      height: 50px;
      margin-right: auto;
      margin-left: 10px;
   }
   header h1 {
      text-align: center;
      margin: 0;
      flex-grow: 1;
   }
   header a {
      margin-left: 10px;
      margin-right: 10px;
   }
   header .dropdown {
      position: relative;
      display: inline-block;
   }
   header .dropdown-content {
      display: none;
      position: absolute;
      z-index: 1;
   }
   header .dropdown:hover .dropdown-content {
      display: block;
   }
   header .dropdown-content a {
      display: block;
      padding: 10px;
      text-decoration: none;
      color: black;
      text-align: center;
   }
   footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 50px;
      color: #0c69f4;
      text-align: center;
      background-color: white;
   }
</style>

<header>
    <a href="home.php">
        <img src="1e0c168a05a4f639f38a9fe98698aaeb.jpg.sb-abead061-hB5HVi" alt="Logo">
    </a>
    <h1>Eye's Adoption Center</h1>
    <span id="current-time"></span>
    <script>
        function updateTime() {
            const now = new Date();
            const time = now.toLocaleTimeString();
            const date = now.toLocaleDateString();
            document.getElementById('current-time').textContent = `${date} ${time}`;
        }
        setInterval(updateTime, 1000);
    </script>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
        echo '<div class="dropdown">';
        echo '<img src="user_icon.png" alt="User Icon">';
        echo '<div class="dropdown-content">';
        echo '<a href="logout.php">Logout</a>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<a href="login.php">Login</a>';
        echo '<a href="createAccount.php">Create an Account</a>';
    }
    ?>
</header>

	<footer>
		<p>&copy; 2023 Sarah Ohayon's Website 40209765. All rights reserved.</p>
	</footer>
	
</body>
</html>

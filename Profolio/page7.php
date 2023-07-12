<!DOCTYPE html>
<html lang="en-US">
   <head>
      <title>Contact</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
     <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
      <script src="path/to/fontawesome.js"></script>
      <script>
         function toggleNavbar() {
           var navbarMenu = document.getElementById("navbar-menu");
           navbarMenu.style.display = (navbarMenu.style.display === "block") ? "none" : "block";
         }

        function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
        }
      </script>
   </head>
   <body>
      <header>
         <div class="navbar">
            <div class="navbar-toggle" onclick="toggleNavbar()">
               <i class="fa fa-bars"></i>
            </div>
            <div class="navbar-menu" id="navbar-menu">
               <ul>
               <li><a href="index.html" >Home</a></li>
               <li><a href="page2.html" >Work Experience</a></li>
               <li><a href="page3.html" >Work Experience</a></li>
               <li><a href="page4.html" >Skills and Expertise </a></li>
               <li><a href="page5.html" >About Me</a></li>
               <li><a href="page6.html" >Web Design Sample</a></li>
               <li><a href="page7.html" >Contact </a></li>
            </ul>
            </div>
         </div>

        <br>
        <button onclick="myFunction()" class="fa fa-moon-o button-89 top-left-corner"></button>
      </header>
      <main>
         <h1>Contact</h1>
         <ol class="icenter">
            <li class="fa fa-envelope">Email: <a href="mailto:weicheng9722@gamil.com" class="button-30"> Email</a></li>
            <li class="fa fa-phone">Phone: <a href="tel:8087254266" class="button-30">Phone</a></li>
            <li class="fa fa-linkedin">Linkedin: <a href="https://www.linkedin.com/in/wei-cheng-zhao" class="button-30"> Linkedin</a></li>
            <li class="fa fa-instagram">Instergram: <a href="https://www.instagram.com/0wei_cheng/" class="button-30">Instergram</a></li>
         </ol>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116456.33106844137!2d120.54728120022226!3d24.197659882937632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346915fe16917b5d%3A0xd22ee90f2676ec95!2sThe%20Church%20of%20Jesus%20Christ%20of%20Latter-day%20Saints%20Tunghai%20Church!5e0!3m2!1sen!2sus!4v1687247552354!5m2!1sen!2sus" width="300" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="icenter"></iframe>
         <h2>Thank you for contacting us!</h2>
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="icenter">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Submit">
         </form>
         <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = isset($_POST["name"]) ? $_POST["name"] : "";
              $email = isset($_POST["email"]) ? $_POST["email"] : "";
              $msg = isset($_POST["message"]) ? $_POST["message"] : "";
            
              echo "<p>Welcome $name</p>";
              echo "<p>Your email address is: $email</p>";
              echo "<p>Your message is: $msg</p>";
            }
            ?>
      </main>
      <footer>
         <p>&copy; Wei's Portfolio. All rights reserved.</p>
         <a href="Wei.pdf" class="button-4" download>Download Resume</a>
         </a>
      </footer>
      <script src="https://replit.com/public/js/replit-badge-v2.js"></script>
   </body>
</html>
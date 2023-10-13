<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty booking');</script>";
    }
    else{
        echo "<script>alert('Your booking has been sent.');</script>";
    }
}
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="#home"><img src="images/Logo.png" alt="logo" width="150" height="90"></a>
            </div>
            <i class="fas fa-bars menu-bar"></i>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                      <li><a href="service.php">Services</a></li> 
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="booking.php"class="active">Booking</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    <section class="booking" id="booking">
        <!-- <span id="error_message"></span> -->
        <form  action="../authen/backendbook.php" onsubmit="return validation()" method="POST">
        <div id="error_message"></div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone">
            <label for="address">Address</label>
            <input type="text" id="address" name="address"><br>
           

            <div class="row">
        <div class="col-25">
        <label for="services">Cleaning Services</label><br>
      
        <select id="services" name="services">
          <option value="Select">-------Select-------</option>
          <option value="window cleaning" >window cleaning</option>
          <option value="water tank cleaning">water tank cleaning</option>
          <option value="Kitchen cleaning">Kitchen cleaning</option>
          <option value="painting services">painting services</option>
          <option value="plumbing services">plumbing service</option>
          <option value="sofa cleaning services">sofa cleaning services</option>
          <option value="Floor Parquet Polishing">Floor Parquet Polishing</option>

          
        </select>
      </div>
    </div>

            <label for="date">Date</label>
            <input type="date" id="date" name="date">
            <label for="time">Time</label>
            <input type="time" id="time" name="time">
            <input type="submit" onclick="validation()" id="button" name="send" value="Send">
          </form>


    </section>
    <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="footer-col">
                  <h4>Quick links</h4>
                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About Us</a></li>
                      <li><a href="service.php">Services</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                      
                  </ul>
              </div>
              
              <div class="footer-col">
                  <h4>Contact</h4>
                  <ul>
                      <li><a href="#">phone: 9898088123</a></li>
                      <li><a href="#">Email: csmscleaners@gmail.com</a></li>
                      <li><a href="#">Adress: Nagarjuna-10,ktm</a></li>
                      <li><a href="#"></a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>follow us</h4>
                  <div class="social-links">
                      <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.instagram.com/sumanbajgain999/"><i class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/suman-bajgain-24020024b/"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
          </div>
      </div>
   </footer>
   <?php
}
else{
    header("location:../admin/booking.php");
}

?>
<script src="main2.js"></script>
</body>
</html>
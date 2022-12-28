<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
    <div class="navigation">
      <ul>
      <li><a href="home.php" class="nava">Home</a></li>
        <li><a href="about.php" class="nava">About Us</a></li>
        <li><a href="login.php" class="nava">Login</a></li>
        <li><a href="contact.php" class="nava">Contact Us</a></li>
        <li><a  href="https://en.wikipedia.org/wiki/Bug_tracking_system#:~:text=A%20bug%20tracking%20system%20or,type%20of%20issue%20tracking%20system.&text=Typically%20bug%20tracking%20systems%20are%20integrated%20with%20other%20project%20management%20software." target="_blank" class="nava">More Details </a></li>
      </ul>
    </div>
    <div class="container">
      <div class="details">
        <p class="about">CONTACT ME</p>
        <p class="find">WHERE TO FIND US</p>
        <hr/>
        <form action="contactdetails.php"  method="post" class="form">
            <p class="username">Name &nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="name" id="" class="name" autocomplete="off" placeholder="Enter Username">
            <br>
            <p class="username">Email Id&nbsp;</p>
            <input type="text" name="email" id="" class="name" autocomplete="off" placeholder="Enter Email">
            <br>
            <p class="username">Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <input type="text" name="phone" id="" class="name" autocomplete="off" placeholder="Enter Phone NUmber">
            <br>
            <p class="username">Address&nbsp;&nbsp;</p>
            <input type="text" name="address" id="" class="name" autocomplete="off" placeholder="Enter Address">
            <br>
            <p id="password">Gender&nbsp;&nbsp;</p>
            <!-- <input type="text" name="" id="" autocomplete="off" class="name" placeholder="Enter Password"> -->
            <select name="gender" id="" class="name">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
            <br>
            <p class="username" id="message">Message</p>
            <textarea name="message" class="name" id="area" cols="30" rows="10" placeholder="Description"></textarea>
            <input type="submit" value="Submit" class="submit">
            <input type="reset" value="Reset"  class="reset">
        </form>
      </div>
      <div class="image">
        <div class="box"><img src="map.jpg" class="bug3" alt="" /></div>
        <p class="address"><strong>&nbsp;&nbsp;&nbsp;Arunima Gupta</strong>  <br> <br> Graphic Era Deemed to be University <br> 566/6, Bell Road, Society Area <br> Clement Town, Dehradun, Uttarakhand 248002 <br><br>Phone:-9927836164 <br> Email:-mohdnasir4256@gmail.com</p>
        </div>
      </div>
    </div>
  </body>
</html>

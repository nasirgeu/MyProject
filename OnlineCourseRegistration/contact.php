<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="Index.css">
</head>

<body>
    <div class="top">
        <div class="top_text">
            Online Course <br> Registration
        </div>
    </div>
    <div class="navbar">
        <div class="navbarin">
            <a href="Course.html"> <span><div class="a" >HOME</div></span></a>
            <a href="about.html"><span class="Semester"><div class="a">ABOUT US</div></span></a>
            <a href="coursedetails.html"><span class="Department"><div class="a">ALL PROGRAMS</div></span></a>
            <a href="contact.php"><span class="contactus"><div class="a">CONTACT US</div></span></a>
            <a href="careersupport.html"><span class="Registration"><div class="a">CAREER SUPPORT</div></span></a>
            <a href="studentdeatils.php"><span class="ManageStudents"><div class="a">STUDENTS DETAILS</div></span></a>
            <a href="logout.php"> <span><div class="a">LOGOUT</div></span></a>
        </div>
    </div>
    <form action="contactdetails.php" method="post">
        <div class="contact">
            <div class="me">
                CONTACT ME
            </div>
            <div class="map">
                WHERE TO FIND US
            </div>
        </div>
        <hr class="line">

        <div class="details">
            <div class="personal">
                <input  name="name" type="text" class="name" placeholder="Name" required>
                <input  name="email" type="email" class="name" placeholder="Email">
                <input  name="contactnumber" type="text" class="name" placeholder="Contact Number">
                <input  name="address" type="text" class="name" placeholder="Address">
                <input  name="subject" type="text" class="name" id="subject" placeholder="subject">
                <select  name="gender" class="name" id="subject">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <select name="occupation" class="name" id="subject">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Other">Other</option>
                </select>
                <textarea name="query" class="name" id="textarea" placeholder="Please Explain Your Query"></textarea>
                <div class="button">
                    <input type="submit" class="submit" value="Submit">
                    <input type="reset" class="submit reset" value="Reset"></div>
            </div>
            <div class="imagedetails">
                <div class="image">
                    <img src="map.jpg" width="210px" height="220px" alt="">
                </div>

                <div class="contactnumber">
                    <div class="heading">Contact Number</div>
                    <hr> +91 9927836164 <br>
                    <div class="heading">Email Id</div>
                    <hr> mohdnasir4257@gmail.com <br>
                    <div class="heading">Address</div>
                    <hr> Lane No 4C,post office road climent town Dehradun Uttarkhand 248002.
                </div>
            </div>
        </div>
    </form>
</body>

</html>
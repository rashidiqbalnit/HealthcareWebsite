<?php

    /* $conn is a way to declear variable, 
          mysqli_connect is a function which return the argument ,
          localhost,root etc. these are a variable and
          die() is a function which execute when mysqli_connect is failed. */
    $conn = mysqli_connect('localhost','root','','contact_db0') or die('connection failed');

    /* isset() function checks which checks if the argument variable exists or not
        //while $_POST is a PHP super global variable which is used to collect form data
         after submitting an HTML form with method="post". */

   if(isset($_POST['submit'])){

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $number = $_POST['number'];
      $specialist = $_POST['specialist'];
      $doctor = $_POST['doctor'];
      $date = $_POST['date'];

      $insert = mysqli_query($conn, "INSERT INTO `contact_form0`(name, email, number, specialist, doctor, date) VALUES('$name','$email','$number','$specialist','$doctor','$date')") or die('query failed');

      if($insert){
        $message[] = 'appointment made successfully!';
      }else{
        $message[] = 'appointment failed!';
      }
   }
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelthCare Website</title>

    <!-- font awesome cdn lik -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custome css file link -->
    <link rel="stylesheet" href="css/style.css">

    <!--for scrolling image css-->
    <!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->

    <!-- font awesome cdn link  >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"-->

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
</head>


<body>
 
<!-- header section start -->
<header class="header fixed-top">
  <div class="container">
    <div class="row align-items-centre justify-content-between">
    
       <a href="#home" class="logo">Health<span>Care.</span></a>
       <nav class="nav">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#services">services</a>
         <a href="#team">team</a>
         <a href="#reviews">reviews</a>
         <a href="#contact">contact</a>
       </nav>
       <a href="#contact" class="link-btn">make appointment</a>
    
       <div id="menu-btn" class="fas fa-bars"></div>

    </div>
  </div>
</header>
<!-- header section end-->


<!--image sliding start-->
<br><br>
<section class="sec">
  <div class="w3-content">
    <img class="mySlides" src="images/d5.jpg">
    <img class="mySlides" src="images/d6.jpg">
    <img class="mySlides" src="images/d7.jpg">
  </div>
</section>
<!--image sliding end-->


<!-- home section start-->
<section class="home" id="home">
   <div class="container">  
     <div class="row min-vh-100 align-items-center">
        <div class="content text-center text-md-left">
           <h3>let us brighten your smile</h3>
           <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
           <a href="#contact" class="link-btn">make appointment</a>
        </div>
     </div>
   </div>
</section>
<!-- home section end-->



<!-- About section start-->
<section class="about" id="about">
   <div class="container">
     <div class="row align-items-center">

       <div class="col-md-6 image">
          <img src="images/b.jpg" class="w-100 mb-4 mb-md-0" alt="">
       </div>

       <div class="col-md-6 content">
          <span>about us</span>
          <h3>True Healthcare For Your Family</h3>
          <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
          <a href="#contact" class="link-btn">make appointment</a>
       </div>
       
     </div>
   </div>
</section>
<!-- About section end-->




<!-- Our Services section start-->
<section class="services" id="services">
  <h1 class="heading">our services</h1>
  <div class="box-container container">
      <!-- here we are adding all type of services whatever we are providing-->
      <div class="box">
         <img src="https://th.bing.com/th/id/OIP.T2AwX0iwHgXba1MIOr9x3QHaIu?w=164&h=193&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="">
         <h3><a href="specialist.html">General Physician</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
      </div>

      <div class="box">
         <img src="https://th.bing.com/th/id/OIP.eKCKwFKmnFcziJ13H76t-QHaHa?w=195&h=181&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="">
         <h3><a href="specialist2.html">Gynecologist</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
      </div>

      <div class="box">
         <img src="https://static.vecteezy.com/system/resources/previews/000/353/829/original/vector-health-icon.jpg" alt="">
         <h3><a href="specialist3.html">Cardiologists</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>       
      </div>

      <div class="box">
         <img src="https://zolieskinclinic.com/wp-content/uploads/2014/04/cosmetic-dermatology.png" alt="">
         <h3><a href="specialist2.html">Dermatologists</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p> 
      </div>

      <div class="box">
         <img src="https://th.bing.com/th/id/OIP.kRTa4W7TmVZn4PI1PMaBuwHaHa?pid=ImgDet&w=200&h=200&c=7&dpr=1.5" alt="">
         <h3><a href="specialist3.html">Gastroenterologists</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
      </div>

      <div class="box">
         <img src="https://th.bing.com/th/id/OIP.q-Xf9zslmd1uVsUJCgY5xgHaHa?pid=ImgDet&w=200&h=200&c=7&dpr=1.5" alt="">
         <h3><a href="specialist.html">Diabetologist</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p> 
      </div>

      <div class="box">
          <img src="https://i.pinimg.com/originals/0e/ef/f2/0eeff205e10879766f9e2285cfb3f467.jpg" alt="">
          <h3><a href="specialist3.html">Pediatrics</a></h3>
          <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p> 
      </div>

      <div class="box">
         <img src="https://th.bing.com/th/id/OIP.5oP2jUGEhUTOvu3Buoz3GQAAAA?pid=ImgDet&rs=1" alt="">
         <h3><a href="specialist2.html">Physiotherapist</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p> 
      </div>

      <div class="box">
         <img src="https://th.bing.com/th/id/OIP.kPGglmH3FmOAO5M7soQuKQHaGV?w=194&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="">
         <h3><a href="specialist.html">Dentist</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p> 
      </div>
      <div class="b">
         <!--img src="" alt=""-->
         <h3><a href=""></a></h3>
         <p></p> 
      </div>
      <div class="box">
         <img src="images/eye1-removebg-preview (2).png" alt=""> <!--https://th.bing.com/th/id/OIP.ROU9mTs3X_z2QK7MDeDS6AAAAA?pid=ImgDet&w=177&h=177&c=7&dpr=1.5"-->
         <h3><a href="specialist2.html">Ophthalmologist</a></h3>
         <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p> 
      </div>
      <div class="b">
         <img src="" alt="">
         <h3><a href=""></a></h3>
         <p></p> 
      </div>

  </div>
</section>
<!-- Service section end-->




<!--process section start-->
<section class="process" id="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container" >

        <div class="box">
            <img src="https://th.bing.com/th/id/OIP.iClDCDbLJvJCdEvrc5K2FwHaE8?pid=ImgDet&rs=1" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
        </div>

        <div class="box">
            <img src="https://th.bing.com/th/id/OIP.CVCamtBGgRNUS2bbqAPKsAHaE8?w=269&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
        </div>

        <div class="box">
            <img src="https://t4.ftcdn.net/jpg/05/73/43/03/240_F_573430315_JgWhzmVpU6pC1Lq4Du0GJuLPkydL6v21.jpg" alt="">
            <h3>Dental Implants</h3>
            <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
        </div>

    </div>
</section>
<!--process section end-->








<!-- team section -->
<section class="team" id="team">
   <h1 class="heading"> our team</h1>
   <div class="swiper team-slider">
        <div class="swiper-button-prev"></div>
        <div class="swiper-wrapper">
           <div class="swiper-slide slide">
            <div class="image">
                <img src="https://img.freepik.com/free-photo/doctor-with-his-arms-crossed-white-background_1368-5790.jpg?size=626&ext=jpg" alt="">
                <div>
                <br>
                <h3>Dr. Arif</h3>
                <br>
                <h3>(General Physician)</h3>
                </div>
                <!--div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div-->
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/team-4.jpg" alt="">
                <div>
                   <br>
                   <h3>Dr. Avik Karak</h3>
                   <br>
                   <h3>(Eye Specialist)</h3>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/team-3.jpg" alt="">
                <div>
                  <br>
                  <h3>Dr. Sumanta Sarkar</h3>
                  <br>
                  <h3>(Gynaecologist)</h3>
                </div>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="https://th.bing.com/th/id/OIP.-Wb4A9IJRmKkdBqls4KU6AHaHa?w=186&h=186&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="">
                <div>
                   <br>
                   <h3>Dr. Arnab Roy</h3>
                   <br>
                   <h3>(Cardiologist)</h3>
                </div>
            </div>
        </div>
        <!--div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div-->

   </div>
   <div class="swiper-button-next"></div>
   <div class="swiper-pagination"></div>
</section>
<!-- team section ends -->







<!--reviews section start-->
<section class="reviews" id="reviews">
     <h1 class="heading">Satisfied Clients</h1>
     <div class="box-container container">
         <div class="box">
             <img src="images/ajhar.jpeg" alt="">
             <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>John Deo</h3>
             <span>Satisfied Client</span>
         </div>

         <div class="box">
            <img src="images/farhan.jpg" alt="">
            <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
            <span>Satisfied Client</span>
         </div>

         <div class="box">
            <img src="images/dilshad.jpg" alt="">
            <p>Loren ipsum dolor sit amet consectetur, adipisecing elit. Laudantium etiqua,quasi aliquam alias tempora voluptatibus.</p>
            <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
            <span>Satisfied Client</span>
         </div>

     </div>
</section>
<!--reviews section end-->




<!--Contact section start>
      <script>
            Email.send({
                SecureToken : "f8dde3d4-14eb-4312-ac42-3fecbbd23a6b",
                /*Host : "smtp.gmail.com",
                Username : "ribih@gmail.com",
                Password : "B5CA884C5154287C3FDA141D648EE8376282",*/
                To : 'rk6612262@gmail.com',
                From : "rashidiqbalbih@gmail.com",
                Subject : "For Booking Appointment",
                Body : body
              }).then(
               message => alert(message)
               );
             }
      </script-->

<section class="contact" id="contact">
   <h1 class="heading">Book Appointment</h1>
   <form onsubmit="sendEmail(); reset(); return false;" id="myForm">

   <!--form id="appointmentForm" action="<!?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return submitForm()"-->
      
            <input type="text" id="name" placeholder="Your Name" required><br>
            <input type="text" id="phone" placeholder="Phone Number" required><br>
            <input type="email" id="email" placeholder="Email Id" required><br>
            <select style="select" id="option1">
              <optgroup label="Search Specialist Type">
                <option value="not selected" selected>Search Specialist Type *</option>
                <option value="General Physician">General Physician</option>
                <option value="Gynecologist">Gynecologist</option>
                <option value="Cardiologists">Cardiologists</option>
                <option value="Dermatologists">Dermatologists</option>
                <option value="Gastroenterologists">Gastroenterologists</option>
                <option value="Diabetologist">Diabetologist</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Physiotherapist">Physiotherapist</option>
                <option value="Dentist">Dentist</option>
                <option value="Ophthalmologist">Ophthalmologist</option>
              </optgroup>
            </select>
            <br>
            <select style="select" id="option2">
                <optgroup label="Search Doctors">
                    <option value="not selected" selected>Search Doctors *</option>
                    <option value="Dr. Ashok Seth">Dr. Ashok Seth</option>     <option value="Dr. G Girish">Dr. G Girish</option>
                    <option value="Dr. Amir">Dr. Amir</option>    <option value="Dr. Iram">Dr. Iram</option>
                    <option value="Dr. Naresh Trehan">Dr. Naresh Trehan</option>   <option value="Dr. Bidhan Chandra Roy">Dr. Bidhan Chandra Roy</option>
                    <option value="Dr. Swarupa Mitra">Dr. Swarupa Mitra</option>   <option value="Dr. Mohamed Rafi">Dr. Mohamed Rafi</option>
                    <option value="Dr Santosh Shetty">Dr Santosh Shetty</option>   <option value="Dr. Vinod Kumar">Dr. Vinod Kumar</option>
                    <option value="Dr. Surbhi Anand">Dr. Surbhi Anand</option>     <option value="Dr. Dhiraj Balaji">Dr. Dhiraj Balaji</option>
                    <option value="Dr. Ravi Gopal Varma">Dr. Ravi Gopal Varma</option>   <option value="Dr. Darshan Patil">Dr. Darshan Patil</option>
                    <option value="Dr. Ramakanta Panda">Dr. Ramakanta Panda</option>    <option value="Dr. Murali Mohan C.R">Dr. Murali Mohan C.R</option>
                    <option value="Dr. Shivashankar Roy">Dr. Shivashankar Roy</option>   <option value="Dr. Mathew Jacob">Dr. Mathew Jacob</option>
                    <option value="Dr. Vinod Raina">Dr. Vinod Raina</option>    <option value="Dr. Apurva Pande">Dr. Apurva Pande</option>
                    <option value="Dr. Yash Gulati">Dr. Yash Gulati</option>    <option value="Dr. Sujatha Thyagarajan">Dr. Sujatha Thyagarajan</option>
                    <option value="Dr. Hemant Kalyan">Dr. Hemant Kalyan</option>    <option value="Dr. Dhananjaya Bhat">Dr. Dhananjaya Bhat</option>
                    <option value="Dr. Sachin Suresh Jadhav">Dr. Sachin Suresh Jadhav</option>   <option value="Dr. Sreekanta Swamy">Dr. Sreekanta Swamy</option>
                    <option value="Dr. Devi Prasad Shetty">Dr. Devi Prasad Shetty</option>    <option value="Dr. J V Srinivas">Dr. J V Srinivas</option>
                </optgroup>
            </select>
            <br>
            <input type="datetime-local" id="datetime" name="date" required><br>
            <!--textarea id="message" rows="4" placeholder="how can we help you?"></textarea><br-->
            <button type="submit">Submit</button>
        </form>



    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
                 Host : "smtp.elasticemail.com",
                 Username : "rashidiqbalbih@gmail.com",
                 Password : "BAE6DB226F6C775EAB64FA92C46893C8D60D",
                 To : 'rk6612262@gmail.com',
                 From : "rashidiqbalbih@gmail.com",
                 //document.getElementById("email").value,
                 Subject : "Appointment Form",
                 Body :   "Name: " + document.getElementById("name").value
                        + "<br><hr> Phone no:  " + document.getElementById("phone").value
                        + "<br><hr> Email:  " + document.getElementById("email").value
                        + "<br><hr> Specialist Type:  " + document.getElementById("option1").value
                        + "<br><hr> Doctor name:  " + document.getElementById("option2").value
                        + "<br><hr> Date-Time:  " + document.getElementById("datetime").value
                        + "<br><hr> Message:  " + document.getElementById("message").value
                        + "<br><hr>"
            
            }).then(
            message => alert("Message Sent Succesfully")
            );
        }
    </script>


<!--experiment section-->
<!--script src="https://smtpjs.com/v3/smtp.js"></script>
<script>


    function submitForm() {
        // Collect form data
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var specialist = document.getElementById("option1").value;
        var doctor = document.getElementById("option2").value;
        var datetime = document.getElementById("datetime").value;
        //var message = document.getElementById("message").value;

        // Call the sendEmail() function to send email
        sendEmail(name, phone, email, specialist, doctor, datetime  /*, message*/);

        // Prevent the form from submitting normally
        return false;
    }
     
    function sendEmail(name, phone, email, specialist, doctor, datetime  /*, message*/) {
        // Email sending using SMTP.js
        Email.send({
            Host: "smtp.elasticemail.com",
            Username: "rashidiqbalbih@gmail.com",
            Password: "BAE6DB226F6C775EAB64FA92C46893C8D60D",
            To: "rk6612262@gmail.com",
            From: "rashidiqbalbih@gmail.com",
            Subject: "Appointment Form",
            Body:   "Name: " + document.getElementById("name").value
                        + "<br><hr> Phone no:  " + document.getElementById("phone").value
                        + "<br><hr> Email:  " + document.getElementById("email").value
                        + "<br><hr> Specialist Type:  " + document.getElementById("option1").value
                        + "<br><hr> Doctor name:  " + document.getElementById("option2").value
                        + "<br><hr> Date-Time:  " + document.getElementById("datetime").value
                       // + "<br><hr> Message:  " + document.getElementById("message").value
                        + "<br><hr>"//"Name: " + name + "<br><hr> Phone no:  " + phone + "<br><hr> Email:  " + email + "<br><hr> Specialist Type:  " + specialist + "<br><hr> Doctor name:  " + doctor + "<br><hr> Date-Time:  " + datetime + "<br><hr> Message:  " + message + "<br><hr>"
        }).then(
            message => {
                alert("Message Sent Successfully");
                // After sending the email, manually submit the form
                document.getElementById("appointmentForm").submit();
            }
        );
    }>
</script-->




</section>
<!--Contact section end-->










<section class="contact" id="contact">

   <h1 class="heading">book appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!--onsubmit="sendEmail(); reset(); return false;"-->
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>

      <input type="text" name="name" placeholder="Your Name" class="box" required><br>
      <input type="number" name="number" placeholder="Phone Number" class="box" required><br>
      <input type="email" name="email" placeholder="Email Id" class="box" required><br>
      <select style="select" name="specialist" id="option1">
              <optgroup label="Search Specialist Type">
                <option value="not selected" selected>Search Specialist Type *</option>
                <option value="General Physician">General Physician</option>
                <option value="Gynecologist">Gynecologist</option>
                <option value="Cardiologists">Cardiologists</option>
                <option value="Dermatologists">Dermatologists</option>
                <option value="Gastroenterologists">Gastroenterologists</option>
                <option value="Diabetologist">Diabetologist</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Physiotherapist">Physiotherapist</option>
                <option value="Dentist">Dentist</option>
                <option value="Ophthalmologist">Ophthalmologist</option>
              </optgroup>
    </select>
    <br>
    <select style="select" name="doctor" id="option2">
                <optgroup label="Search Doctors">
                    <option value="not selected" selected>Search Doctors *</option>
                    <option value="Dr. Ashok Seth">Dr. Ashok Seth</option>     <option value="Dr. G Girish">Dr. G Girish</option>
                    <option value="Dr. Amir">Dr. Amir</option>    <option value="Dr. Iram">Dr. Iram</option>
                    <option value="Dr. Naresh Trehan">Dr. Naresh Trehan</option>   <option value="Dr. Bidhan Chandra Roy">Dr. Bidhan Chandra Roy</option>
                    <option value="Dr. Swarupa Mitra">Dr. Swarupa Mitra</option>   <option value="Dr. Mohamed Rafi">Dr. Mohamed Rafi</option>
                    <option value="Dr Santosh Shetty">Dr Santosh Shetty</option>   <option value="Dr. Vinod Kumar">Dr. Vinod Kumar</option>
                    <option value="Dr. Surbhi Anand">Dr. Surbhi Anand</option>     <option value="Dr. Dhiraj Balaji">Dr. Dhiraj Balaji</option>
                    <option value="Dr. Ravi Gopal Varma">Dr. Ravi Gopal Varma</option>   <option value="Dr. Darshan Patil">Dr. Darshan Patil</option>
                    <option value="Dr. Ramakanta Panda">Dr. Ramakanta Panda</option>    <option value="Dr. Murali Mohan C.R">Dr. Murali Mohan C.R</option>
                    <option value="Dr. Shivashankar Roy">Dr. Shivashankar Roy</option>   <option value="Dr. Mathew Jacob">Dr. Mathew Jacob</option>
                    <option value="Dr. Vinod Raina">Dr. Vinod Raina</option>    <option value="Dr. Apurva Pande">Dr. Apurva Pande</option>
                    <option value="Dr. Yash Gulati">Dr. Yash Gulati</option>    <option value="Dr. Sujatha Thyagarajan">Dr. Sujatha Thyagarajan</option>
                    <option value="Dr. Hemant Kalyan">Dr. Hemant Kalyan</option>    <option value="Dr. Dhananjaya Bhat">Dr. Dhananjaya Bhat</option>
                    <option value="Dr. Sachin Suresh Jadhav">Dr. Sachin Suresh Jadhav</option>   <option value="Dr. Sreekanta Swamy">Dr. Sreekanta Swamy</option>
                    <option value="Dr. Devi Prasad Shetty">Dr. Devi Prasad Shetty</option>    <option value="Dr. J V Srinivas">Dr. J V Srinivas</option>
                </optgroup>
    </select>
    <br>
      <input type="datetime-local" name="date" class="box" required><br>
      <textarea type="message" id="message" rows="4" placeholder="how can we help you?"></textarea>
      <button type="submit" name="submit" onsubmit="sendEmail(); reset(); return false;">Submit</button>
      <!--input type="submit" value="make appointment" name="submit" class="link-btn"-->
   </form>

   <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>


        function sendEmail(){
            Email.send({
                 Host : "smtp.elasticemail.com",
                 Username : "rashidiqbalbih@gmail.com",
                 Password : "BAE6DB226F6C775EAB64FA92C46893C8D60D",
                 To : 'rk6612262@gmail.com',
                 From : "rashidiqbalbih@gmail.com",
                 //document.getElementById("email").value,
                 Subject : "Appointment Form",
                 Body :   "Name: " + document.getElementById("name").value
                        + "<br><hr> Phone no:  " + document.getElementById("phone").value
                        + "<br><hr> Email:  " + document.getElementById("email").value
                        + "<br><hr> Specialist Type:  " + document.getElementById("option1").value
                        + "<br><hr> Doctor name:  " + document.getElementById("option2").value
                        + "<br><hr> Date-Time:  " + document.getElementById("datetime").value
                        + "<br><hr> Message:  " + document.getElementById("message").value
                        + "<br><hr>"
            
            }).then(
            message => alert("Message Sent Succesfully")
            );
        }
    </script>

</section>










<!--footer section starts -->
<section class="footer" >
     <div class="box-container container">

         <div class="box">
            <a href="tel:+918578968005"><i class="fas fa-phone"></i></a>
            <h3>phone number</h3>
            <p>+123-456-7890</p>
         </div>
         
         <div class="box">
            <a href="https://maps.app.goo.gl/4CbHDWfABDUEnU8E9"><i class="fas fa-map-marker-alt"></i></a>
            <h3>our address</h3>
            <p>Kolkata , India - 700109</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>opening hour</h3>
            <p>10:00am - 08:00pm</p>
         </div>

         <div class="box">
            <a href="mailto:rk6612262@gmail.com"><i class="fas fa-envelope"></i></a>
            <h3>email address</h3>
            <p>rk6612262@gmail.com</p>
         </div>
     </div>

     <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>
            Rashid Iqbal</span>
     </div>
</section>
<!--footer section end -->







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script>
  var myIndex = 0;
  carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
  

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
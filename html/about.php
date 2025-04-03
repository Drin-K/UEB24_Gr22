<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <title>ILLYRIAN Gym</title>
</head>

<body>
    <header>
        <a href="index.html" class="logo">ILLYRIAN <span>Gym</span></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.html" >Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="diet.html">Diet</a></li>
            <li><a href="about.html"  style="color:aquamarine;  border-bottom: 3px solid var(--main-color);">About Us</a></li>
            <li><a href="plans.html">Pricing</a></li>
            <li><a href="Workouts.html">Workouts</a></li>
            <li><a href="review.html">Review</a></li>
        </ul>

        <div class="top-btn">
            <a href="joinus.html" class="nav-btn">Join Us</a>
        </div>
        <div class="senvichi">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <script src="../javascj/javascript.js"></script>
       
    </header>

    <section id="about" class="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="../fotot1/whychooseus.jpg" alt="">
        </div>
    
        <div class="about-content" data-aos="zoom-in-up">
            <h2 class="heading">Why Choose Us?</h2>
            <p>Our diverse membership base creates a <u>friendly and supportive atmosphere</u>, where you can make friends and
                stay motivated.</p>
            <p>Unlock your potential with our expert Personal Trainers.</p>
            <p>Elevate your fitness with practice sessions.</p>
            <p>We provide Supportive management, for your fitness success.</p>
            <a href="joinus.html" class="btn">Book A Free Class</a><br><br><br><br><br><br>
            <b><p id= problem style="font-size: 3rem;">Have a problem ?</p></b>
            <p id = 'linku'style="font-size: large;">
                <a href="mailto:name@email.com" style="color: rgb(20, 145, 57);">Contact Us</a>
              </p>          
        </div>
    
        <div class="adresa">
            <address>
              <b><mark style="background-color: rgb(0, 0, 0);font-family:'Courier New', Courier, monospace;  border-radius: 0.7rem;color:rgb(113, 100, 100) ;"> Kosova</mark></b>
            </address>
        </div>
        
    </section>

    <script>
        $("#problem").dblclick(function(){     
        $(this).hide();
    });
    </script>
    </body>
       
    
</section>

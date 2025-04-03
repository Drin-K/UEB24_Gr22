<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/workouts.css">
    <title>ILLYRIAN Gym</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <script src="../javascj/workouts.js"></script> 
    <header>
        <a href="index.html" class="logo">ILLYRIAN <span>Gym</span></a>
        <ul class="navbar">
            <li><a href="index.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="diet.html">Diet</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="plans.html">Pricing</a></li>
            <li><a href="workouts.html" style="color:aquamarine; border-bottom: 3px solid var(--main-color);">Workouts</a></li>
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
        </header>
        <div style="padding:20px; background-color: #000000; text-align: center;">
            <div style="padding: 50px; margin-top: 80px;">
                <input id="workoutInput" list="workouts" placeholder="Choose a workout..." style="padding: 10px; width: 250px; border-radius: 5px; border: 1px solid #333;">
                <datalist id="workouts">
                    <option value="Chest"></option>
                    <option value="Back"></option>
                    <option value="Leg"></option>
                    <option value="Shoulder"></option>
                    <option value="Bicep"></option>
                    <option value="Tricep"></option>
                </datalist>
                <button onclick="goToWorkout()" style="padding: 10px 20px; margin-left: 10px; background-color: aquamarine; border: none; border-radius: 5px; cursor: pointer;">
                    Go
                </button>
            </div>
        </div>
        <section class="Back">
            <div class="video-container">
                <video controls poster="../fotot1/foto-poster.avif" src="../video/video-back.mp4" type="video/mp4"></video>
            </div>
            <div class="text-container">
                <h1>Back <span class="spn">Workouts</span></h1>
            </div>
            <img class="image-right top-right" src="../fotot1/back.jpg" style="top: 110px;right: 30px;">
            <img class="image-right bottom-right" src="../fotot1/back2.jpg" style="bottom: 30px;right: 510px;width: 390px;">
        </section>
    
        <section class="Leg">
            <div class="video-container">
                <video controls poster="../fotot1/foto-poster.avif" src="../video/video-leg.mp4" type="video/mp4"></video>
            </div>
            <div class="text-container">
                <h1>Leg <span class="spn">Workouts</span></h1>
            </div>
            <img class="image-right top-right" src="../fotot1/leg.webp" style="top: 110px;right: 30px;">
            <img class="image-right bottom-right" src="../fotot1/leg2.jpg" style="bottom: 30px; right: 510px;">
        </section>
    
        <section class="Shoulder">
            <div class="video-container">
                <video controls poster="../fotot1/foto-poster.avif" src="../video/video-shoulders.mp4" type="video/mp4"></video>
            </div>
            <div class="text-container">
                <h1>Shoulder <span class="spn">Workouts</span></h1>
            </div>
            <img class="image-right top-right" src="../fotot1/shoulder.webp" style="top: 130px;right: 30px;width: 480px;">
            <img class="image-right bottom-right" src="../fotot1/shoulder2.webp" style="bottom: 50px; right: 510px;">
        </section>
    
        <section class="Bicep">
            <div class="video-container">
                <video controls poster="../fotot1/foto-poster.avif" src="../video/video-bicep.mp4" type="video/mp4"></video>
            </div>
            <div class="text-container">
                <h1>Bicep <span class="spn">Workouts</span></h1>
            </div>
            <img class="image-right top-right" src="../fotot1/bicep.webp" style="top: 145px;right: 15px;width: 430px;">
            <img class="image-right bottom-right" src="../fotot1/bicep2.jpg" style="bottom: 35px; right: 520px; width: 385px;">
        </section>
    
        <section class="Tricep">
            <div class="video-container">
                <video controls poster="../fotot1/foto-poster.avif" src="../video/video-tricep.mp4" type="video/mp4"></video>
            </div>
            <div class="text-container">
                <h1>Tricep <span class="spn">Workouts</span></h1>
            </div>
            <img class="image-right top-right" src="../fotot1/tricep.jpg" style="top: 100px;right: 55px;width: 300px;">
            <img class="image-right bottom-right" src="../fotot1/tricep2.webp" style="bottom: 49px; right: 545px; width: 385px;">
        </section>
        <button id="scrollTopBtn">Go to Top</button>
    <script src="../javascj/javascript.js"></script>
    <script>
        $(document).ready(function () {
            $('#scrollTopBtn').click(function () {
                $('html, body').animate({ scrollTop: 0 }, 300);
            });
        });
    </script>
    <script>
        function goToWorkout() {
            const workout = document.getElementById("workoutInput").value.trim();
            const section = document.querySelector(`.${workout}`);
            if (section) {
                section.scrollIntoView({ behavior: "smooth" });
            } else {
                alert("Workout not found! Please select a valid option.");
            }
        }
    </script>

    <div class="mbajtsi">
        <h2>Calculate Your BMI</h2>
        <form class="form" id="bmiForm">
            <label style="font-size: 15px;font-family:Verdana, Geneva, Tahoma, sans-serif;" for="userName">Name:</label>
            <input style="padding:5px; border-radius: 10px" type="text" id="userName" placeholder="Enter your name" required>

            <label style="font-size: 15px;font-family:Verdana, Geneva, Tahoma, sans-serif;" for="weight">Weight (kg):</label>
            <input style="padding:5px; border-radius: 10px;" type="number" id="weight" placeholder="Enter your weight" required>

            <label style="font-size: 15px;font-family:Verdana, Geneva, Tahoma, sans-serif;" for="height">Height (m):</label>
            <input style="padding:5px; border-radius: 10px;" type="number" id="height" placeholder="Enter your height" step="0.01" required>

            <button class="btn1" type="submit" id="calculateBMI">Calculate BMI</button>
        </form>
        <div id="bmiResult" style="margin-top: 15px;margin-left: 305px; color: rgba(16, 208, 233, 0.814); font-weight: bold;font-family:Verdana, Geneva, Tahoma, sans-serif;font-size: 2.2rem;"></div>
    </div>
</body>
</html>
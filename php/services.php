<?php 
// Klasa bazë për shërbimet
class Service {
    protected string $image;
    protected string $title;
    private static int $serviceCount = 0; 
    public function __construct(string $image, string $title) {
    $this->image = $image;
    $this->title = $title;
    self::$serviceCount++; 
    }
    // Destruktori (Opsional - për të treguar kur shërbimi shkatërrohet)
    public function __destruct() {
    self::$serviceCount--; 
    }
    
    // GET dhe SET për titullin
    public function getTitle(): string {
    return $this->title;
    }
    public function setTitle(string $title): void {
    $this->title = $title;
    }
    // GET për numrin total të shërbimeve
    public static function getServiceCount(): int {
    return self::$serviceCount;
    }
    public function displayService(): string {
    return "
    <div class='row'>
    <img src='{$this->image}' alt='{$this->title}'>
    <h4>{$this->title}</h4>
    </div>";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>ILLYRIAN Gym</title>
</head>
<body>
    <header>
            <a href="index.html" class="logo">ILLYRIAN <span>Gym</span></a>
    
            <div class="bx bx-menu" id="menu-icon"></div>
    
            <ul class="navbar">
                <li><a href="index.html" >Home</a></li>
                <li><a href="services.html" style="color:aquamarine;  border-bottom: 3px solid var(--main-color);">Services</a></li>
                <li><a href="diet.html">Diet</a></li>
                <li><a href="about.html">About Us</a></li>
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
    <section class="services" id="services">

        <h2 class="heading">Our <span>Services</span></h2>
    
        <div class="services-content">
            <div class="row">
                <img src="../fotot1/jump-roping-total-body-workout-0-1516282424.jpg" alt="">
    
                <h4>Physical Fitness</h4>
            </div>

        <div class="row">
                <img src="../fotot1/Pro-Boxing-Gallery2.png" alt="">
    
                <h4>Boxing</h4>
        </div>

        <div class="row">
            <img src="../fotot1/Fitness Strenght.jpg" alt="">

            <h4>Strength Training</h4>
        </div>

        <div class="row">
            <img src="../fotot1/calisthenics-feature.jpg" alt="">

            <h4>Calisthenics</h4>
        </div>

        <div class="row">
            <img src="../fotot1/c670cb02d9db41a0af7680a6c1fdc55a.jpg" alt="">

            <h4>Weightlifting</h4>
        </div>

        <div class="row">
            <img src="../fotot1/woman-running-hard-sweating-37785236.webp" alt="">

            <h4>Running</h4>
        </div>
    </div>
    </section>
</body>
</html>
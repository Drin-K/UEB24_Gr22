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
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="diet.html">Diet</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="plans.html">Pricing</a></li>
        <li><a href="Workouts.html">Workouts</a></li>
        <li><a href="review.html" style="color:aquamarine;  border-bottom: 3px solid var(--main-color);">Review</a></li>
    </ul>

<div class="top-btn">
    <a href="joinus.html" class="nav-btn">Join Us</a>
</div>
</div>
<div class="senvichi">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>

</header>

<script src="../javascj/javascript.js"></script>
<section id="review" class="review">
    <div class="review-box">
        <h2 class="heading" data-aos="zoom-in-down">Client Reviews</h2>

        <div class="wrapper" data-aos="zoom-in-up">
            <div class="review-item">

                <h2>John Depp</h2>
                <img src="../fotot1/assets/3.jpg" alt="">
                <div class="rating">
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                </div>
                <p id="1"> Good service with friendly staff and super clean and comfortable gym for everyone from
                    beginners to professional athletes to train at. I will definitely be returning on my next trip.
                </p>
            </div>
            <div class="review-item">
                <h2>Çamërie Peci</h2>
                <img src="../fotot1/assets/2.jpg" alt="">
            
                <div class="rating">
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                </div>
                <p id="2">Kjo është një palestër e mrekullueshme e pajisur mirë. Me ajër të kondicionuar, dhoma të mira ndërrimi me
                    tushe.</p>
            </div>
            
            <div class="review-item">
            
                <h2>Jon Jones</h2>
                <img src="../fotot1/assets/3.jpg" alt="">
                <div class="rating">
            
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                    <i class='bx bxs-star' id="star"></i>
                </div>
                <p id="3"> plenty of weight and hell even has a climbing rope and kettle bells plus the cardio machines. All
                    equipment is new. it's clean and the staff friendly. Never busy and honestly
                    I Wish gyms in Australia were to this standard!</p>
            </div>
         </div>
      </div>
    </section>
    <script>
            $("#1").prepend("This gym is amazing. Amazing facility, top equipment and great environment.");
                $("#2").append(" Shumë pajisje të reja për t'ju lejuar të stërviteni në çdo mënyrë që dëshironi.");
                $("#3").prepend("This gym was amazing, bit pricey for a single visit but it has a sweet air con,");
    </script>
    <script>
        const reviewItems = document.querySelectorAll('.review-item');
        const wrapper = document.querySelector('.wrapper');

        let draggedItem = null;

        reviewItems.forEach(item => {
            item.setAttribute("draggable", "true");

            item.addEventListener("dragstart", (e) => {
                draggedItem = item;
                item.classList.add("dragging");
            });

            item.addEventListener("dragend", () => {
                draggedItem = null;
                item.classList.remove("dragging");
            });
        });

        wrapper.addEventListener("dragover", (e) => {
            e.preventDefault();
            const afterElement = getDragAfterElement(wrapper, e.clientY);
            if (draggedItem && afterElement) {
                wrapper.insertBefore(draggedItem, afterElement);
            }
        });

        function getDragAfterElement(container, y) {
            const draggableElements = [...container.querySelectorAll('.review-item:not(.dragging)')];
            return draggableElements.reduce((closest, child) => {
                const box = child.getBoundingClientRect();
                const offset = y - box.top - box.height / 2;
                if (offset < 0 && offset > closest.offset) {
                    return { offset: offset, element: child };
                } else {
                    return closest;
                }
            }, { offset: Number.NEGATIVE_INFINITY }).element;
        }
    </script>

</body>
</html>
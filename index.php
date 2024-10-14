<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GDSC-BITW</title>

    <link rel="stylesheet" href="inc/css/common.css">
    <link rel="stylesheet" href="inc/css/style.css">
    <link rel="stylesheet" href="inc/css/inf.css">
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


</head>
<section id="intro" style="padding-inline: 40px" class="pt-5">
    <body style="background-image: url('img/bg.svg'); background-attachment: fixed;">
        <?php require('inc/header.php');?>

        <div class="container py-5 ">

            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2 fs-5">
                    <br><br><br>
                    <p>
                        At GDSC BITW,<br>
                        We are dedicated to foster a passion for coding, programming, and software development among the
                        members.<br><br>

                        The primary aim of the club is to provide a supportive and collaborative environment where
                        students
                        can enhance their technical skills, learn about the latest trends in technology, and work on
                        real-world projects.
                    </p>

                </div>

                <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                    <br><br><br>
                    <img src="img/Group logo.png" class="w-100">
                </div>
            </div>
        </div>
</section>

<section id="nav1" class="container-fluid p-5"></section>

<!--About us div-->
<section id="vision" style="padding-inline: 40px">
    <button type="button" class="btn btn-primary position-absolute top-60 start-50 translate-middle px-5 border-warning border-5">
        <h3 class="text-center fs-5 pt-1 fw-normal">About Us</h3>
    </button>
    <div class="container-fluid my-5 bg-white" style="border:2.5px solid #0000ff; border-radius:10px">
        <div class="row justify-content-between align-items-center">
            <!-- <button type="button" class="btn btn-success">About Us</button> -->

            <div class="col-lg col-md-5 order-lg-1 order-md-1 order-2 mx-3 text-break fs-5">
                
                <p>
                    &emsp;&emsp;Our vision is to provide hands-on experience to the club members by providing them opportunities to
                    work on real-world coding projects, fostering problem-solving and teamwork skills.<br>
                    <br>&emsp;&emsp;We aim to create an environment where members can share knowledge and learn from each other
                    through discussions, presentations, and workshops. Thus to prepare members for coding competitions, hackathons, and coding challenges at both the
                    collegiate and professional levels.
                </p>

            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1 text-center">
                <img src="img/vision.jpg" class="w-75">
            </div>
        </div>
    </div>
</section>

<section id="nav2" class="container-fluid p-5"></section>
<!--Meet the team div-->

<section id="meet-team" style="padding-inline: 40px">
    <button type="button" class="btn btn-warning position-absolute top-60 start-50 translate-middle px-5 border-success border-5">
        <h3 class="text-center fs-5 pt-1 text-white fw-normal">Meet The Team</h3>
    </button>
    <div class="container-fluid my-5 bg-white" style="border:2.5px solid #FBBC04; border-radius:10px">
        <div class="row justify-content-between align-items-center">
            <!-- <h2 class="fw-bold h-font text-center ">Meet The Team</h2> -->
            <div class="col-lg-5 col-md-5 mt-4 order-lg-1 order-md-1 order-1 text-center">
                <img src="img/meet_team.jpg" class="w-100">
            </div>

            <div class="col-lg-6 col-md-5 me-4 mb-4 order-lg-2 order-md-2 order-2 text-center fs-5">
                <br><br><br>
                <p>
                    We have a team filled with <br />tea-addicted developers, gradients loving designers, wordsmith
                    content writers and perfection loving managers.
                </p>
                <button type="button" class="btn btn-dark mt-5">
                    <a href="team.php" class="link-light text-decoration-none">The Team</a>
                </button>
            </div>

        </div>
    </div>
</section>

<section id="nav3" class="container-fluid p-5"></section>
<!--Events Gallery-->

<section id="event-g" style="padding-inline: 40px">
    <button type="button" class="btn btn-danger position-absolute top-60 start-50 translate-middle px-5 border-success border-5">
        <h3 class="text-center fs-5 pt-1 text-white fw-normal">Event Gallery</h3>
    </button>
    <div class="container-fluid px-4 py-4 bg-white" style="border:2.5px solid #DD1919; border-radius:10px">

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper my-5" data-bs-ride="carousel">
                <div class="swiper-slide bg-danger text-center overflow-hidden rounded">
                    <a href="event1.php" style="cursor: pointer; text-decoration: none">
                        <img src="img/event1.jpg" class="w-100">
                        <h5 class="m-4 text-white">Cybersecurity Workshop</h5>
                    </a>
                </div>
                <div class="swiper-slide bg-primary text-center overflow-hidden rounded">
                    <a href="event2.php" style="cursor: pointer; text-decoration: none">
                        <img src="img/event2.jpg" class="w-100">
                        <h5 class="m-4 text-white">Web Development Workshop</h5>
                    </a>
                </div>

                <div class="swiper-slide bg-warning text-center overflow-hidden rounded">
                    <a href="event3.php" style="cursor: pointer; text-decoration: none">
                        <img src="img/event3.jpg" class="w-100">
                        <h5 class="m-4 text-white">Intro to Web 3.0 and Blockchain</h5>
                    </a>
                </div>

                <!-- <div class="swiper-slide bg-success text-center overflow-hidden rounded">
                    <img src="img/event1.png" class="w-100">
                    <h5 class="m-4">Event-4</h5>
                </div>

                <div class="swiper-slide bg-primary text-center overflow-hidden rounded">
                    <img src="img/event2.png" class="w-100">
                    <h5 class="m-4">Event-5</h5>
                </div>

                <div class="swiper-slide bg-danger text-center overflow-hidden rounded">
                    <img src="img/event1.png" class="w-100">
                    <h5 class="m-4">Event-6</h5>
                </div> -->
            </div>
            <br>
            <div class="swiper-pagination"></div>
        </div>
    </div>


</section>

<section class="container-fluid p-5"></section>

<section id="con">
<?php include('inc/footer.php'); ?>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 40,
    slidesPerView: 4,
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 3,
        },

    }
});
</script>

</body>

</html>

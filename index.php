<?php
// Load cards from a JSON file
$cardsFile = 'cards.json';
$cards = file_exists($cardsFile) ? json_decode(file_get_contents($cardsFile), true) : [];

// Handle new card submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['card_text'])) {
    $newCard = htmlspecialchars(trim($_POST['card_text']));
    if ($newCard !== '') {
        $cards[] = $newCard;
        file_put_contents($cardsFile, json_encode($cards));
        header("Location: " . $_SERVER['PHP_SELF']); // refresh page
        exit;
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/resume.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Portfolio</title>
</head>

<body>
    <nav class="nav">
        <ul class="nav-list">
            <li>
                <i class='bx bx-home'></i>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <i class='bx bx-user'></i>
                <span class="tooltip">About</span>
            </li>
            <li>
                <i class='bx bx-detail'></i>
                <span class="tooltip">Resume</span>
            </li>
            <li>
                <i class='bx bx-code-block'></i>
                <span class="tooltip">Project</span>
            </li>
            <li>
                <i class='bx bx-message-rounded'></i>
                <span class="tooltip">Contact</span>
            </li>
            <li>
                <i class='bx bx-log-in'></i>
                <span class="tooltip">Login</span>
            </li>

        </ul>
    </nav>

    <div class="container">
        <div class="box">
            <section class="section home">
                <div class="home-info">
                    <h3>Hello everyone</h3>
                    <h1>I'm Monster</h1>
                    <h3>This is my personal portfolio page</h3>
                    <br>
                    <br>
                    <div class="btn-sci">
                        <a href="" class="btn">Lets Start</a>
                        <div class="social-links">
                            <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300"><i class="fa-brands fa-github"></i><span class="social-tooltip">Github</span></a>
                            <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"><i class="fa-brands fa-facebook"></i><span class="social-tooltip">Facebook</span></a>
                            <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1500"><i class="fa-brands fa-linkedin"></i><span class="social-tooltip">Linked</span></a>
                            <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600"><i class="fa-brands fa-twitter"></i><span class="social-tooltip">Twitter</span></a>
                        </div>
                    </div>
                </div>

                <div class="imgwrapper">
                    <div class="img-box home-img">
                        <dotlottie-player
                            src="https://lottie.host/555d62f0-7fe5-4ec4-b4cd-f21d18ef028f/aHGB1TVXag.lottie"
                            background="transparent"
                            speed="1"
                            style="
                      position: absolute;
                      top: 15px;
                      display: block;
                      object-fit: cover;"
                            loop
                            autoplay></dotlottie-player>

                    </div>
                </div>
            </section>

            <section class="section about">
                <div class="imgwrapper">
                    <div class="img-container about-img">
                        <img src="images/images.jpg" alt="">
                    </div>
                </div>

                <div class="about-info">
                    <h2 class="title">About Me</h2>
                    <div class="typewriter" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="900">
                        <h3>I'm a <span class="typewriter-text"></span><label for="">|</label></h3>
                    </div>
                    <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100"></p>
                    <p class="desc">ahnggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggE bingvbionae'bgion'gne'igbn'a</p>
                    <a href="" class="btn2">View More</a>
                    <div class="about-social-links">
                        <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300"><i class="fa-brands fa-google"></i><span class="social-tooltip">Gmail</span></a>
                        <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"><i class="fa-brands fa-square-threads"></i><span class="social-tooltip">Threads</span></a>
                    </div>
                </div>


            </section>
            <section class="section resume">
                <h2 class="title">Resume</h2>
                <div class="tab-box">
                    <div class="tab-list resume-list active">
                        <h3>Experience</h3>
                    </div>
                    <div class="tab-list resume-list">
                        <h3>Skills</h3>
                    </div>
                    <div class="tab-list resume-list">
                        <h3>Education</h3>
                    </div>
                </div>
                <div class="tab-wrapper">
                    <div class="tab-grid resume-box experience active">
                        <div class="slider">
                            <div class="carousel-wrapper">
                                <div class="arrow left-arrow" onclick="rotateByArrow(1)">‹</div>
                                <div class="arrow right-arrow" onclick="rotateByArrow(-1)">›</div>

                                <div class="carousel" id="carousel">
                                    <?php
                                    $count = count($cards);
                                    foreach ($cards as $i => $text):
                                        $angle = $i * (360 / max($count, 1));
                                    ?>
                                        <div class="card" style="transform: rotateY(<?= $angle ?>deg) translateZ(400px);">
                                            <?= $text ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-grid resume-box experience">
                        <div class="tab-item resume-item">
                            <div class="skill-card" data-aos="flip-left" data-aos-delay="100">
                                <div class="card-inner">
                                    <div class="card-front">
                                        <i class="fab fa-html5 skill-icon" style="color: #e44d26;"></i>
                                        <h3>HTML</h3>
                                    </div>
                                    <div class="card-back">
                                        <i class="fas fa-arrow-left back-icon top-left-icon"></i> <!-- Icon for top-left corner -->

                                        <h3>HTML5</h3>
                                        <div class="skill-bar" data-percent="90%">
                                            <div class="skill-fill html"><span>90%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-grid resume-box experience">
                        <div class="tab-item resume-item">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">

                                    <!-- Education Card 1 -->
                                    <div class="swiper-slide">
                                        <i class="fas fa-graduation-cap"></i>
                                        <h2>Bachelor of Computer Science</h2>
                                        <h4>University of XYZ</h4>
                                        <p>2018 - 2022</p>
                                    </div>

                                    <!-- Education Card 2 -->
                                    <div class="swiper-slide">
                                        <i class="fas fa-school"></i>
                                        <h2>High School Diploma</h2>
                                        <h4>ABC High School</h4>
                                        <p>2016 - 2018</p>
                                    </div>

                                    <!-- Experience Card 1 -->
                                    <div class="swiper-slide">
                                        <i class="fas fa-briefcase"></i>
                                        <h2>Frontend Developer</h2>
                                        <h4>Awesome Tech Company</h4>
                                        <p>2022 - Present</p>
                                    </div>

                                    <!-- Experience Card 2 -->
                                    <div class="swiper-slide">
                                        <i class="fas fa-briefcase"></i>
                                        <h2>Intern - Web Developer</h2>
                                        <h4>Startup XYZ</h4>
                                        <p>Summer 2021</p>
                                    </div>

                                </div>

                                <!-- Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section portfolio">
                <h2 class="title">My Portfolio</h2>
                <div class="tab-box">
                    <div class="tab-list portfolio-list active">
                        <h3>My Projects</h3>
                    </div>
                    <div class="tab-list portfolio-list">
                        <h3>My Service</h3>
                    </div>
                </div>
                <div class="tab-wrapper portfolio">
                    <div class="tab-grid portfolio-box work active">
                        <div class="tab-item portfolio-item">
                            <div class="work-slider">
                            <div class="carousel">
                                <div class="carousel__body">
                                    <div class="carousel__prev"><i class="far fa-angle-left"></i>
                                    </div>
                                    <div class="carousel__next"><i class="far fa-angle-right"></i></div>
                                    <div class="carousel__slider">
                                        
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>2</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>3</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>4</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>5</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>6</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>7</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>8</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>9</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                        <div class="carousel__slider__item">
                                            <div class="item__3d-frame">
                                                <div class="item__3d-frame__box item__3d-frame__box--front">
                                                    <h1>10</h1>
                                                </div>
                                                <div class="item__3d-frame__box item__3d-frame__box--left"></div>
                                                <div class="item__3d-frame__box item__3d-frame__box--right"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-grid portfolio-box service">
                        <div class="tab-item portfolio-item">
                            <p>service</p>
                        </div>
                    </div>
                </div>


            </section>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/resume.js"></script>
    <script src="./js/work.js"></script>
    <script
        src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
        type="module">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        AOS.init({
            offset: 0
        });

        const carousel = document.getElementById('carousel');
        let isDragging = false;
        let startX = 0;
        let currentRotation = 0;
        let lastX = 0;

        function updateRotation() {
            carousel.style.transform = `rotateY(${currentRotation}deg)`;
        }

        function startDrag(x) {
            isDragging = true;
            startX = x;
            lastX = x;
        }

        function onDrag(x) {
            if (!isDragging) return;
            const deltaX = x - lastX;
            currentRotation += deltaX * 0.3;
            updateRotation();
            lastX = x;
        }

        function stopDrag() {
            isDragging = false;
        }

        // Mouse 
        carousel.addEventListener('mousedown', e => startDrag(e.pageX));
        document.addEventListener('mousemove', e => onDrag(e.pageX));
        document.addEventListener('mouseup', stopDrag);

        // Touch 
        carousel.addEventListener('touchstart', e => startDrag(e.touches[0].clientX));
        document.addEventListener('touchmove', e => onDrag(e.touches[0].clientX));
        document.addEventListener('touchend', stopDrag);

        // Arrow 
        function rotateByArrow(dir) {
            currentRotation += dir * (360 / <?= max(count($cards), 1) ?>);
            updateRotation();
        };

        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            cardsEffect: {
                slideShadows: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
    </script>
</body>

</html>
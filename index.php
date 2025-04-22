<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <i class='bx bx-detail' ></i>
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
                      autoplay
                    ></dotlottie-player>

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
                    <div class="typewriter" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="900"> <h3>I'm a <span class="typewriter-text"></span><label for="">|</label></h3></div>
                    <p data-aos="flip-down" data-aos-duration="1500" data-aos-delay="1100"></p>
                    <p class="desc">ahnggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggE bingvbionae'bgion'gne'igbn'a</p>
                    <a href="" class="btn2">View More</a>
                    <div class="about-social-links">
                    <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1300"><i class="fa-brands fa-google"></i><span class="social-tooltip">Gmail</span></a>
                    <a href="#" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400"><i class="fa-brands fa-square-threads"></i><span class="social-tooltip">Threads</span></a>
                    </div>
                </div>

                
           </section>


        </div>
    </div>

   




    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({offset:0});
    </script>
    <script src="script.js"></script>
    <script
      src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
      type="module"
    ></script>
</body>
</html>
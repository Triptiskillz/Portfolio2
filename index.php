<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripti</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" href="./images/hero.jpg" type="image/x-icon" />
</head>
<body>
    
     <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
<!-- header section starts  -->

<header class="header">

    <div class="user">
        <img src="images/hero.jpg" alt="">
        <h3>Tripti Sharma</h3>
        <p>Full Stack developer</p>
    </div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

</header>

<!-- header section ends -->

<div id="menu-btn" class="fas fa-bars"></div>

<!-- theme toggler  -->

<div id="theme-toggler" class="fas fa-moon"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Tripti sharma</h3>
        <p>i am a full stack developer</p>
        <a href="#"  class="btn">download CV</a>
    </div>

    <div class="share">
        <a href="https://www.facebook.com/profile.php?id=100013583764395" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/TriptiS68919740" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/triptiskillz/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/tripti-sharma-3694831a7/" class="fab fa-linkedin"></a>
        <a href="https://in.pinterest.com/sharmatripti526/" class="fab fa-pinterest"></a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> me </h1>

    <div class="row">

        <div class="box-container">
            <div class="box">
                <h3>2+</h3>
                <p>years of experience</p>
            </div>
            <div class="box">
                <h3>5+</h3>
                <p>satisfied Companys</p>
            </div>
            <div class="box">
                <h3>190+</h3>
                <p>working hours</p>
            </div>
            <div class="box">
                <h3>10+</h3>
                <p>awards won</p>
            </div>
        </div>

        <div class="content">
            <h3>my name is <span>Tripti Sharma</span></h3>
            <p>Hey, this is my homepage, so I have to say something about myself. Sometimes it is hard to introduce yourself because you know yourself so well that you do not know where to start with. Let me give a try to see what kind of image you have about me through my self-description. I hope that my impression about myself and your impression about me are not so different. Here it goes. I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience. I like to read, I like to code,I like to playing Footboll,I like planting trees,I like to Cook and I love my environment(nature).
              I always wanted to be a great Engineer, yet. I am just someone who does some study, some work, and some sports . But my dream is still alive.</p>
            <a href="#" class="btn">contact me</a>
        </div>

    </div>

    <div class="row">

        <div class="progress">
            <h3> web design <span>90%</span> </h3>
            <div class="bar bar-1-1"><span></span></div>
            <h3> graphic design <span>75%</span> </h3>
            <div class="bar bar-1-2"><span></span></div>
            <h3> UI/UX design <span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
            <h3> React.js <span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
            <h3> Node.js <span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
            <h3> Cloud Computing <span>65%</span> </h3>
            <div class="bar bar-1-2"><span></span></div>
             <h3> WordPress <span>65%</span> </h3>
            <div class="bar bar-1-2"><span></span></div>
             <h3>SQL <span>90%</span> </h3>
            <div class="bar bar-1-1"><span></span></div>
             <h3> NoSQL<span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
        </div>

        <div class="progress">
            <h3> HTML <span>95%</span> </h3>
            <div class="bar bar-2-1"><span></span></div>
            <h3> CSS <span>80%</span> </h3>
            <div class="bar bar-2-2"><span></span></div>
            <h3> javascript <span>80%</span> </h3>
            <div class="bar bar-2-2"><span></span></div>
            <h3> Java <span>80%</span> </h3>
            <div class="bar bar-2-2"><span></span></div>
            <h3> PHP <span>80%</span> </h3>
            <div class="bar bar-2-2"><span></span></div>
            <h3> Python <span>70%</span> </h3>
            <div class="bar bar-1-2"><span></span></div>
             <h3> C++ Programming <span>75%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
             <h3> Computer System Security <span>80%</span> </h3>
            <div class="bar bar-1-3"><span></span></div>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> my <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>web design</h3>
            <p>Web design is the process of planning, conceptualizing, and arranging content online.
            
            Today, designing a website goes beyond aesthetics to include the website’s overall functionality. </p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Graphic design is the profession and academic discipline whose activity consists in
             projecting visual communications intended to transmit specific messages to social groups, 
             with specific objectives.</p>
        </div>

        <div class="box">
            <i class="fas fa-mobile"></i>
            <h3>responsive design</h3>
            <p>Responsive design is a graphic user interface (GUI)
             design approach used to create content that adjusts smoothly to various screen sizes.</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
            <p>Digital marketing, also called online marketing, is the promotion of brands to connect with 
            potential customers using the internet and other forms of digital communication. </p>
        </div>

        <div class="box">
            <i class="fas fa-search-dollar"></i>
            <h3>SEO marketing</h3>
            <p>SEO marketing is the process of improving your website’s ranking in search results on Google, Bing, and other search engines. 
            Increasing your site’s organic ranking helps drive valuable organic traffic to your website. <p>
        </div>

        <div class="box">
            <i class="fab fa-wordpress"></i>
            <h3>wordpress</h3>
            <p>WordPress is a free and open-source content management system written in PHP and paired with a MySQL or MariaDB database. </p>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> my <span>portfolio</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/img-1.png" alt="">
            <div class="content">
                <h3>Dome</h3>
            </div>
        </div>

        <div class="box">
            <img src="images/img-2.png" alt="">
            <div class="content">
                <h3>Food Recipe</h3>
            </div>
        </div>

        <div class="box">
            <img src="images/img-3.png" alt="">
            <div class="content">
                <h3>Band Bloglife</h3>
            </div>
        </div>

        <div class="box">
            <img src="images/img-4.png" alt="">
            <div class="content">
                <h3>Flappy Bird</h3>
            </div>
        </div>

        <div class="box">
            <img src="images/img-5.png" alt="">
            <div class="content">
                <h3>PT Media Player</h3>
            </div>
        </div>

         <div class="box">
            <img src="images/img-6.png" alt="">
            <div class="content">
                <h3>LifeStyle Store</h3>
            </div>
        </div>

         <div class="box">
            <img src="images/img-7.png" alt="">
            <div class="content">
                <h3>Restaurant Finder</h3>
            </div>
        </div>

         <div class="box">
            <img src="images/img-8.png" alt="">
            <div class="content">
                <h3>ShopCart</h3>
            </div>
        </div>

        <div class="box">
            <img src="images/img-9.png" alt="">
            <div class="content">
                <h3>Tboom</h3>
            </div>
        </div>
        <div class="box">
            <img src="images/img-10.png" alt="">
            <div class="content">
                <h3>infinity career classes</h3>
            </div>
        </div>

        <div class="box">
            <img src="images/img-11.png" alt="">
            <div class="content">
                <h3>TRI</h3>
            </div>
        </div>

    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> me </h1>

    <form action="process.php" method="post">
        <input type="text" placeholder="your name" name="UName" class="box">
        <input type="email" placeholder="your email" name="Email" class="box">
        <input type="text" placeholder="subject"  name="Subject"  class="box">
        <textarea name="msg" class="box" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message"  name="btn-send" class="btn">
    </form>

</section>

<!-- contact section ends -->

<div class="credits"> created by <span>Tripti Sharma</span> | all rights reserved </div>













<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
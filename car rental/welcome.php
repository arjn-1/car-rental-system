<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <!-- <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon"> -->

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <link rel="stylesheet" href="assets/css/style10.css">
        <link rel="stylesheet" href="assets/css/style9.css">
        <link rel="stylesheet" href="assets/css/style6.css">
        <link rel="stylesheet" href="assets/css/style7.css">

        <title>car rental system</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <!-- <i class="ri-leaf-line nav__logo-icon"></i>  -->
                    Car Rental System
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        
                        <!-- <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li> -->
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">Our Services</a>
                        </li>
                        <li class="nav__item">
                            <a href="#ContactUS" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link">Logout</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="carsellimg/devel.jpg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            WHAT IS CAR RENTAL SYSTEM?
                        </h1>
                        <p class="home__description">
                            CAR RENTAL SYSTEM IS A PROJECT IN WHICH A PERSON CAN RENT AND CHECK AVAILABILITY OF A CAR ONLINE.THEY MAY ALSO LOOK AT THE OTHER VEHICLES SELLING ON THE WEBSITE AND CHECK THEIR DETAILS. 
                        </p>
                        <a href="#faqs" class="button button--flex">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <!--
            <div class="section99">
                <div class="container99">
                    <div class="content-section99">
                        <div class="title99">
                            <h1>About Us</h1>
                        </div>
                        <div class="content99">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                            
                        </div>
                        <div class="social99">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="image-section99">
                        <img src="images/img one.jpg ">
                    </div>
                </div>
            </div>

            <div class="section99" id="section99">
                <div class="container99">
                    <div class="content-section99">
                        
                        <div class="content99">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                            
                        </div>
                        <div class="social99">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="image-section99">
                        <img src="images/img one.jpg ">
                    </div>
                </div>
            </div>
-->




            <!--==================== STEPS ====================-->
            <!-- <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Steps to start your <br> plants off right
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Choose Plant</h3>
                            <p class="steps__card-description">
                                We have several varieties plants you can choose from.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Place an order</h3>
                            <p class="steps__card-description">
                                Once your order is set, we move to the next step which is the shipping.
                            </p>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Get plants delivered</h3>
                            <p class="steps__card-description">
                                Our delivery process is easy, you receive the plant direct to your door.
                            </p>
                        </div>
                    </div>
                </div>
            </section> -->

            <!--==================== PRODUCTS ====================-->
            
            <section class="questions section" id="faqs">
                <h2 class="section__title-center steps__title">
                    Check Out Our Services <br> 
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                  <A href = "adminregister.php"> ADMIN REGISTER</A>
                                </h3>
                            </header>

                            
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                <A href = "viewpost_user_sell.php"> VIEW SELLING CARS</A>
                                </h3>
                            </header>

                            
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title" class="heloo999">
                                <A href = "addpost.php"> ADD NEW RENTAL CARS</A>
                                </h3>
                            </header>

                            
                        </div>
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                <A href = "deleteadminmodule.php"> DELETE AN ACCOUNT</A>
                                </h3>
                            </header>

                            
                        </div>

                        <!-- <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Plants are easy way to add color energy and transform your 
                                    space but which planet is for you. Choosing the right plant.
                                </p>
                            </div>
                        </div> -->
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                <A href="viewpostadmin.php">VIEW ALL RENTAL CARS</A>
                                </h3>
                            </header>

                            
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                <A href = "admindetails.php"> VIEW YOUR DETAILS</A>
                                </h3>
                            </header>

                            
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                <A href = "adminupdate.php"> UPDATE YOUR DETAILS</A>
                                </h3>
                            </header>

                            
                        </div>

                        


                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                <A href = "logout.php"> LOGOUT</A>
                                </h3>
                            </header>

                            
                        </div>

                    </div>
                </div>
            </section>

              <br><br><br><br>


            
            
            <script>
                let slides = document.querySelectorAll('.slide-container');
                let index = 0;
            
                function next(){
                    slides[index].classList.remove('active');
                    index=(index+1)%slides.length;
                    slides[index].classList.add('active');
                }
            
                function prev(){
                    slides[index].classList.remove('active');
                    index=(index - 1 + slides.length)%slides.length;
                    slides[index].classList.add('active');
                }
            
                // setInterval(next, 7000);//every 7 sec
            
            </script>
    
            </div>

            <section class="ContactUS" id="ContactUS">
                <div class="form">
                    <div class="contact-info">
                      <h3 class="title99999">Contact Us</h3>
                      
            
                      <div class="info">
                        <div class="information">
                          <p>110025 , Delhi , India</p>
                        </div>
                        <div class="information">
                          <p>Lpwsajid@@@.com</p>
                        </div>
                        <div class="information">
                         
                          <p>123-456-789</p>
                        </div>
                      </div>
            
                     
                    </div>
            
                    <div class="contact-form">
                      <span class="circle one"></span>
                      <span class="circle two"></span>
            
                      <form action="index.html" autocomplete="off">
                        <h3 class="title99999">Contact us</h3>
                        <div class="input-container">
                          <input type="text" name="name" class="input" placeholder="Username" />
                          <label for="Username"></label>
                          
                        </div>
                        <div class="input-container">
                          <input type="email" name="email" class="input" placeholder="Email" />
                          <label for="EmailID"></label>
                          
                        </div>
                        <div class="input-container">
                          <input type="tel" name="phone" class="input" placeholder="Phone No" />
                          <label for="Phone No"></label>
                          
                        </div>
                        <div class="input-container textarea">
                          <textarea name="message" class="input" placeholder="Message"></textarea>
                          <label for="Message"></label>
                          
                        </div>
                        <input type="submit" value="Send" class="btn" />
                      </form>
                    </div>
                  </div>
            </section>
           
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <script src="app.js">

        </script>
    </body>
</html>
-
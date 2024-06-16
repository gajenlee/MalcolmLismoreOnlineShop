<!DOCTYPE html>
<?php

    // start a session
    session_start();

    // include php files
    include "connection/sql_connection.php";
    include "assets/compands/compands.php";
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malcolm Lismore</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/index-dark-mode.css">
    <link rel="stylesheet" href="./assets/styles/index-light-mode.css">
    <link rel="stylesheet" href="./assets/lightbox2/dist/css/lightbox.min.css">

    <link rel="stylesheet" href="./assets/styles/shop.css">
    <link rel="stylesheet" href="./assets/styles/animation.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />


</head>

<body class="theme-set fade-scale">
    <div id="loder">
        <div id="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <img src="./assets/imgs/loading-logo.png" alt="loading image">
    </div>
    <div id="mouse"></div>
    <div id="search-page" class="search-bar">
        <div class="blur-effect"></div>
        <div class="search-inner-page" id="search-inner">
            <div class="com">
                <button id="close" class="btn-theme close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 50 50" width="30px" height="30px">
                        <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z" />
                    </svg>
                </button>
            </div>
            <div class="search-text">
                <h1> <span>Browse image albums</span> according to your preferences</h1>
            </div>
            <div class="comp">
                <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                <input type="text" name="search" id="search-input" placeholder="Search Alboms">
            </div>
        </div>
    </div>

    <div class="drop-down-menu-items menu" id="drop-menu">
        <ul id="drop-menu-inner">
            <li class="active">
                <a href="./index.php">Home</a>
            </li>
            <li>
                <a href="./about.php">About</a>
            </li>
            <li>
                <a href="./gallery.php">Gallery</a>
            </li>
            <li>
                <a href="./shop.php">Shop</a>
            </li>
            <li>
                <a href="./contact.php">Contact</a>
            </li>
        </ul>
    </div>

    <header>
        <div class="container">
            <nav class="nav-bar menu" id="nav-bar">
                <div class="nav-item logo-icon">
                    <a href="./index.php">
                        <img id="logo" src="./assets/imgs/logo.png" alt="logo">
                    </a>
                </div>

                <ul class="theme-set nav-item nav-bar-center">
                    <li class="active">
                        <a href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./about.php">About</a>
                    </li>
                    <li>
                        <a href="./gallery.php">Gallery</a>
                    </li>
                    <li>
                        <a href="./shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="./contact.php">Contact</a>
                    </li>
                </ul>
                <div class="nav-item btn-actions">
                    <button class="theme-set btn-theme theme-btn" id="theme-btn">
                        <span id="icon-1">
                            <svg enable-background="new 0 0 512 512" id="Layer-1" version="1.1" viewBox="0 0 512 512" width="40px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path d="M256,144c-61.75,0-112,50.25-112,112s50.25,112,112,112s112-50.25,112-112S317.75,144,256,144z M256,336    c-44.188,0-80-35.812-80-80c0-44.188,35.812-80,80-80c44.188,0,80,35.812,80,80C336,300.188,300.188,336,256,336z M256,112    c8.833,0,16-7.167,16-16V64c0-8.833-7.167-16-16-16s-16,7.167-16,16v32C240,104.833,247.167,112,256,112z M256,400    c-8.833,0-16,7.167-16,16v32c0,8.833,7.167,16,16,16s16-7.167,16-16v-32C272,407.167,264.833,400,256,400z M380.438,154.167    l22.625-22.625c6.25-6.25,6.25-16.375,0-22.625s-16.375-6.25-22.625,0l-22.625,22.625c-6.25,6.25-6.25,16.375,0,22.625    S374.188,160.417,380.438,154.167z M131.562,357.834l-22.625,22.625c-6.25,6.249-6.25,16.374,0,22.624s16.375,6.25,22.625,0    l22.625-22.624c6.25-6.271,6.25-16.376,0-22.625C147.938,351.583,137.812,351.562,131.562,357.834z M112,256    c0-8.833-7.167-16-16-16H64c-8.833,0-16,7.167-16,16s7.167,16,16,16h32C104.833,272,112,264.833,112,256z M448,240h-32    c-8.833,0-16,7.167-16,16s7.167,16,16,16h32c8.833,0,16-7.167,16-16S456.833,240,448,240z M131.541,154.167    c6.251,6.25,16.376,6.25,22.625,0c6.251-6.25,6.251-16.375,0-22.625l-22.625-22.625c-6.25-6.25-16.374-6.25-22.625,0    c-6.25,6.25-6.25,16.375,0,22.625L131.541,154.167z M380.459,357.812c-6.271-6.25-16.376-6.25-22.625,0    c-6.251,6.25-6.271,16.375,0,22.625l22.625,22.625c6.249,6.25,16.374,6.25,22.624,0s6.25-16.375,0-22.625L380.459,357.812z" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span id="icon-2">
                            <svg width="30px" height="30px" data-name="Layer-2" id="Layer_2" viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.44,34.68a18.22,18.22,0,0,1-2.94-.24,18.18,18.18,0,0,1-15-20.86A18.06,18.06,0,0,1,9.59.63,2.42,2.42,0,0,1,12.2.79a2.39,2.39,0,0,1,1,2.41L11.9,3.1l1.23.22A15.66,15.66,0,0,0,23.34,21h0a15.82,15.82,0,0,0,8.47.53A2.44,2.44,0,0,1,34.47,25,18.18,18.18,0,0,1,18.44,34.68ZM10.67,2.89a15.67,15.67,0,0,0-5,22.77A15.66,15.66,0,0,0,32.18,24a18.49,18.49,0,0,1-9.65-.64A18.18,18.18,0,0,1,10.67,2.89Z" />
                            </svg>
                        </span>
                    </button>
                    <button class="theme-set btn-theme search-btn" id="search-btn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <a href=<?php
                            if (isset($_SESSION['user_id'])) echo "./user.php";
                            else if (isset($_SESSION['admin_id'])) echo "./admin.php";
                            else echo "./login_sys/login.php";
                            ?> class="theme-set btn-theme usericon">
                        <img class="user-icon" src="./assets/imgs/user.png" alt="user" width="30px">
                    </a>
                    <a href="./card.php" id="shopping-card" class="shopping-card btn-theme">
                        <i class="fa fa-shopping-bag" aria-hidden="true" style="font-size: 2rem;"></i>
                    </a>
                    <button id="menu" class="menu-btn btn-theme">
                        <i class="fa fa-bars" aria-hidden="true" style="font-size: 2rem;"></i>
                    </button>
                </div>
            </nav>
            <div class="hero-intro">
                <div class="hero-title">
                    <h1>
                        <span> I'm </span>
                        <span>Malcolm Lismore</span>
                    </h1>
                    <h2>My biggest passion in photography is for the natural world.</h2>
                    <a class="cus-btn-orgs book" href="./book.php">Book Now !</a>
                    <a class="cus-btn-orgs signup" href="./login_sys/login.php">Sign Up</a>
                </div>
                <div class="image-silders">
                    <div class="blob">
                        <img  src="./assets/imgs/hero.png" alt="hero image" class="silder one hero-img">
                    </div>

                    <div class="image-collections">
                        <div class="coll natural-collections">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <rect fill="none" />
                                    <path d="M9,5v2h6.59L4,18.59L5.41,20L17,8.41V15h2V5H9z" />
                                </svg>
                            </span>
                            <h1>Natural Image Collections</h1>
                        </div>
                        <div class="coll portait-collections">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <rect fill="none" />
                                    <path d="M9,5v2h6.59L4,18.59L5.41,20L17,8.41V15h2V5H9z" />
                                </svg>
                            </span>
                            <h1>Portrait Image Collections</h1>
                        </div>
                        <div class="coll wedding-collections">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <rect fill="none" />
                                    <path d="M9,5v2h6.59L4,18.59L5.41,20L17,8.41V15h2V5H9z" />
                                </svg>
                            </span>
                            <h1>Wedding Image Collections</h1>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <section class="service-sample ">
        <div class="service-content">
            <div class="ser-cont header-image-conent">
                <h1>The Creativity Is Running In Our Blood</h1>
            </div>
            <div class="ser-cont header-service-list">

                <div class="card">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M 36.875 -0.03125 C 32.851563 0.0820313 27.898438 0.722656 25.09375 3.53125 L 24.40625 4.1875 C 19.851563 8.773438 19.886719 15.988281 24.46875 20.59375 L 29.46875 25.59375 C 31.691406 27.824219 34.609375 29.0625 37.6875 29.0625 C 40.730469 29.0625 43.617188 27.824219 45.8125 25.625 L 46.46875 24.96875 C 49.957031 21.484375 49.988281 14.289063 50 11.21875 C 50.003906 10.679688 49.882813 10.257813 49.59375 9.96875 C 49.359375 9.734375 49.023438 9.625 48.6875 9.625 C 48.152344 9.625 47.738281 9.9375 47.53125 10.125 L 41.03125 16.65625 C 40.894531 16.679688 40.578125 16.71875 39.96875 16.71875 C 37.78125 16.71875 34.726563 16.292969 33.96875 15.96875 C 33.464844 14.867188 33.074219 10.042969 33.40625 9.03125 C 34.421875 8.015625 39.960938 2.445313 40 2.40625 C 40.175781 2.207031 40.75 1.515625 40.40625 0.75 C 40.273438 0.457031 39.914063 -0.0273438 38.96875 -0.03125 L 38.53125 -0.03125 C 38.003906 -0.03125 37.449219 -0.046875 36.875 -0.03125 Z M 21.375 19.9375 L 2.3125 37.28125 C 0.292969 39.304688 -1.496094 43.9375 2.3125 47.75 C 4.066406 49.503906 5.902344 49.96875 7.375 49.96875 C 7.753906 49.96875 8.085938 49.925781 8.40625 49.875 C 10.3125 49.589844 11.902344 48.601563 12.78125 47.71875 L 30.09375 28.65625 L 28.5 27.4375 L 22.59375 21.53125 Z" />
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Custom Photography Services</h5>
                        <p class="card-text">
                            Our custom photography services cater to your specific needs,
                            whether it's a wedding, portrait session, or special event.
                            We work closely with you to understand your vision,
                            ensuring that every shot reflects your personality and style.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M60,35.998C60,51.463,47.463,64,32.001,64
                                C16.537,64,4,51.463,4,35.998c0-12.734,8.508-23.463,20.148-26.862L20.01,4.999L25.011,0H38.99l5,4.999l-4.139,4.138
                                C51.49,12.535,60,23.264,60,35.998L60,35.998z M25.832,1.999L23.831,4h4l0.538-2.001H25.832L25.832,1.999z M27.894,6h-4.062
                                l5.548,5.547L27.894,6L27.894,6z M32.001,16C20.955,16,12,24.954,12,35.998c0,11.047,8.954,20,20.001,20c11.045,0,20-8.953,20-20
                                C52.002,24.954,43.047,16,32.001,16L32.001,16z M34.037,6h-4.074l2.038,7.604L34.037,6L34.037,6z M29.904,4H34.1l-0.537-2.001
                                h-3.124L29.904,4L29.904,4z M38.168,1.999h-2.535L36.17,4h4L38.168,1.999L38.168,1.999z M40.168,6h-4.061l-1.488,5.549L40.168,6
                                L40.168,6z M38.211,10.777l-3.418,3.419C45.621,15.572,54,24.797,54,35.998C54,48.15,44.15,58,32.001,58
                                C19.85,58,10,48.15,10,35.998c0-11.201,8.376-20.428,19.206-21.802l-3.418-3.419C14.434,13.565,6,23.786,6,35.998
                                C6,50.359,17.641,62,32.001,62C46.359,62,58,50.359,58,35.998C58,23.786,49.566,13.565,38.211,10.777L38.211,10.777z" />
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Wedding Photography</h5>
                        <p class="card-text">
                            Capture the magic of your special day with stunning wedding photography by
                            Malcolm Lismore. Every smile, every tear, and every precious moment preserved in
                            beautiful, timeless images. Trust us to tell the story of your love with elegance
                            and grace.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="picture-edit">
                            <path d="M13.5739,7.42604 C14.1419,7.99409 14.1419,8.91508 13.5739,9.48313 L9.81766,13.2394 C9.59865,13.4584 9.32425,13.6137 9.02378,13.6889 L7.85874,13.9801 C7.35208,14.1068 6.89316,13.6478 7.01982,13.1412 L7.31108,11.9762 C7.3862,11.6757 7.54156,11.4013 7.76057,11.1823 L11.5168,7.42604 C12.0849,6.85799 13.0058,6.85799 13.5739,7.42604 Z M7.86814,8.14193 L8.59452,8.93417 L7.05352,10.4752 C6.70635,10.8223 6.46007,11.2573 6.34099,11.7336 L6.04973,12.8987 C6.04139,12.932 6.03408,12.9653 6.02779,12.9985 L4.5,12.9985 C3.97386,12.9985 3.48569,12.836 3.08294,12.5584 L7.13101,8.14198 C7.32916,7.9258 7.66996,7.92577 7.86814,8.14193 Z M12.2952062,8.07489125 L12.2239,8.13314 L8.46767,11.8894 C8.39954,11.9575 8.34625437,12.0385938 8.31072406,12.12745 L8.28122,12.2187 L8.11455,12.8854 L8.78124,12.7187 C8.87472,12.6953 8.96211937,12.653225 9.03829969,12.5953438 L9.11055,12.5323 L12.8668,8.77602 C13.0443,8.5985 13.0443,8.31067 12.8668,8.13314 C12.7114875,7.97781 12.47165,7.95839375 12.2952062,8.07489125 Z M10.4985,2 C11.823972,2 12.9085378,3.03153766 12.9931823,4.33562452 L12.9985,4.5 L12.9985,6.04195 C12.2885615,5.90926692 11.5313331,6.09133888 10.9510537,6.58816586 L10.8098,6.71893 L9.30229,8.22639 L8.60523,7.46613 C8.04565353,6.85581471 7.1070819,6.81997581 6.50300114,7.3585633 L6.39383,7.46628 L2.38792,11.8367 C2.17736286,11.5050714 2.04275837,11.1204714 2.00859703,10.7073338 L2,10.4985 L2,4.5 C2,3.1745184 3.03153766,2.08996147 4.33562452,2.00531769 L4.5,2 L10.4985,2 Z M9.49985,4 C8.67151,4 8,4.67151 8,5.49985 C8,6.3282 8.67151,6.99971 9.49985,6.99971 C10.3282,6.99971 10.9997,6.3282 10.9997,5.49985 C10.9997,4.67151 10.3282,4 9.49985,4 Z M9.499855,5 C9.77592,5 9.99971,5.22379 9.99971,5.499855 C9.99971,5.77592 9.77592,5.99971 9.499855,5.99971 C9.22379,5.99971 9,5.77592 9,5.499855 C9,5.22379 9.22379,5 9.499855,5 Z">
                            </path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Photo Editing and Retouching Services</h5>
                        <p class="card-text">
                            Enhance your images with our professional photo editing services.
                            From color correction to retouching, we ensure every shot looks its best. Transform
                            your photos with our expert retouching services. We bring out the
                            best in every image, making your memories shine
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project-counter">
        <div class="container project">

            <div class="row">

                <div class="four col-md-3">
                    <div class="counter-box colored">
                        <i class="fa fa-thumbs-o-up"></i>
                        <span class="counter">2147</span>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="fa fa-group"></i>
                        <span class="counter">3275</span>
                        <p>Registered Members</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                        <span class="counter">1289</span>
                        <p>Photo Shoots</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="fas fa-image"></i>
                        <span class="counter">4563</span>
                        <p>Sold Photos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-sample">
        <div class="gallery-title">
            <h1>New Arrivals</h1>
            <p>Discover the New: Fresh Finds, Endless Possibilities</p>
        </div>
        <div class="grid-product">

            <div class="text-center container py-5">

                <div class="alert alert-success alert-dismissible fade" role="alert" id="success-msg" style="
                    background-color: #04210f;
                    color: #14a44d;
                    max-width: 50%;
                    position: fixed;
                    top: 100px;
                    left: 50%;
                    transform: translateX(-50%);
                    z-index: 99;
                ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                    <div class="msg-box" style="margin-left: 10px;">
                        <strong>Success!</strong> The item successfuly add to card.
                    </div>
                </div>

                <div class="row">

                    <?php



                    $load_items_query = "SELECT * FROM items INNER JOIN images ON items.item_image_id = images.image_id INNER JOIN gallery ON images.image_gallery_id = gallery.gallery_id;";
                    $result = $conn->query($load_items_query);
                    $max_items = 5;

                    while ($row = $result->fetch_assoc()) {
                        if ($max_items < 0) break;

                    ?>

                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                    <img style="min-height: 42vh; max-height: 42vh; object-fit: cover;" src="<?php echo "." . $row["image_path"]; ?>" class="w-100" />
                                    <a href="./details.php?id=<?php echo $row['item_id'] ?>">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                <h5><span class="badge ms-2" style="background-color: #ff4500;">New</span></h5>
                                            </div>
                                        </div>
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="" class="text-reset">
                                        <h5 class="card-title mb-3"><?php echo $row["item_name"]; ?></h5>
                                    </a>
                                    <a href="" class="text-reset">
                                        <p>Category: <?php echo $row["gallery_name"]; ?></p>
                                    </a>
                                    <h6 class="mb-3">$<?php echo $row["item_price"]; ?></h6>
                                </div>
                                <div class="mb-2" style="display: flex; justify-content: center; align-content: center;">

                                    <?php

                                    if ($row['item_price'] > 10 && $row['item_price'] < 80) {
                                        echo "<div class='text-danger'>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='far fa-star'></i>
                                            </div>";
                                    } else {
                                        echo "<div class='text-danger'>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star'></i>
                                                <i class='fa fa-star-half-alt'></i>
                                                <i class='far fa-star'></i>
                                            </div>";
                                    }

                                    ?>
                                    <p style="align-self: center; margin-left: 5px;"><?php echo $max_items + 20; ?></p>

                                </div>
                                <div class="d-flex flex-column mt-5" style="margin: 0px 10px 10px !important;">
                                    <a href="./details.php?id=<?php echo $row['item_id'] ?>" class="btn text-white" data-mdb-ripple-init style="background-color: #ff4500;" role="button">Details</a>
                                    <a class="btn" id="addToCard-<?php echo $row['item_id'] ?>" name="add-to-card" data-mdb-ripple-init style="border: 1px solid #ff4500; margin-top: 10px;" role="button">
                                        Add to card
                                    </a>
                                </div>
                            </div>
                        </div>

                        <script>
                            <?php $item_id = $row['item_id']; ?>

                            // Get references to the button and result elements
                            const userAddToCard_<?php echo $item_id ?> = document.getElementById('addToCard-<?php echo $row['item_id'] ?>');

                            // Add a click event listener to the button
                            userAddToCard_<?php echo $item_id ?>.addEventListener('click', function() {

                                if ("<?php echo isset($_SESSION['user_id']) ?>" === "1") {

                                    // Create an XMLHttpRequest object
                                    const xhr_<?php echo $item_id ?> = new XMLHttpRequest();

                                    // Set up the request
                                    xhr_<?php echo $item_id ?>.open('POST', './add-to-card.php', true);

                                    // Set the request header for sending form data
                                    xhr_<?php echo $item_id ?>.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                                    // Handle the response
                                    xhr_<?php echo $item_id ?>.onreadystatechange = function() {
                                        if (xhr_<?php echo $item_id ?>.readyState === XMLHttpRequest.DONE && xhr_<?php echo $item_id ?>.status === 200) {
                                            // Update the result div with the response from the server
                                            show_alert('success-msg');
                                        }
                                    };

                                    // Send the request
                                    xhr_<?php echo $item_id ?>.send('id=' + '<?php echo $item_id ?>');
                                } else {
                                    window.location.href = './login_sys/login.php';
                                }
                            });
                        </script>

                    <?php
                        $max_items--;
                    } ?>
                </div>
            </div>

        </div>

        <div class="shop-more-btn">
            <a href="./shop.php">See More</a>
        </div>
    </section>

    <section class="gallery-sample">
        <div class="grid-gallery">

            <div class="gallery-title gallery grid-item">
                <h1>Our Gallery</h1>
                <p>Capturing moments, creating memories.</p>
                <div class="shop-more-btn">
                    <a href="./gallery.php">See More</a>
                </div>
            </div>

            <?php

            $query_load_images = "SELECT * FROM images";
            $result = $conn->query($query_load_images);
            if ($result->num_rows > 0) {
                $max_imgs = 8;
                while ($rows = $result->fetch_assoc()) {

                    if ($max_imgs < 0) break;

            ?>

                    <div class="grid-item">
                        <a href="<?php echo  "." . $rows["image_path"]; ?>" data-lightbox="gridImage">
                            <img src="<?php echo "." . $rows["image_path"]; ?>" />
                        </a>
                    </div>

            <?php
                    $max_imgs--;
                }
            }
            ?>

        </div>
    </section>


    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>


    <!-- Lightbox JS -->
    <script src="./assets/lightbox2/dist/js/lightbox.min.js"></script>

    <script src="./assets/js/index.js"></script>

    <script>
        $(document).ready(function() {

            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });

        function show_alert(id) {
            const target = document.getElementById(id);
            target.style.display = 'flex';
            target.classList.add('show');

            setTimeout(function() {
                target.classList.remove('show');
            }, 1500);
        }
    </script>

</body>
<!--  -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted" id="theme-set">

    <section class="social d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>

        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>

        </div>

    </section>

    <section class="">
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Malcolm
                    </h6>
                    <p>
                        Capturing Moments, Creating Memories: Malcolm Lismore Photography.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Home</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">About</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Gallery</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Contact</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Shop</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Sign up</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@MalcolmLismore.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>

            </div>

        </div>
    </section>


    <div class="text-center p-4 copyright">
        © 2021 Copyright:
        <a class="text-reset fw-bold">MalcolmLismore.com</a>
    </div>

</footer>

</html>
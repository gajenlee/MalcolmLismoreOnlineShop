<?php
session_start();
include "connection/sql_connection.php";
include "assets/compands/compands.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malcolm | Shop</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/styles/index-dark-mode.css">
    <link rel="stylesheet" href="./assets/styles/index-light-mode.css">
    <link rel="stylesheet" href="./assets/lightbox2/dist/css/lightbox.min.css">

    <link rel="stylesheet" href="./assets/styles/shop.css">
    <link rel="stylesheet" href="./assets/styles/animation.css">
    <link rel="stylesheet" href="./assets/styles/admin-control/profile.css">

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

<body class="theme-set disable-scroll">
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
            <li>
                <a href="./index.php">Home</a>
            </li>
            <li>
                <a href="./about.php">About</a>
            </li>
            <li>
                <a href="./gallery.php">Gallery</a>
            </li>
            <li class="active">
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
                    <li>
                        <a href="./index.php">Home</a>
                    </li>
                    <li>
                        <a href="./about.php">About</a>
                    </li>
                    <li>
                        <a href="./gallery.php">Gallery</a>
                    </li>
                    <li class="active">
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
        </div>
    </header>

    <section class="gallery-sample">
        <div class="gallery-title"></div>
        <div class="grid-product" style="
                display: flex;
                justify-content: center;
                align-items: center;
                align-content: center;
                flex-direction: row;
                flex-wrap: wrap;">

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

            <div class="text-center container py-5">
                <div class="row">
                    <?php

                    $load_items_query = "SELECT * FROM items INNER JOIN images ON items.item_image_id = images.image_id INNER JOIN gallery ON images.image_gallery_id = gallery.gallery_id;";
                    $result = $conn->query($load_items_query);
                    $max_items = 50;

                    while ($row = $result->fetch_assoc()) {
                        if ($max_items < 0) break;
                        $max_items--;
                    ?>

                        <div class="col-lg-4 col-md-12 mb-4 fade-scale">
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                                    <img style="min-height: 42vh; max-height: 42vh; object-fit: cover;" src="<?php echo "." . $row["image_path"]; ?>" class="w-100" />
                                    <a href="./details.php?id=<?php echo $row['item_id'] ?>">
                                        <div class="mask">
                                            <div class="d-flex justify-content-start align-items-end h-100">
                                                <!-- <h5><span class="badge ms-2" style="background-color: #ff4500;">New</span></h5> -->
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
                    } ?>
                </div>
            </div>

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
                        Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
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
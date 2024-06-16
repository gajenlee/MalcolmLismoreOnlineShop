// Theme detect
const theme_btn = document.querySelector("#theme-btn");
const theme_body = document.querySelectorAll(".theme-set");
const logo_nav = document.querySelector("#logo");
const hero_img = document.querySelectorAll(".hero-img");


const basePath = "/assets/imgs/";
const logoName = "logo.png";
const logoLightName = "light-logo.png";
const heroTshirtName = "hero-white.png";
const heroName = "hero.png";

const path = window.location.toString().split(" ")[0];
const currentPHPFile = path.split("/")[path.split("/").length - 1];

const outterPHPFiles = [
    "admin.php",
    "book.php",
    "card.php",
    "contact.php",
    "gallery.php",
    "index.php",
    "shop.php",
    "user.php",
    "about.php"
];

const oneInnerPHPFiles = [
    "login.php",
    "register.php"
];

const twoInnerPHPFiles = [
    "add-gallery.php",
    "delete-gallery.php",
    "show-gallery.php",
    "update-gallery.php",

    "add-image.php",
    "delete-image.php",
    "show-image.php",
    "update-image.php",

    "add-shop.php",
    "delete-shop.php",
    "show-shop.php",
    "update-shop.php",
]

const currentPath = ".";
const oneInnerPath = "..";
const twoInnerPath = "../..";


theme_btn.addEventListener("click", () => {
    theme_btn.classList.toggle("dark");

    theme_body.forEach((e) => {
        e.classList.toggle("active");
    })

    if (outterPHPFiles.indexOf(currentPHPFile) !== -1) {
        if (logo_nav.getAttribute("src") == currentPath + basePath + logoName) {
            logo_nav.setAttribute("src", currentPath + basePath + logoLightName);
            if (currentPHPFile === "index.php" || currentPHPFile === "about.php") {
                hero_img.forEach((value) => {
                    value.setAttribute("src", currentPath + basePath + heroTshirtName);
                } )
            }

        } else {
            logo_nav.setAttribute("src", currentPath + basePath + logoName);
            if (currentPHPFile === "index.php" || currentPHPFile === "about.php") {
                hero_img.forEach((value) => {
                    value.setAttribute("src", currentPath + basePath + heroName);
                } )
            }
        }

    } else if (oneInnerPHPFiles.indexOf(currentPHPFile) !== -1) {
        if (logo_nav.getAttribute("src") == currentPath + "/" + oneInnerPath + basePath + logoName) {
            logo_nav.setAttribute("src", currentPath + "/" + oneInnerPath + basePath + logoLightName);
        } else {
            logo_nav.setAttribute("src", currentPath + "/" + oneInnerPath + basePath + logoName);
        }


    } else if (twoInnerPHPFiles.indexOf(currentPHPFile) !== -1) {

        if (logo_nav.getAttribute("src") == currentPath + "/" + twoInnerPath + basePath + logoName) {
            logo_nav.setAttribute("src", currentPath + "/" + twoInnerPath + basePath + logoLightName);
        } else {
            logo_nav.setAttribute("src", currentPath + "/" + twoInnerPath + basePath + logoName);
        }
    }
})


//  Mouse move and mouse out 
let mouse = document.querySelector("#mouse");
document.addEventListener("mousemove", (e) => {

    let x = e.pageX;
    let y = e.pageY;

    mouse.style.top = y + 8 + "px";
    mouse.style.left = x - 8 + "px"
});

// drop menu click event and close event
let drop_menu_outer = document.querySelector("#drop-menu");
let drop_menu_inner = document.querySelector("#drop-menu-inner");
let drop_down_btn = document.querySelector("#menu");

drop_down_btn.addEventListener("click", e => {
    drop_menu_outer.classList.add("active");
})

document.addEventListener("click", e => {
    if (drop_menu_outer.contains(e.target)
        && !drop_menu_inner.contains(e.target)) {
        drop_menu_outer.classList.remove("active");
    }
})


// Search Page
let search_btn = document.querySelector("#search-btn");
let search_page = document.querySelector("#search-page");
let search_close = document.querySelector("#close");
let search_inner = document.querySelector("#search-inner")

search_btn.addEventListener("click", () => {
    search_page.classList.add("active");
})


// active the nav bar
//  nav bar
const nav_bar = document.querySelector("#nav-bar");
document.addEventListener( "scroll",  () => {
    if (window.scrollY > 100) {
        nav_bar.classList.add("active")
    } else {
        nav_bar.classList.remove("active")
    }
} )


search_close.addEventListener("click", () => {
    search_page.classList.remove("active");
})

document.addEventListener("click", e => {
    if (search_page.contains(e.target)
        && !search_inner.contains(e.target)) {
        search_page.classList.remove("active");
    }
})

// preloader
let load = document.getElementById("loder");
document.body.classList.add("disable-scroll");
window.addEventListener("load", () => {
    load.style.display = "none";
    document.body.classList.remove("disable-scroll");
})


// opening animation 
try {
    const all_animation = document.querySelectorAll(".fade-scale");
    window.addEventListener("load", () => {
        all_animation.forEach((value) => {
            value.classList.add("in");
        })
    })
} catch (error) {
    console.log(error);
}

// show alert
function show_alert(id) {
    const target = document.getElementById(id);
    const close_btn = document.querySelectorAll('.btn-close')

    close_btn.forEach((value) => {
        value.addEventListener('click', () => {
            target.style.display = 'none';
            target.classList.remove('show');
        })
    })
    target.style.display = 'flex';
    target.classList.toggle('show');
}

// Image Gallery
lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
    disableScrolling: true,
});


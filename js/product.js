$(function () {
  var owl = $(".first-carousel .owl-carousel");
  owl.owlCarousel({
    items: 1,
    margin: 30,
    loop: true,
    nav: false,
    dots: true,
    autoplay : true,
    autoplayTimeout : 2000,
    smartSpeed: 800,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

$(function () {
  var owl = $(".tab-container .owl-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: false,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 2,
      },
    },
  });
});

// =================== On Click video JS ==========================

const video = document.querySelector("#sixth-section video");
const playBtn = document.querySelector(".play-btn");

playBtn.addEventListener("click", () => {
  video.classList.remove("d-none");
  playBtn.classList.add("d-none");
});

// ============== Adding Fade Right Effect on selecting the tab on carousel ===============

const TabBtn = document.querySelectorAll(".tab-button");
const Tabs = document.querySelectorAll(".tab-pane");

TabBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    Tabs.forEach((tab) => {
      if (!tab.classList.contains("active")) {
        tab.classList.remove("fadeinright");
      } else tab.classList.add("fadeinright");
    });
  });
});

// ================= Sidebar JS =========================

const menu = document.querySelector("#menu");
const sideBar = document.querySelector(".sidebar");
const close = document.querySelector("#close");

menu.addEventListener("click", () => {
  sideBar.style.left = 0;
});

close.addEventListener("click", () => {
  sideBar.style.left = "-100%";
});

// ================== Fade Out Item ====================

window.addEventListener("scroll", () => {
  const tenthSect = document.querySelector("#tenth-section");
  const RemoveEffect = document.querySelectorAll(".remove-effect");

  if (tenthSect.getBoundingClientRect().top < -400) {
    RemoveEffect.forEach((item) => {
      item.classList.add("fadeOutUpBig");
    });
  } else {
    RemoveEffect.forEach((item) => {
      item.classList.remove("fadeOutUpBig");
    });
  }
});

// ===================== Sticky Navbar =====================

const header = document.querySelector("#header-section");
const ul = document.querySelector("#header-section ul");
const logo = document.querySelector(".logo");
const logoImg = document.querySelector(".logo > img");

window.addEventListener("scroll", () => {
  let scrollValue = window.scrollY;

  if (scrollValue > 1) {
    header.classList.add("sticky");
    logo.classList.add("onscroll-logo");
    logo.style.setProperty("--remove", "none");
    ul.classList.add("onscroll-ul");
    header.classList.add("onscroll-header");
    menu.classList.add("onscroll-menu");
  } 

  else {
    header.classList.remove("sticky");
    logo.classList.remove("onscroll-logo");
    logo.style.setProperty("--remove", "block");
    ul.classList.remove("onscroll-ul");
    header.classList.remove("onscroll-header");
    menu.classList.remove("onscroll-menu");
  }

});

// =============== Header Appear on Scroll Up ===================
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#header-section').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    if (st > lastScrollTop && st > navbarHeight){
        $('header').removeClass('scroll-down').addClass('scroll-up');
    } else {
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('scroll-up').addClass('scroll-down');
        }
    }
    
    lastScrollTop = st;
}

// =============== Close Popup on Click ===================
const popup = document.querySelector(".popup");
const closePopup = document.querySelector(".popup-close");
const popupBtn = document.querySelector(".popup-btn");

window.addEventListener("load", () => {
  setTimeout(() => {
    popup.style.transform = "scale(1)";
  }, 3000)
})

closePopup.addEventListener("click", () => {
  popup.style.transform = "scale(0)";
  popupBtn.style.transform = "scale(1)";
})

popupBtn.addEventListener("click", () => {
  popup.style.transform = "scale(1)";
  popupBtn.style.transform = "scale(0)";
})

// ============== On Clicking Menu Items Sidebar Close ==================
const sidebarItem = document.querySelectorAll(".sidebar-item");
sidebarItem.forEach((item) => {
  item.addEventListener("click", () => {
    sideBar.style.left = "-100%";
  })
})
<?php
require_once "Mobile_Detect.php";
$detect = new Mobile_Detect;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Signature | Product">
  <meta name="author" content="Signature | Product">
  <meta name="description" content="Signature | Product">
  <title>Signature | Product</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" async>
  <link rel="stylesheet" type="text/css" href="css/animate.min.css" async>
  <link rel="stylesheet" href="css/owl.carousel.css" async>
  <link rel="stylesheet" type="text/css" href="css/product.min.css">
</head>

<body>
  <!-- ========================== Preloader ========================== -->
  <div id="overlayer"></div>

  <div class="loader">
    <div class="loader-inner">
      <div class="spinner-square">
        <div class="square-1 square"></div>
        <div class="square-2 square"></div>
        <div class="square-3 square"></div>
      </div>
    </div>
  </div>
  <!-- ======================== End Preloader ========================== -->

  <div class="wrapper">

    <!-- ======================= Navbar Section ===================== -->
    <div class="sidebar">
      <div id="close">
        <img class="lazy" data-src="assets/images/close-btn.svg" alt="close-btn">
      </div>
      <div class="header-logo">
        <img class="lazy" data-src="assets/images/menu-logo.svg" alt="logo">
      </div>
      <ul>
        <li>
          <a href="#second-section" class="bebas sidebar-item">Our Master Blender</a>
        </li>
        <li>
          <a href="#fourth-section" class="bebas sidebar-item">Products</a>
        </li>
        <li>
          <a href="#sixth-section" class="bebas sidebar-item">Grain To Glass</a>
        </li>
        <li>
          <a href="#eighth-section" class="bebas sidebar-item">Recipes</a>
        </li>
        <li>
          <a href="#ninth-section" class="bebas sidebar-item">Our mixologists</a>
        </li>
      </ul>
      <div class="menu-btn">
        <a href="https://www.instagram.com/signaturegreenvibes/" target="_blank" class="white bebas"><span><img
              class="lazy" data-src="assets/images/menu-instagram.svg" alt="logo"></span>INSTAGRAM</a>
        <div>
          <label class="roboto white">© 2023 Diageo</label>
        </div>
      </div>
    </div>

    <header id="header-section">
      <div class="logo">
        <img class="lazy" data-src="assets/images/logo.svg" alt="logo">
      </div>
      <ul>
        <li>
          <a href="#second-section" class="bebas">Our Master Blender</a>
        </li>
        <li>
          <a href="#fourth-section" class="bebas">Products</a>
        </li>
        <li>
          <a href="#sixth-section" class="bebas">Grain To Glass</a>
        </li>
        <li>
          <a href="#eighth-section" class="bebas">Recipes</a>
        </li>
        <li>
          <a href="#ninth-section" class="bebas">Our mixologists</a>
        </li>
      </ul>

      <div id="menu">
        <img class="lazy" data-src="assets/images/ham-menu.svg" alt="ham-menu">
      </div>
    </header>

    <!-- ======================= Section 1 ===================== -->
    <section id="home-section" class="section common-section">
      <div class="home-container">
        <img class="bg-img lazy" data-src="assets/images/firstbg.svg" alt="img">

        <div class="content container lazy">
          <div class="text-section">
            <h1 class="gothic text-white common-heading-1">CRAFTED FROM NATURE
              <span class="leaf position-relative"><img class="position-absolute" src="assets/images/leaf.svg"
                  alt="leaf"></span>
            </h1>
            <p class="common-p text-white">Welcome to the world of Signature. Setting out a bold vision to be India’s
              Green Whisky, the all-new Signature is as authentic & natural as it gets. Our whisky is an exquisite blend
              of nature’s finest ingredients - two row & six row strains of barley, fresh water and fine grain spirits
              imported from Scottish highlands and spey-side. Crafted with perfection by our Master Blender Louise
              Martin, it is truly unique, full of character & bound to leave a lasting signature. Taste of Nature in a
              Glass!</p>
            <img data-src="assets/images/symbol.svg" alt="img" class="symbol-img lazy wow fadeInUpBig"
              data-wow-duration="2s" data-wow-delay="0.5s">
            <a aria-label="View Recipes" href="#eighth-section"
              class="bg-deepgreen text-lightgreen bebas common-btn view-recipe-btn">VIEW
              RECIPES</a>
          </div>
        </div>

        <img class="bottom-img lazy" data-src="assets/images/bottom.webp" alt="img">

        <div class="popup">
          <div class="popup-container">
            <img class="popup-close lazy" data-src="assets/images/close.svg" alt="close-icon">
            <div class="popup-top">
              <img class="lazy" data-src="assets/images/glass.svg" alt="img">
              <h2 class="gothic text-greenish">purchase online</h2>
            </div>
            <ul class="popup-middle">
              <li>
                <a href="https://www.swiggy.com/" target="_blank">
                  <img class="img lazy" data-src="assets/images/swiggy.svg" alt="swiggy-icon">
                  <div class="roboto text text-uppercase">swiggy</div>
                </a>
              </li>
            </ul>
            <div class="popup-bottom">
              <p class="roboto">Home delivery of alcohol products is only applicable in West Bengal and Odisha.</p>
            </div>
          </div>
        </div>

        <div class="popup-btn active">
          <div class="popup-btn-container">
              <img data-src="assets/images/glass-btn.webp" alt="img" class="img-fluid lazy" width="35" height="35">
              <h2 class="gothic text-greenish">purchase online</h2>
          </div>
        </div>

      </div>
    </section>

    <!-- ======================= Section 2 ===================== -->
    <section id="second-section" data-bg='assets/images/greenbg.svg' class="section common-section common-bg lazy">
      <div class="container">
        <div class="second-container">
          <div class="row">
            <div class="col-xl-5">
              <div class="left position-relative wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.1s">
                <h2 class="gothic text-lightgreen common-heading-1">the signature of our master blender </h2>
                <p class="common-p text-whitealter">In the skilled hands of Louise Martin, our Master Blender, the new
                  Signature attains a level of perfection that is truly remarkable. Her meticulous craftsmanship infuses
                  every sip of these exquisite blends with a sense of revelation, offering a remarkably smooth and
                  delightfully rich experience. </p>
                <img class="lazy" data-src="assets/images/sign.webp" alt="sign img">
              </div>
            </div>
            <div class="col-xl-7">
              <div class="right first-carousel">
                <div class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="img-container-1">
                      <img data-src="assets/images/carousel-1-top-left.webp" alt="img" class="lazy wow fadeInUpBig"
                        data-wow-duration="2s" data-wow-delay="0.1s">
                      <img data-src="assets/images/carousel-1-top-right.webp" alt="img" class="lazy wow fadeInUpBig"
                        data-wow-duration="2s" data-wow-delay="0.2s">
                      <img data-src="assets/images/carousel-1-middle-left.webp" alt="img" class="lazy wow fadeInUpBig"
                        data-wow-duration="2s" data-wow-delay="0.3s">
                      <video class="lazy middle wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.4s" autoplay
                        playsinline loop muted preload="none" poster="assets/images/carousel-1-middle.webp">
                        <source data-src="assets/videos/carousel-1-middle.mp4" type="video/mp4">
                        <source data-src="assets/videos/carousel-1-middle.webm" type="video/webm">
                        <p>Your browser doesn't support HTML video. Here is a
                          <a href="assets/videos/carousel-1-middle.mp4">link to the video</a> instead.
                        </p>
                      </video>
                      <img data-src="assets/images/carousel-1-middle-right.webp" alt="img" class="lazy wow fadeInUpBig"
                        data-wow-duration="2s" data-wow-delay="0.5s">
                      <video playsinline autoplay muted loop class="lazy bottom-left opacity-75 wow fadeInUpBig"
                        data-wow-duration="2s" data-wow-delay="0.6s" preload="none"
                        poster="assets/images/born-of-craft-carousel.webp">
                        <source data-src="assets/videos/born-of-craft.mp4" type="video/mp4">
                        <source data-src="assets/videos/born-of-craft.webm" type="video/webm">
                        <p>Your browser doesn't support HTML video. Here is a
                          <a href="assets/videos/born-of-craft.mp4">link to the video</a> instead.
                        </p>
                      </video>
                      <img data-src="assets/images/carousel-1-bottom-right.webp" alt="img" class="lazy wow fadeInUpBig"
                        data-wow-duration="2s" data-wow-delay="0.6s">
                    </div>
                  </div>
                  <div class="item">
                    <div class="img-container-2">
                      <img src="assets/images/carousel-2-top-left.webp" alt="img" data-animation-in="fadeInRight"
                        data-animation-out="animate-out fadeOutLeft">
                      <img src="assets/images/carousel-2-top-left-2.webp" alt="img" data-animation-in="fadeInRight"
                        data-animation-out="animate-out fadeOutLeft">
                      <img src="assets/images/carousel-2-middle.webp" alt="img" data-animation-in="fadeInRight"
                        data-animation-out="animate-out fadeOutLeft">
                      <video class="bottom-left opacity-75" autoplay muted loop playsinline
                        data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutLeft" preload="none"
                        poster="assets/images/carousel-2-video.webp">
                        <source src="assets/videos/carousel-2-video.mp4" type="video/mp4">
                        <source src="assets/videos/carousel-2-video.webm" type="video/webm">
                        <p>Your browser doesn't support HTML video. Here is a
                          <a href="assets/videos/carousel-2-video.mp4">link to the video</a> instead.
                        </p>
                      </video>
                      <img src="assets/images/carousel-2-bottom-left-2.webp" alt="img" data-animation-in="fadeInRight"
                        data-animation-out="animate-out fadeOutLeft">
                      <img src="assets/images/carousel-2-bottom-right.webp" alt="img" data-animation-in="fadeInRight"
                        data-animation-out="animate-out fadeOutLeft">
                      <img src="assets/images/carousel-2-bottom-right-2.webp" alt="img" data-animation-in="fadeInRight"
                        data-animation-out="animate-out fadeOutLeft">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================= Section 3 ===================== -->
    <section id="third-section" class="section common-section">
      <video class="lazy" playsinline autoplay muted loop preload="none" poster="assets/images/born-of-craft.webp">
        <source data-src="assets/videos/born-of-craft.mp4" type="video/mp4">
        <source data-src="assets/videos/born-of-craft.webm" type="video/webm">
        <p>Your browser doesn't support HTML video. Here is a
          <a href="assets/videos/born-of-craft.mp4">link to the video</a> instead.
        </p>
      </video>
      <div class="container">
        <div class="third-container">
          <h2 class="gothic text-lightgreen common-heading-1">Born of craft</h2>
          <p class="roboto common-p text-white">Signature is a creation of natural ingredients- Nature's finest, barley,
            fresh water and 10 imported scotches harmonize to become one. They are blended with aged Indian malts and
            fine grain spirits. Even the bottle is made from recycled glass.</p>
          <img class="lazy" data-src="assets/images/qr.webp" alt="qr-img">
          <span class="bebas text-white">scan the qr code for more</span>
        </div>
      </div>
    </section>

    <!-- ======================= Section 4 ===================== -->
    <section id="fourth-section" data-bg='assets/images/greenbg.svg' class="lazy section common-section common-bg">
      <div class="container">
        <div class="fourth-container">
          <div class="row">
            <div class="col-xl-6">
              <div class="left" data-wow-duration="2s">
                <img data-src="assets/images/bottle.webp" alt="img" class="lazy wow fadeInUp" data-wow-duration="2s"
                  data-wow-delay="0.1s">
                <video class="lazy wow fadeInUp opacity-75" data-wow-duration="2s" autoplay muted loop playsinline
                  data-wow-delay="0.2s" preload="none" poster="assets/images/fourth-video.webp">
                  <source data-src="assets/videos/fourth-video.mp4" type="video/mp4">
                  <source data-src="assets/videos/fourth-video.webm" type="video/webm">
                  <p>Your browser doesn't support HTML video. Here is a
                    <a href="assets/videos/fourth-video.mp4">link to the video</a> instead.
                  </p>
                </video>
                <img data-src="assets/images/fourth-middle.webp" alt="img" class="lazy wow fadeInUp"
                  data-wow-duration="2s" data-wow-delay="0.3s">
                <img data-src="assets/images/fourth-bottom-left.webp" alt="img" class="lazy wow zoomIn"
                  data-wow-duration="2s" data-wow-delay="0.4s">
                <img data-src="assets/images/fourth-bottom-right.webp" alt="img" class="lazy wow zoomIn"
                  data-wow-duration="2s" data-wow-delay="0.5s">
              </div>
            </div>
            <div class="col-xl-6">
              <div class="right wow fadeInUp" data-wow-duration="2s">
                <h2 class="gothic text-lightgreen common-heading-1">signature premier whisky</h2>
                <span class="din text-orangish text-uppercase">Smooth & Creamy</span>
                <p class="text-whitealter common-p">Signature Premier Whisky Gives a perfect smooth and creamy taste
                  that's elevated sensorially with silky honey, a dash of fruitiness & tinge of Maltiness. An exquisite
                  Scotch selection, Signature Premier is a blend of Natural Ingredients 10 Imported Scotches, Aged
                  Indian Malts & Fine Grain Spirits.The fine ingredients are purposefully selected to bring out a
                  remarkably creamy character</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================= Section 5 ===================== -->
    <section id="fifth-section" data-bg='assets/images/greenbg.svg' class="lazy section common-section common-bg">
      <div class="container">
        <div class="fifth-container">
          <div class="row">
            <div class="col-xl-6 order-xl-1 order-2">
              <div class="left wow fadeInUp" data-wow-duration="2s">
                <h2 class="gothic text-lightgreen common-heading-1">signature rare aged whisky</h2>
                <span class="din text-orangish text-uppercase">deep & rich</span>
                <p class="common-p text-whitealter">Signature Rare Whisky gives a perfect Taste that’s DEEP & RICH An
                  authentically rich taste, with Notes of Dried Fruits & a nutty Aroma. A 3 Grain Whisky with Imported
                  Scotch, Aged Indian Malts and Grain Spirits.The fine ingredients are purposefully sourced to bring
                  out
                  a remarkably rich character</p>
              </div>
            </div>
            <div class="col-xl-6 order-xl-2 order-1">
              <div class="right">
                <img data-src="assets/images/bottle-2.webp" alt="img" class="lazy wow fadeInUp" data-wow-duration="2s"
                  data-wow-delay="0.1s">
                <video class="lazy wow fadeInUp opacity-75" data-wow-duration="2s" autoplay playsinline loop muted
                  data-wow-delay="0.2s" preload="none" poster="assets/images/fifth-video.webp">
                  <source data-src="assets/videos/fifth-video.mp4" type="video/mp4">
                  <source data-src="assets/videos/fifth-video.webm" type="video/webm">
                  <p>Your browser doesn't support HTML video. Here is a
                    <a href="assets/videos/fifth-video.mp4">link to the video</a> instead.
                  </p>
                </video>
                <img data-src="assets/images/fifth-bottom-left.webp" alt="img" class="lazy wow fadeInRight"
                  data-wow-duration="2s" data-wow-delay="0.3s">
                <img data-src="assets/images/fifth-bottom-left-2.webp" alt="img" class="lazy wow fadeInUp"
                  data-wow-duration="2s" data-wow-delay="0.4s">
                <img data-src="assets/images/fifth-bottom-right.webp" alt="img" class="lazy wow fadeInUp"
                  data-wow-duration="2s" data-wow-delay="0.5s">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================= Section 6 ===================== -->
    <section id="sixth-section" data-bg='assets/images/greenbg.svg' class="lazy section common-section common-bg">
      <img src="assets/images/close-video.svg" class="position-absolute close-video" alt="close-btn">
      <video class="lazy d-none" controls loop muted playsinline preload="none" poster="assets/images/sixth-video.webp">
        <source data-src="assets/videos/sixth-video.mp4" type="video/mp4">
        <source data-src="assets/videos/sixth-video.webm" type="video/webm">
        <p>Your browser doesn't support HTML video. Here is a
          <a href="assets/videos/sixth-video.mp4">link to the video</a> instead.
        </p>
      </video>
      <div class="container position-relative">
        <img data-src="assets/images/sixth-top.webp" alt="img" class="lazy position-absolute sixth-top wow fadeInUpBig"
          data-wow-duration="2s" data-wow-delay="0.1s">
        <div class="sixth-container wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
          <h2 class="gothic text-lightgreen text-center common-heading-2">grain to glass</h2>
          <p class="roboto common-p text-whitealter">From
            the careful sourcing of organic, locally grown grains to the use of energy-efficient distillation methods,
            sustainability is always at the forefront. The result? A sustainably produced whiskey, from grain to glass.
            So, sip and savour this sublime concoction, knowing that it was crafted with a commitment to both taste and
            the planet.</p>
        </div>
        <img data-src="assets/images/play.svg" alt="img" class="lazy position-absolute play-btn wow fadeInUpBig"
          data-wow-duration="2s" data-wow-delay="0.3s">
        <img data-src="assets/images/sixth-bottom-left.webp" alt="img"
          class="lazy position-absolute sixth-bottom-left wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.4s">
        <img data-src="assets/images/sixth-bottom-right.webp" alt="img"
          class="lazy position-absolute sixth-bottom-right wow fadeInUpBig" data-wow-duration="2s"
          data-wow-delay="0.5s">
        <img data-src="assets/images/sixth-bottom-right-2.webp" alt="img"
          class="lazy position-absolute sixth-bottom-right-2 wow fadeInUpBig" data-wow-duration="2s"
          data-wow-delay="0.6s">
      </div>
    </section>

    <!-- ======================= Full Video Section ===================== -->
    <div class="common-section video-section">
      <div class="video-container">
        <video id="video-play" loop muted playsinline preload="none" poster="assets/images/sixth-video.webp">
          <source src="assets/videos/sixth-video.mp4" type="video/mp4">
          <source src="assets/videos/sixth-video.webm" type="video/webm">
          <p>Your browser doesn't support HTML video. Here is a
            <a href="assets/videos/sixth-video.mp4">link to the video</a> instead.
          </p>
        </video>
      </div>
    </div>

    <!-- ======================= Section 7 ===================== -->
    <section id="seventh-section" data-bg='assets/images/greenbg.svg' class="lazy section common-section common-bg">
      <div class="container">
        <div class="seventh-container position-relative">
          <img data-src="assets/images/seven-top-left.webp" alt="img" class="lazy top-left wow fadeInUpBig"
            data-wow-delay="0.1s" data-wow-duration="2s">
          <img data-src="assets/images/seven-top-right.webp" alt="img" class="lazy top-right wow fadeInUpBig"
            data-wow-delay="0.1s" data-wow-duration="2s">
          <div class="content wow fadeInUpBig" data-wow-duration="2s">
            <h2 class="gothic text-lightgreen common-heading-2">nature in a glass</h2>
            <p class="roboto common-p text-whitealter">Experience the beauty of nature in every sip with these special
              curations crafted by the world’s top mixologists. Made with only the finest-locally sourced ingredients
              that celebrate natural flavors and aromas of the earth.</p>
          </div>
          <img data-src="assets/images/Arrow.webp" alt="img" class="lazy middle-arrow wow fadeInUpBig"
            data-wow-duration="2s" data-wow-delay="0.1s">
          <img data-src="assets/images/seven-bottom-left.webp" alt="img" class="lazy bottom-left wow fadeInUpBig"
            data-wow-delay="0.1s" data-wow-duration="2s">
          <img data-src="assets/images/seven-bottom-right.webp" alt="img" class="lazy bottom-right wow fadeInUpBig"
            data-wow-delay="0.1s" data-wow-duration="2s">
        </div>
      </div>
    </section>

    <!-- ======================= Section 8 ===================== -->
    <section id="eighth-section" data-bg='assets/images/eighthbg.svg' class="lazy section common-section">
      <div class="tab-section">
        <div class="nav nav-tabs tabs" id="nav-tab" role="tablist">
          <button class="tab-button bebas active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#tab-1"
            type="button" role="tab" aria-selected="true">Signature Serve</button>
          <button class="tab-button bebas" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#tab-2"
            type="button" role="tab" aria-selected="false">Region Inspired</button>
          <button class="tab-button bebas" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#tab-3"
            type="button" role="tab" aria-selected="false">Recipes</button>
        </div>
      </div>

      <div class="modal fade" id="recipe-modal-1" tabindex="-1" aria-labelledby="recipe-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="modal-left">
                  <img class="lazy" data-src="assets/images/eight-img1.svg" alt="img">
                </div>
              </div>
              <div class="col-md-8">
                <div class="modal-right">
                  <button type="button" class="modal-closebtn" data-bs-dismiss="modal">
                    <img data-src="assets/images/modal-close.svg" class="lazy" alt="close">
                  </button>
                  <div class="modal-label text-greenish gothic">
                    <label>001</label>
                  </div>
                  <div class="modal-heading">
                    <h3 class="text-greenish gothic common-heading-1">signature <br class="breaks"> premier </h3>
                  </div>
                  <div class="modal-para">
                    <p class="roboto700 text-greenish common-p">GT Sour is a depiction of that strong cumin element in a
                      sour with the fine full bodied "Signature Premier" defining the versatile classic cocktail of the
                      century.</p>
                  </div>
                  <div class="line bg-greenish"></div>
                  <ul class="modal-recipe-container">
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">60 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Signature</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">15 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Roasted Cumin Cordial</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">3 <span class="roboto">drops</span></div>
                      <p class="name common-p text-greenish">Aromatic Bitters</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">15 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Fresh Lime juice</p>
                    </li>
                    <li class="recipe-method">
                      <p class="common-p roboto700 text-greenish">Method – Shaken with ice and served straight or on the
                        rocks.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal fade" id="recipe-modal-2" tabindex="-1" aria-labelledby="recipe-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="modal-left">
                  <img class="lazy" data-src="assets/images/eight-img2.svg" alt="img">
                </div>
              </div>
              <div class="col-md-8">
                <div class="modal-right">
                  <button type="button" class="modal-closebtn" data-bs-dismiss="modal">
                    <img data-src="assets/images/modal-close.svg" class="lazy" alt="close">
                  </button>
                  <div class="modal-label text-greenish gothic">
                    <label>002</label>
                  </div>
                  <div class="modal-heading">
                    <h3 class="text-greenish gothic common-heading-1">signature <br class="breaks"> rare </h3>
                  </div>
                  <div class="modal-para">
                    <p class="roboto700 text-greenish common-p">Signature paired with the two most iconic flavours of
                      coffee & coconut along with just the right amount of soda!</p>
                  </div>
                  <div class="line bg-greenish"></div>
                  <ul class="modal-recipe-container">
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">60 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Signature</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Coffee</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">30 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Coconut</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Soda</p>
                    </li>
                    <li class="recipe-method">
                      <p class="common-p roboto700 text-greenish">Method – Shaken with ice and served straight.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal fade" id="recipe-modal-3" tabindex="-1" aria-labelledby="recipe-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="modal-left">
                  <img class="lazy" data-src="assets/images/eight-img3.svg" alt="img">
                </div>
              </div>
              <div class="col-md-8">
                <div class="modal-right">
                  <button type="button" class="modal-closebtn" data-bs-dismiss="modal">
                    <img data-src="assets/images/modal-close.svg" class="lazy" alt="close">
                  </button>
                  <div class="modal-label text-greenish gothic">
                    <label>001</label>
                  </div>
                  <div class="modal-heading">
                    <h3 class="text-greenish gothic common-heading-1 changed-heading"> Filter <br class="breaks">
                      Coconut <br class="breaks"> Kappi <span>(south)</span>
                    </h3>
                  </div>
                  <div class="modal-para">
                    <p class="roboto700 text-greenish common-p">Signature paired with the two most iconic flavours of
                      coffee & coconut along with just the right amount of soda!</p>
                  </div>
                  <div class="line bg-greenish"></div>
                  <ul class="modal-recipe-container">
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">60 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Signature</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Coffee</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">30 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Coconut</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Soda</p>
                    </li>
                    <li class="recipe-method">
                      <p class="common-p roboto700 text-greenish">Method – Shaken with ice and served straight.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal fade" id="recipe-modal-4" tabindex="-1" aria-labelledby="recipe-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="modal-left">
                  <img class="lazy" data-src="assets/images/eight-img4.svg" alt="img">
                </div>
              </div>
              <div class="col-md-8">
                <div class="modal-right">
                  <button type="button" class="modal-closebtn" data-bs-dismiss="modal">
                    <img data-src="assets/images/modal-close.svg" class="lazy" alt="close">
                  </button>
                  <div class="modal-label text-greenish gothic">
                    <label>002</label>
                  </div>
                  <div class="modal-heading">
                    <h3 class="text-greenish gothic common-heading-1 changed-heading"> The <br class="breaks">
                      Signature <br class="breaks"> Cutting <span>(west)</span>
                    </h3>
                  </div>
                  <div class="modal-para">
                    <p class="roboto700 text-greenish common-p">A refreshing end to the weekend with Signature pairing
                      beautifully with Kokum and its two best friends, lime & chili</p>
                  </div>
                  <div class="line bg-greenish"></div>
                  <ul class="modal-recipe-container">
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">60 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Signature</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Black masala tea</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">30 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Pineapple</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Touch of jaggery</p>
                    </li>
                    <li class="recipe-method">
                      <p class="common-p roboto700 text-greenish">Method – Shaken with ice and served straight.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal fade" id="recipe-modal-5" tabindex="-1" aria-labelledby="recipe-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="modal-left">
                  <img class="lazy" data-src="assets/images/eight-img5.svg" alt="img">
                </div>
              </div>
              <div class="col-md-8">
                <div class="modal-right">
                  <button type="button" class="modal-closebtn" data-bs-dismiss="modal">
                    <img data-src="assets/images/modal-close.svg" class="lazy" alt="close">
                  </button>
                  <div class="modal-label text-greenish gothic">
                    <label>001</label>
                  </div>
                  <div class="modal-heading">
                    <h3 class="text-greenish gothic common-heading-1">Salty <br class="breaks"> bay </h3>
                  </div>
                  <div class="modal-para">
                    <p class="roboto700 text-greenish common-p">Complementing the fine aromas is the salty sweet syrup
                      made with Himalayan Pink salt and Palm Candy Sugar making this a whole some cocktail that has a
                      depth of flavors and long-lasting finish.</p>
                  </div>
                  <div class="line bg-greenish"></div>
                  <ul class="modal-recipe-container">
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">60 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Signature Premier</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Himalayan Pink Salt & Palm CandySyrup</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">30 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Bay Leaf Water</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Lime Juice</p>
                    </li>
                    <li class="recipe-method">
                      <p class="common-p roboto700 text-greenish">Method – Shaken with ice and served straight.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="modal fade" id="recipe-modal-6" tabindex="-1" aria-labelledby="recipe-modal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4">
                <div class="modal-left">
                  <img class="lazy" data-src="assets/images/eight-img6.svg" alt="img">
                </div>
              </div>
              <div class="col-md-8">
                <div class="modal-right">
                  <button type="button" class="modal-closebtn" data-bs-dismiss="modal">
                    <img data-src="assets/images/modal-close.svg" class="lazy" alt="close">
                  </button>
                  <div class="modal-label text-greenish gothic">
                    <label>002</label>
                  </div>
                  <div class="modal-heading">
                    <h3 class="text-greenish gothic common-heading-1">East India <br class="breaks"> Julep </h3>
                  </div>
                  <div class="modal-para">
                    <p class="roboto700 text-greenish common-p">The flavours of east in west. Kaffir lime &amp; mint
                      cordial taking you back to a more nostalgic time, topped off with a perfect amount of lime juice.
                    </p>
                  </div>
                  <div class="line bg-greenish"></div>
                  <ul class="modal-recipe-container">
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">45 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Signature Premier</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Mint cordial</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">10 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Fresh lime juice</p>
                    </li>
                    <li class="modal-recipe">
                      <div class="quantity text-greenish gothic">90 <span class="roboto">ml</span></div>
                      <p class="name common-p text-greenish">Soda</p>
                    </li>
                    <li class="recipe-method">
                      <p class="common-p roboto700 text-greenish">Method – muddled and built over ice in a tall hi ball
                        glass. Garnish with kaffir lime leaf.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="tab-content tab-container" id="nav-tabContent">
        <div class="tab-pane active show wow fadeInRight" data-wow-duration="2s" id="tab-1" role="tabpanel"
          aria-labelledby="tab-1">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left">
                    <div class="left-img">
                      <img loading="lazy" src="assets/images/eight-img1.svg" alt="img">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-right">
                    <div class="carousel-content">
                      <div class="text-greenish gothic">
                        <label>001</label>
                      </div>
                      <h3 class="text-greenish gothic common-heading-1">signature <br class="breaks"> premier </h3>
                      <p class="roboto700 text-greenish common-p">Crafted from earth-friendly methods, this whiskey
                        unveils a harmonious blend of nature's abundance and silky elegance. </p>
                      <button class="bebas text-lightgreen bg-deepgreen common-btn" data-bs-toggle="modal"
                        data-bs-target="#recipe-modal-1">view recipe</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left">
                    <div class="left-img">
                      <img loading="lazy" src="assets/images/eight-img2.svg" alt="img">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-right">
                    <div class="carousel-content">
                      <div class="text-greenish gothic">
                        <label>002</label>
                      </div>
                      <h3 class="text-greenish gothic common-heading-1">signature <br class="breaks"> rare </h3>
                      <p class="roboto700 text-greenish common-p">Signature Rare reveals an unmistakable depth,
                        weaving
                        a tale of opulence that lingers on the palate, to savor all its layers. </p>
                      <button class="bebas text-lightgreen bg-deepgreen common-btn" data-bs-toggle="modal"
                        data-bs-target="#recipe-modal-2">view recipe</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="tab-pane" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left">
                    <div class="left-img">
                      <img loading="lazy" src="assets/images/eight-img3.svg" alt="img">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-right">
                    <div class="carousel-content">
                      <div class="text-greenish gothic">
                        <label>001</label>
                      </div>
                      <h3 class="text-greenish gothic common-heading-1 changed-heading"> Filter <br class="breaks">
                        Coconut <br class="breaks"> Kappi <span>(south)</span>
                      </h3>
                      <p class="roboto700 text-greenish common-p">Signature paired with the two most iconic flavours
                        of
                        coffee & coconut along with just the right amount of soda!</p>
                      <button class="bebas text-lightgreen bg-deepgreen common-btn" data-bs-toggle="modal"
                        data-bs-target="#recipe-modal-3">view recipe</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left">
                    <div class="left-img">
                      <img loading="lazy" src="assets/images/eight-img4.svg" alt="img">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-right">
                    <div class="carousel-content">
                      <div class="text-greenish gothic">
                        <label>002</label>
                      </div>
                      <h3 class="text-greenish gothic common-heading-1 changed-heading"> The <br class="breaks">
                        Signature <br class="breaks"> Cutting <span>(west)</span>
                      </h3>
                      <p class="roboto700 text-greenish common-p">Taste of Maharashtra with the famous masala tea
                        flavour, a lip smacking mix of pineapple and a touch of Jaggery.</p>
                      <button class="bebas text-lightgreen bg-deepgreen common-btn" data-bs-toggle="modal"
                        data-bs-target="#recipe-modal-4">view recipe</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left">
                    <div class="left-img">
                      <img loading="lazy" src="assets/images/eight-img5.svg" alt="img">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-right">
                    <div class="carousel-content last">
                      <div class="text-greenish gothic">
                        <label>001</label>
                      </div>
                      <h3 class="text-greenish gothic common-heading-1">Salty <br class="breaks"> bay </h3>
                      <p class="roboto700 text-greenish common-p">Complementing the fine aromas is the salty sweet
                        syrup
                        made with Himalayan Pink salt and Palm Candy Sugar making this a whole some cocktail that has
                        a depth of flavors and long-lasting finish.</p>
                      <button class="bebas text-lightgreen bg-deepgreen common-btn" data-bs-toggle="modal"
                        data-bs-target="#recipe-modal-5">view recipe</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="row">
                <div class="col-lg-6">
                  <div class="left">
                    <div class="left-img">
                      <img loading="lazy" src="assets/images/eight-img6.svg" alt="img">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="carousel-right">
                    <div class="carousel-content last">
                      <div class="text-greenish gothic">
                        <label>002</label>
                      </div>
                      <h3 class="text-greenish gothic common-heading-1">East India <br class="breaks"> Julep </h3>
                      <p class="roboto700 text-greenish common-p">The flavours of east in west. Kaffir lime &amp; mint
                        cordial taking you back to a more nostalgic time, topped off with a perfect amount of lime
                        juice.</p>
                      <button class="bebas text-lightgreen bg-deepgreen common-btn" data-bs-toggle="modal"
                        data-bs-target="#recipe-modal-6">view recipe</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================= Section 9 ===================== -->
    <section id="ninth-section" data-bg='assets/images/mixologistbg.svg' class="lazy section common-section">
      <div class="container">
        <div class="ninth-container">

          <div class="row">

            <div class="col-lg-6">
              <div class="left">
                <h2 class="gothic text-greenish common-heading-2 text-center">OUR MIXOLOGISTS</h2>
                <p class="common-p roboto700 text-greenish">Our mixologists elevate libations to liquid art, crafting
                  unforgettable cocktails and drinks that galvanize the senses.</p>
              </div>
            </div>

            <div class="col-lg-6 p-3">
              <?php
              if ($detect->isMobile()) { ?>
                <div class="ninth-carousel">
                  <div class="owl-carousel owl-theme">
                    <div class="item">
                      <div class="ninth-carousel-item">

                        <video class="lazy ninth-video" autoplay muted loop playsinline preload="none"
                          poster="assets/images/ninth-top.webp">
                          <source data-src="assets/videos/ninth-top.mp4" type="video/mp4">
                          <source data-src="assets/videos/ninth-top.webm" type="video/webm">
                          <p>Your browser doesn't support HTML video. Here is a
                            <a href="assets/videos/ninth-top.mp4">link to the video</a> instead.
                          </p>
                        </video>

                      </div>
                    </div>
                    <div class="item">
                      <div class="ninth-carousel-item">

                        <video class="lazy ninth-video" autoplay muted loop playsinline preload="none"
                          poster="assets/images/ninth-bottom-left.webp">
                          <source data-src="assets/videos/ninth-bottom-left.mp4" type="video/mp4">
                          <source data-src="assets/videos/ninth-bottom-left.webm" type="video/webm">
                          <p>Your browser doesn't support HTML video. Here is a
                            <a href="assets/videos/ninth-bottom-left.mp4">link to the video</a> instead.
                          </p>
                        </video>

                      </div>
                    </div>
                    <div class="item">
                      <div class="ninth-carousel-item">

                        <video class="lazy ninth-video" autoplay muted loop playsinline preload="none"
                          poster="assets/images/ninth-bottom-right.webp">
                          <source data-src="assets/videos/ninth-bottom-right.mp4" type="video/mp4">
                          <source data-src="assets/videos/ninth-bottom-right.webm" type="video/webm">
                          <p>Your browser doesn't support HTML video. Here is a
                            <a href="assets/videos/ninth-bottom-right.mp4">link to the video</a> instead.
                          </p>
                        </video>

                      </div>
                    </div>
                  </div>
                </div>

              <?php } else { ?>
                <div class="right">
                  <div class="video-top">
                    <div class="col-12 p-0">
                      <div class="top">
                        <video class="lazy" autoplay muted loop playsinline preload="none"
                          poster="assets/images/ninth-top.webp">
                          <source data-src="assets/videos/ninth-top.mp4" type="video/mp4">
                          <source data-src="assets/videos/ninth-top.webm" type="video/webm">
                          <p>Your browser doesn't support HTML video. Here is a
                            <a href="assets/videos/ninth-top.mp4">link to the video</a> instead.
                          </p>
                        </video>
                      </div>
                    </div>
                  </div>
                  <div class="video-bottom pt-1">
                    <div class="row">
                      <div class="col-7 p-0">
                        <div class="bottom-left">
                          <video class="lazy" autoplay muted loop playsinline preload="none"
                            poster="assets/images/ninth-bottom-left.webp">
                            <source data-src="assets/videos/ninth-bottom-left.mp4" type="video/mp4">
                            <source data-src="assets/videos/ninth-bottom-left.webm" type="video/webm">
                            <p>Your browser doesn't support HTML video. Here is a
                              <a href="assets/videos/ninth-bottom-left.mp4">link to the video</a> instead.
                            </p>
                          </video>
                        </div>
                      </div>
                      <div class="col-5 p-0">
                        <div class="bottom-right">
                          <video class="lazy" autoplay muted loop playsinline preload="none"
                            poster="assets/images/ninth-bottom-right.webp">
                            <source data-src="assets/videos/ninth-bottom-right.mp4" type="video/mp4">
                            <source data-src="assets/videos/ninth-bottom-right.webm" type="video/webm">
                            <p>Your browser doesn't support HTML video. Here is a
                              <a href="assets/videos/ninth-bottom-right.mp4">link to the video</a> instead.
                            </p>
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- ======================= Section 10 ===================== -->
    <section id="tenth-section" data-bg='assets/images/greenbg.svg' class="lazy section common-section common-bg">
      <div class="container">
        <div class="tenth-container">
          <img data-src="assets/images/tenth-top-left.webp" alt="img"
            class="lazy remove-effect top-left wow fadeInUpBig" data-wow-delay="0.1s" data-wow-duration="2s">
          <img data-src="assets/images/tenth-top-right.webp" alt="img"
            class="lazy remove-effect top-right wow fadeInUpBig" data-wow-delay="0.3s" data-wow-duration="2s">
          <div class="remove-effect content wow fadeInUpBig" data-wow-duration="2s">
            <h2 class="gothic text-lightgreen common-heading-2 text-center">Think green drink green</h2>
            <p class="common-p text-whitealter">We take pride in using thoughtfully sourced, sustainable materials to
              serve our drinks. From paper straws to recycled drinkware, we minimize waste without compromising on
              pizzazz. Our commitment to conservation extends to our innovative recycling and composting systems,
              ensuring that nothing goes to waste. Join us for a guilt-free drinking experience that's kind to both the
              planet and your taste buds. Cheers to a greener future, one drink at a time!</p>
          </div>
          <img data-src="assets/images/tenth-bottom-left.webp" alt="img"
            class="lazy remove-effect bottom-left wow fadeInUpBig" data-wow-delay="0.4s" data-wow-duration="2s">
          <img data-src="assets/images/tenth-bottom-right.webp" alt="img"
            class="lazy remove-effect bottom-right wow fadeInUpBig" data-wow-delay="0.6s" data-wow-duration="2s">
        </div>
      </div>
    </section>

    <!-- ======================= Footer Section ===================== -->
    <footer id="footer-section" class="section">
      <div class="container">
        <div class="footer-container">
          <div class="row">
            <div class="col-md-6">
              <div class="left">
                <img class="lazy" data-src="assets/images/bottles.webp" alt="img">
              </div>
            </div>
            <div class="col-md-6">
              <div class="right">
                <img class="lazy" data-src="assets/images/logo.svg" alt="img">
                <h3 class="gothic text-greenish common-heading-1 position-relative">CRAFTED FROM NATURE, <span
                    class="leaf-green"><img class="lazy position-absolute" data-src="assets/images/leaf-green.svg"
                      alt="leaf-img"></span> my signature</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/wow.min.js" type="text/javascript"></script>
  <script src="js/lazyload.min.js" type="text/javascript"></script>
  <script src="js/product.min.js" type="text/javascript"></script>
</body>


</html>
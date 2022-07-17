<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NGOPIKEUN</title>
<!--
NGOPIKEUN Template
http://www.templatemo.com/tm-466-cafe-house
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/templatemo-style.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('admlte/img/AdminLTELogo-backup123.png')}}" type="image/x-icon" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="template/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">NGOPIKEUN</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="{{ route('login') }}">Login</a>
             <!--  <li><a href="#">Register</a> -->
               <!-- <li><a href="menu.html">Menu</a></li> -->
                <li><a href="https://www.instagram.com/mhmmd_fazrhi/?hl=en">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="template/img/light.png" alt="Light" class="light light-1">
          <img src="template/img/light.png" alt="Light" class="light light-2">
          <img src="template/img/light.png" alt="Light" class="light light-3">
        </div>
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="template/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="template/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">NGOPIKEUN</h2>
          <!-- <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a-->
        </div>
        <img src="template/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
      </div>
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
            <h2>NGOPIKEUN</h2>
            <a href="#" class="tm-more-button margin-top-30">Read More</a>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="template/img/1.png" alt="Image" class="img-circle img-thumbnail">
            </div>
          </div>
        </section>
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="template/img/logo.png" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
              <img src="template/img/coffe1.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">B</span>lack Coffe</h3><hr class="tm-popular-item-hr">
                <p></p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>
            </div>
            <div class="tm-popular-item">
              <img src="template/img/coffe2.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">L</span>atte Coffe</h3><hr class="tm-popular-item-hr">

                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>
            </div>
            <div class="tm-popular-item">
              <img src="template/img/coffe3.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">M</span>ocha Coffe</h3><hr class="tm-popular-item-hr">

                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="template/img/logo.png" alt="Logo" class="tm-site-logo"> Today's Special</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> <!-- left -->
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="template/img/special-1.jpg" alt="Special" class="tm-special-img img-responsive">
                  <a href="#">
                    <div class="tm-special-description">
                      <h3 class="tm-special-title">American Cappucino</h3>
                      <p>Rasa sakit itu sendiri adalah cinta, rasa sakit pelanggan.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> <!-- right -->
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="template/img/nasigoreng.jpg" alt="Special" class="img-responsive">
                    <a href="#">
                      <div class="tm-special-description">
                        <h3 class="tm-special-title">Nasi Goreng</h3>
                        <p>Perlakuan yang sopan akan membuat pelanggan menjadi iklan berjalan.</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="template/img/stawberry.jpg" alt="Special" class="img-responsive">
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Juice Strawberry</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="template/img/spagheti.jpg" alt="Special" class="img-responsive">
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Spagheti</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="template/img/logo.png" alt="Logo" class="tm-site-logo"> Daily Menu</h2>
              <div class="tm-hr-container"><hr class="tm-hr"></div>
            </div>
          </div>
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="template/img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">
              </div>
              <div class="col-lg-8 col-md-8">
                <p>Menu harian terbaik hari ini:</p>
                <ol class="margin-top-30">
                  <li>Nasi Goreng</li>
                  <li>Spagheti</li>
                  <li>Black Coffe</li>
                  <li>Latte Coffe</li>
                  <li>Juice Strawberry</li>
                  <li>Juice Alpukat</li>
                </ol>
                <a href="#" class="tm-more-button margin-top-30">Read More</a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="https://mochfazrhiakbari.blogspot.com/">Blog</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">NGOPIKEUN Adalah salah satu tempat ngopi terbaik di GUNUNG PUTRI, BOGOR !</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Silahkan menghubungi kontak di bawah ini.</p>
              <div class="tm-social-icons-container">
                <a href="https://www.facebook.com/moch.fazhriakbari/" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/MochFazhriA" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCtS_JLY8L4SjZLWzjbpivNA" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="https://www.instagram.com/mhmmd_fazrhi/?hl=en" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="container">
          <div class="row tm-copyright">

         </div>
       </div>
     </div>
   </footer> <!-- Footer content-->
   <!-- JS -->
   <script type="text/javascript" src="{{ asset('template/js/jquery-1.11.2.min.js') }}"></script>      <!-- jQuery -->
   <script type="text/javascript" src="{{ asset('template/js/templatemo-script.js') }}"></script>      <!-- Templatemo Script -->

 </body>
 </html>
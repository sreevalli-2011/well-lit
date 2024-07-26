<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>well-lit luminaries</title>


        <!--bootsrap links-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
              <!--google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">

    <!--css links-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    /* Footer Section */
.footer-section {
  background-color: #00205C;
  color: white;
  padding: 40px 0;
}

.footer_top .container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: flex-start;
}

.footer-section .widget {
  margin-bottom: 20px;
}

.footer-section .widget-title {
  font-size: 24px;
  margin-bottom: 20px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li img {
  width: 20px;
  margin-right: 10px;
}

.footer-section .link_widget ul li a {
  color: white;
  text-decoration: none;
}

.footer-section .link_widget ul li a:hover {
  text-decoration: underline;
}

.footer_bottom {
  background-color: #001d4d;
  padding: 20px 0;
  text-align: center;
}

.footer_bottom p {
  margin: 0;
}

.footer_bottom a {
  color: white;
  text-decoration: none;
}

.footer_bottom a:hover {
  text-decoration: underline;
}

.footer-section .shape,
.footer-section .shape-2,
.footer-section .shape-3,
.footer-section .shape-4 {
  display: none; 
}


@media (max-width: 768px) {
  .footer_top .container {
    flex-direction: column;
    align-items: center;
  }

  .footer_top .col-lg-4 {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
  }

  .footer_top .widget_title {
    text-align: center;
  }

  .footer_top iframe {
    width: 100%;
  }
}

hr {
  margin: 1rem 0;
 border: 0;
  border-top: 1px solid rgb(84, 82, 82);
  background-color: transparent; /* temporary color to check visibility */
    height: 1px;
 
}

    </style>
</head>

<body>
    <!--top-->
    <div class="top-bar">
        <div class="left-side">
            <i class="fas fa-phone mobile-icon"></i> <!-- Mobile icon -->
            <span class="mobile-number">Hot-Line: +123 456 7890</span>
            <i class="fas fa-envelope email-icon"></i> <!-- Email icon -->
            <span class="email">emailus: example@example.com</span>
        </div>
        <div class="right-side">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>


  <!--nav and logo-->
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="row w-100">
      <!-- Column 1: Logo -->
      <div class="col-md-3">
        <a class="navbar-brand" href="index.html">
          <img src="assets/images/logo_1.png" alt="Logo" style="width: 75%;">
        </a>
      </div>
      
      <!-- Column 2: Navigation Links -->
      <div class="col-md-7 d-flex justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Our Range Lights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery_main.html">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Column 3: Contact Info -->
      <div class="col-md-2 d-flex align-items-center">
        <div class="header-right">
          <a href="tel:+4733378901" class="call-btn">
            <div class="icon">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="text">
              <span>Phone:</span>
              <p>8553576672</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!--carousel banner-->

<div id="bannerCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#bannerCarousel" data-slide-to="1"></li>
      <li data-target="#bannerCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://example.com/page1">
          <img src="assets/images/banner_1.jpg" class="d-block w-100" alt="Banner 1">
        </a>
      </div>
      <div class="carousel-item">
        <a href="https://example.com/page2">
          <img src="assets/images/banner_2.jpg" class="d-block w-100" alt="Banner 2">
        </a>
      </div>
      <div class="carousel-item">
        <a href="https://example.com/page3">
          <img src="assets/images/banner_3.jpg" class="d-block w-100" alt="Banner 3">
        </a>
      </div>
    </div>
    <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- ==== about section==== -->
<!-- ==== AboutSectionS4 start ==== -->
<section class="about-section-s4 section_space">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-12 wow fadeInLeft" data-wow-delay="300ms"">
        <div class="about-image">
          <img src="assets/images/home_1.jpg" alt="Description of Image" / style="margin-top: 4.5em;padding: 5px;
    border-radius: 10px;
    border: 1px solid #cbc9c9;">>
        </div>
      </div>
      <div class="col-lg-8 col-12">
        <div class="about-content">
          <div class="top_title">
          <span>
                  <img src="assets/images/title-shap-s2.png" alt="" />  
          <span class="text">Well Lit Luminaires LLP</span>
         
            <h2 mt-3>Largetst Manufactures of LED Lights</h2>
           <p class="top_title">
              At Well Lit Luminaires LLP, we specialize in providing high-quality lighting solutions tailored to your needs. Our team combines innovation and technical expertise to deliver exceptional products and services.
            </p>
            <ul>
              <li>Innovative Design Solutions</li>
              <li>Expert Technical Support</li>
              <li>High-Quality Products</li>
              <li>Customized Lighting Solutions</li>
            </ul>
            <h2 style";text-align:center">MASTERING LIGHTS</h2> 
          </div>
        </div>
      </div>
<hr>
      <!--2nd column-->

     <div class="col-lg-8 col-12 mt-5">
        <div class="about-content">
          <div class="top_title">
         
         
            <h2 mt-3>Core Objective of the Company</h2>
         
            <ul class="about-right-content ul li">
              <li>To reduce the carbon foot print on planet</li>
              <li>Environmental Free</li>
              <li>Free from UV Rays</li>
              <li>Reduces the energy Cost </li>
            </ul>
          
          </div>
        </div>
      </div>

     <div class="col-lg-4 col-12 mt-5">
        <div class="about-image">
          <img src="assets/images/globe_1.png" alt="Description of Image" />
        </div>
      </div>

<hr>


  <!--3nd column-->

  <div class="col-lg-8 col-12 mt-5">
        <div class="about-content">
          <div class="top_title">
         
         
            <h2 mt-3>Company Specialization</h2>
         
            <ul class="about-right-content ul li">
              <li>Sports arena</li>
              <li>Gyms & Fitness Centres</li>
              <li>Residential Buildings</li>
              <li>Corporate Offices</li>
              <li>Warehouse</li>
              <li>Factories</li>
             <li>Outdoor Street Lights</li>
            <li>Under Water Lights</li>
          <li>Landscape Lights</li>
          <li>Flame Proof Lights </li>
        <li>Custom Made Lights</li>

            </ul>
          
          </div>
        </div>
      </div>

     <div class="col-lg-4 col-12">
        <div class="about-image">
          <img src="assets/images/copreate_4.jpg" alt="Description of Image" / style="margin-top: 4.5em;padding: 5px;
    border-radius: 10px;
    border: 1px solid #cbc9c9;">>
        </div>
      </div>

    <hr>
   <div class="col-lg-8 col-12 mt-5">
        <div class="about-content">
          <div class="top_title">
         
         
            <h2 mt-3>Application of Products</h2>
         
            <ul class="about-right-content">
              <li>Sports arena</li>
              <li>Gyms & Fitness Centres</li>
              <li>Residential Buildings</li>
              <li>Corporate Offices</li>
              <li>Warehouse</li>
              <li>Factories</li>
             <li>Outdoor Street Lights</li>
            <li>Under Water Lights</li>
          <li>Landscape Lights</li>
          <li>Flame Proof Lights </li>
        <li>Custom Made Lights</li>

            </ul>
          
          </div>
        </div>
      </div>

     <div class="col-lg-4 col-12">
        <div class="about-image">
          <img src="assets/images/collage.jpg" alt="Description of Image" / style="margin-top: 4.5em;padding: 5px;
    border-radius: 10px;
    border: 1px solid #cbc9c9;">
        </div>
      </div>

<hr>

</div>
  </div>

</section>
<!-- ==== gallery images ==== -->




   <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-12">
      <div class="top_title text-center" style="margin-top:-50px">
        <span>
          <img src="assets/images/title-shap-s2.png" alt="" />
          WELL LIT LUMINAIRES LLP
        </span>
        <h2>Our Product Range</h2>
      </div>
    </div>
  </div>
  <div class="wraper mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="single-item">
          <img src="assets/images/Led_2.jpg">
          <div class="sub-title">
            <a class="custom-link" href="#" style="color:black;">Panel Light</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
          </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>
      <!-- Repeat similar structure for other products -->
      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_3.jpg">
          <div class="sub-title">
            <a class="custom-link" href="#" style="color:black;">Badminton Courts LED Lights</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
            </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>
      <!-- Add more products here -->

      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_25.jpg">
          <div class="sub-title mt-3">
            <a class="custom-link" href="#" style="color:black;">Solor LED Street Lights</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
          </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_29.jpg">
          <div class="sub-title mt-3">
            <a class="custom-link" href="#" style="color:black;">Led Panel Light</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/imge_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
          </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_6.jpg">
          <div class="sub-title">
            <a class="custom-link" href="#"  style="color:black;">Flood Light</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
          </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_7.jpg">
          <div class="sub-title">
            <a class="custom-link" href="#" style="color:black;">Foodball Ground Led Lights</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
          </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>



      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_26.jpg">
          <div class="sub-title mt-3">
            <aLight class="custom-link" href="#"  style="color:black;">Alminium Light</a>
            <div class="button1">
           <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none;">Add</a>
          <a href="image_gallery/image_gallery.php" class="btn_primary" style="color: white; font-size: 14px; text-decoration: none; margin-top: 0.5em;">Delete</a>
          </div>
          </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>




      <div class="col-lg-3 col-md-6 col-12 wow fadeInUp animated">
        <div class="single-item">
          <img src="assets/images/Led_9.jpg">
          <div class="sub-title mt-3">
            <a class="custom-link" href="#"  style="color:black;">Panel Light</a>
            <div class="button1">
              <button class="btn_primary" type="submit"><a href="#" style="color: white;font-size: 14px;">Add</a></button>
              <button class="btn_primary" type="submit" style="margin-top: 0.5em;"><a href="#" style="color: white;font-size: 14px;">Delete</a></button>
            </div>
          <div class="shape">
            <img src="assets/images/shape-3.png" alt="" />
          </div>
        </div>
      </div>


</div>
    <div class="bottom-text">
      <span>Bring them together and you overcome the ordinary.
        <a href="#"><strong>View More Products</strong> <i class="ti-plus"></i></a>
      </span>
    </div>
  </div>
</div>
</div>


<!--footer-->

<footer class="footer-section mt-5">
  <div class="footer_top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 mr-md-3">
          <div class="widget about_widget">
            <div class="logo widget-title">
              <img src="assets/images/logo_1.png" alt="blog" />
            </div>
            <ul>
              <li>
                <img src="assets/images/ft-icon/mail.svg" alt="" />
                hvk.welllit@gmail.com
              </li>
              <li style="margin-top: 0.5em;">
                <img src="assets/images/ft-icon/call-2.svg" alt="" />8553576672
              </li>
              <li style="margin-top: 0.5em;">
                <img src="assets/images/ft-icon/location.svg" alt="" />Well Lit Luminaires LLP,<br> 100, Krishna Temple Rd,<br> Doddabommasandra, Bengaluru, <br>Karnataka 560097
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 mt-5">
          <div class="widget link_widget">
            <div class="widget_title">
              <h3 style="color:white;">Quick Links</h3>
            </div>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
              <li><a href="products.html">Our Light Range</a></li>
              <li><a href="our_clients.html">Clients</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 mt-5">
          <div class="widget newsletter">
            <div class="widget_title">
              <h3  style="color:white;">Location</h3>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248789.59230552934!2d77.48870840091355!3d13.014174440598653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae23d1ce705f69%3A0xbf94483816a896ba!2sWell%20Lit%20Luminaires%20LLP!5e0!3m2!1sen!2sin!4v1720612609231!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col col-xs-12">
          <p class="copyright">
            &copy;2024 <a href="index.html">Well Lit Luminaires LLP</a> .All
            Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="shape">
    <img src="assets/images/site-footer-shape.png" alt="" />
  </div>
  <div class="shape-2">
    <img src="assets/images/site-footer-shape-2.png" alt="" />
  </div>
  <div class="shape-3">
    <img src="assets/images/site-footer-shape-3.png" alt="" />
  </div>
  <div class="shape-4">
    <img src="assets/images/site-footer-shape-4.png" alt="" />
  </div>
</footer>



    <!--js files-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>







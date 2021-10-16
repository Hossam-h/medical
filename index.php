<?php  require 'config.php';  ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--start swibber.css-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--end swibber.css-->
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/all.min.css">
    
      <link rel="stylesheet" href="<?php echo ASSETS; ?>css/home2.css">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Home Page</title>
  </head>
  <body>
       
 <div class="upper-bar">
        <div class="container">
          <div class="row">
    
            <div class="col-sm  text-sm-left">
              <i class="fas fa-phone-alt"></i> 5050505088900 , <i class="far fa-envelope"></i> hossam@mail.com
            </div>
    
          
          </div>
    
        </div>
      </div>
    <!--End upper-->
    
    <!--start navbar-->
       
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?php echo BU ?>"><span>Medi</span><span>Health</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BU ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about" >about</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="#Connact">Connact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#order">Order service</a>
              </li>
              
            </ul>
  
          </div>
        </div>
    
  </nav>
  <!--end navbar-->


  <!--start slider-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">
      <div class="overlay"></div>
      <div class="carousel-item one active">
        <img src="<?php echo ASSETS; ?>/images/medicalservice.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item two">
        <img src="<?php echo ASSETS; ?>/images/medicalservice.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item three">
        <img src="<?php echo ASSETS; ?>/images/medicalservice.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item four">
        <img src="<?php echo ASSETS; ?>/images/medicalservice.jpg" class="d-block w-100" alt="...">
      </div>
    
    </div>
  </div>

  <div class="scroll-to">
    <i class="fas fa-arrow-up"></i>
  </div>
  <!--End slieder-->

<!-- start about us-->

<div class="header">
<div class="container">
 <h2>
   ABOUT US
 </h2>
</div>
</div>

<div class="about_us" id="about">
   <div class="container">
     <div class="row">
         <div class="about_us_text col-sm-12 col-md-12 col-lg-6 wow animate__animated animate__fadeInUp">
           <p>
            <?php 
           echo getrows('about_us','id',1 ) ['about']
            ?>
           </p>
         </div>

         <div class="about_us_image col-sm-12 col-md-12 col-lg-6 wow animate__animated animate__fadeInUp">
            <img src="<?php echo ASSETS; ?>/images/doctor.jpg" alt="">
        </div>
     </div>

   </div>
</div>

  

<!-- end about us-->
        <div class="cont-main" id="order" style="background:url(<?php echo ASSETS .'images/bg-1.jpg';?>)">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
   
                <form class="row" method="POST" action="<?php echo 'validate_insert.php' ?>"  >
                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">

                            <label for="serv" class="font-1">Choose Service</label>
                            <select name="service" id="serv" class="form-control font-1">
                            
                                <?php foreach(getrow_all('service') as $serv ) { ?>

            <option value="<?php echo $serv['serv_id']; ?>" ><?= $serv ['serv_name'] ?></option>

                                    <?php } ?>
                            
                            </select>
                            
                        </div>
                    </div>


                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">

                            <label for="serv" class="font-1">Choose City</label>
                            <select name="city" id="serv" class="form-control font-1">
                                <?php foreach(getrow_all('cities') as $city ) { ?>
                                       <option value="<?php echo $city['city_id'] ?>"><?= $city['city_name'] ?></option>

                                    <?php } ?>
                                
                            </select>
                            
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">Type Your Name *</label>
                            <input type="text" name="name"  class="form-control font-1 bg-base">
                            
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">Type Your Email</label>
                            <input type="email" name="email"  class="form-control font-1 bg-base">
                            
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">Type Your Mobile *</label>
                            <input type="text" name="mobile"  class="form-control font-1 bg-base">
                            
                        </div>
                    </div>
                    



                    <div class="col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">Type Notes</label>
                            <textarea name="notes"  class="form-control font-1 bg-base"  rows="5"></textarea>
                            
                        </div>
                    </div>



                    
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success form-control">Send</button>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--swib-->
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-001.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-002.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-003.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-004.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-005.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-006.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-007.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-008.jpg"
            />
          </div>
          <div class="swiper-slide">
            <img
              src="https://cdn.magloft.com/github/swiper/images/page-009.jpg"
            />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-scrollbar"></div>
        <div class="swiper-pagination"></div>
      </div>



<!--start footer-->
<div class="footer" id="Connact" style="margin-top:0px;">
  <div class="container">

    <div class="row">

      <div class=" col-md-6 col-lg-5">
        <div class="site-info">
    <span>Medi</span><span>Health</span>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
    </p>
    <a href="#">Read more</a>
        </div>
      </div>

      <div class=" col-md-5 col-lg-4">
        <div class="help-fullinks">
          <h2>helpful links</h2>
        <div class="row">
          <div class="col-6">
          <ul>
              <li><i class="fas fa-chevron-right"></i> About</li>
              <li><i class="fas fa-chevron-right"></i>Team</li>
              <li><i class="fas fa-chevron-right"></i>Protofolio</li>
              <li><i class="fas fa-chevron-right"></i>Pricing</li>
          </ul>
          </div>
          <div class="col-6">
            <ul>
            <li><i class="fas fa-chevron-right"></i>F & Q</li>
            <li><i class="fas fa-chevron-right"></i>Blog</li>
            <li><i class="fas fa-chevron-right"></i>Benefit</li>
            <li><i class="fas fa-chevron-right"></i>connact</li>
          </ul>
          </div>
        </div>
        </div>
      </div>

      <div class=" col-md-3 col-lg-3">
        <div class="connact"> 
          <h2>Connact us</h2>
       <p>5799 levo RoadNear readfort. US</p>
       <p>phone: 5050505088900</p>
       <p>Email: <a href="">hossam@mail.com</a></p>

        </div>
      </div>

    </div>
        
  </div>

    <div class="copywrite row">
        <div class="col-md-6">
          <p>copywrite 2017 Elitcrop | ALL WRITE RESERVED</p>
        </div>

          <div class="col-md-6">
            <div class="socialli">
              <i class="fab fa-facebook-square"></i> 
              <i class="fab fa-twitter-square"></i>
              <i class="fab fa-linkedin"></i>
            </div>
          </div>
  </div> 

</div>
<!--end footer-->

<!--end footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  
  <script src="<?php echo ASSETS; ?>/js2/jquery-3.6.0.min.js"></script>  
  <script src="<?php echo ASSETS; ?>/js2/bootstrap.min.js"></script> 
  <script src="<?php echo ASSETS; ?>/js2/poper.min.js"></script>
  <script src="<?php echo ASSETS; ?>/js/home1.js"></script>
    <!--start swibbber js-->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>  
    <!--ens swibbber js-->
     <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          slidesPerGroup: 3,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>


    
    
  </body>
</html>
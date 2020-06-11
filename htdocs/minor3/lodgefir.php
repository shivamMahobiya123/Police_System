
<!doctype html>
<html lang="en">
  <head>
    <title>FIR sys -LodgeFir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
     background: #fff000 fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}


</style>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">FIR system</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#portfolio-section" class="nav-link">Women & SC/ST</a></li>
                <li><a href="#services-section" class="nav-link">Public Awarness</a></li>
                <!--<li><a href="#testimonials-section" class="nav-link">Polics Units</a></li>-->
                <!--<li><a href="#blog-section" class="nav-link">Blog</a></li>--->
                <li><a href="#contact-section" class="nav-link">Helpline Numbers</a></li>
                <li><button  class="nav-link btn btn-outline-danger"><a href="logout.php"> Logout</a></button></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase" data-aos="fade-up">Apply for Fir</h1>
            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">
            Be sure everyting should be correct, incorrect informartion will commit crime upon you

            </p>
          </div>            
        </div>
      </div>
    </div>
      
    <div class="container" style="font-size:10px" >
            <form class="form-horizontal" role="form" action="lodgefirdb.php" method="POST">
                <h4 style="color:orange">Submit Complaint information form:</h4>
                <h6 style="color:limegreen">Submit to Police Station</h6>
                
                <div class="form-group">
                    <label for="Distname" class="col-sm-3 control-label">District Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="Distname" name="districtname" placeholder="Jabalpur" value="Jabalpur" class="form-control" disabled autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Policest" class="col-sm-3 control-label">Police Station</label>
                    <div class="col-sm-9">
                          <select name="policest" id="policest" name="policest" class="form-control" autofocus>
                            <option  class="form-control" disabled>none</option>
                            <option value="Jabalpur" value="Tilwara PS" class="form-control">Police St. Tilwara</option>
                          </select>    
                    </div>
                </div>
                <hr class="bg-warning">
                <h4 style="color:orange">Details of complaint/information to Police:</h4>
                <div class="form-group">
                  <label for="complaintype" class="col-sm-3 control-label">Complaint Type</label>
                  <div class="col-sm-9">
                  <select class="form-control" id="complaintype" name="complaintype" autofocus>
                    <option disabled>Select category</option>
                    <option value="Murder">Murder</option>
                    <option value="Child Abuse">Child Abuse</option>
                    <option value="Family Problem">Family Problem</option>
                    <option value="Women harrest">Women harrest</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Occurence Date*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="occr_date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                   <label for="details" class="col-sm-3 control-label">Details:</label>
                   <div class="col-sm-9">
                  <textarea class="form-control" rows="10" id="comment" name="details" required></textarea>
                  </div>
                 </div>
                 <div class="form-group">
                   <label for="details" class="col-sm-3 control-label">Suspects Details:</label>
                   <div class="col-sm-9">
                  <textarea class="form-control" rows="5" id="comment" name="Suspectdetails" required></textarea>
                  </div>
                 </div>
                 <hr class="bg-warning">

                <h3 style="color:orange">Your Details</h3>
                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <p class="form-control" ><?php  $_SESSION['fullname']?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" name="gender" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->

                <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label">Father/Husband Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="fname" name="faname" placeholder="Enter father/husband " class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="identity" class="col-sm-3 control-label">Identification</label>
                  <div class="col-sm-9">
                  <select class="form-control" id="identity" name="identity" autofocus required>
                    <option disabled>Select category</option>
                    <option value="Aadhar">Aadhar</option>
                    <option value="PenCard">PenCard</option>
                    <option value="VoterId">VoterId</option>
                    </select>
                  </div>
                </div>

                
                <div class="form-group">
                    <label for="caste" class="col-sm-3 control-label" required>Identity no</label>
                    <div class="col-sm-9">
                        <input type="text" id="caste" name="id_no" placeholder="Enter Identity no" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="caste" class="col-sm-3 control-label" required>Caste</label>
                    <div class="col-sm-9">
                        <input type="text" id="caste" name="caste" placeholder="Enter caste" class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                   <label for="Paddres" class="col-sm-3 control-label">Permanent Address:</label>
                   <div class="col-sm-9">
                  <textarea class="form-control" rows="5" id="comment" name="paddress" required></textarea>
                  </div>
                 </div>
                
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact No </label>
                    <div class="col-sm-9">
                    <p class="form-control" ><?php  $_SESSION['mobile']?></p>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="emails" placeholder="Enter Email" class="form-control" name= "email">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <h5 class="help-block text-danger">** ***   I hereby declare, the above given data is correct.I shall responsible for incorrect</h5>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Apply now</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>FIR system lodge case file by own </p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | For <i class="icon-heart text-danger" aria-hidden="true"></i><a href="#" target="_blank" >MP Police</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" />
    <title>DeepForecasting</title>
</head>
<body>

    <nav class="navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img class="img-responsive" src="<?php echo base_url();?>asset/images/logo.jpg"><span><h1>D-<span id="brand">Forecast</span></h1></span>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active" id="home"><a href="#" id="main">Home</a></li>
              <li id="fea"><a href="#features" id="fe">Features</a></li>
              <li><a href="trend.html" id="fe">Trend</a></li>
              <li id="account"><a href="login-signup.html">Account</a></li>
              <li id="conta"><a href="#contact" id="cont">Contact us <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a>
              </li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav> <!-- End Navbar -->


      <!-- main body -->
      <section id="main-body-img">

  <article id="main-slider">
      <!--carousel slider -->

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo base_url();?>asset/images/slider/2.jpeg" class="img-responsive" alt="slide-image-1">
              <div class="carousel-caption">
                <span id="deep">Deep</span><span id="forcast">Forcast</span>
                <p class="lead">Track the present. See the future.</p>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo base_url();?>asset/images/7.jpg" class="img-responsive" alt="slide-image-3">
              <div class="carousel-caption cap-3">
                  <p>You Can Now Access Our Service For Free,You Just need To Register To Our Site</p>
                  <a href="#" class="btn btn-primary">Login</a>
                  <a href="#" class="btn btn-success">Register</a>
                  <p class="social">
                    <a href="#" class="btn btn-primary"><span><i class="fa fa-twitter icon"></i></span>Follow</a>
                    <a href="#" class="btn btn-primary facebook"><span><i class="fa fa-thumbs-up icon"></i></span>Like</a>
                  </p>
              </div>
          </div>
            <div class="item">
                <img src="<?php echo base_url();?>asset/images/slider/3.jpeg" class="img-responsive" alt="slide-image-2">

            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- End carousel slider -->
    </article>
      </section>
      <!-- Features section -->
      <div class="container-fluid section-title">
        <p class="lead text-center">The Intersection OF Fintech And Machine Learning.</p>
      </div>
      <section id="features" class="container">
        <div class="row">
          <h3 class="text-center feat">Features</h3>
          <p class="lead text-center features-detail">DeepForecast has some features. find below some of these features</p>
          <div class="col-md-4 text-center">
            <img src="<?php echo base_url();?>asset/images/features/1.png">
            <h3>Quarter results</h3>
            <p>DeepForecast can measure quarter sales 30 days before they are officially released by the public company, outperforming analysts’ predictions</p>
          </div>
          <div class="col-md-4 text-center">
              <img src="<?php echo base_url();?>asset/images/features/2.png">
              <h3>Market Share</h3>
              <p>By analyzing panelists transactions in our Machine Learning-powered engine, DeepForecast can calculate near real-time market share data between competitors</p>
          </div>
          <div class="col-md-4 text-center">
              <img src="<?php echo base_url();?>asset/images/features/3.png">
              <h3>Industrywide analysis</h3>
              <p>DeepForecast can provide valuable information on industrywide trends: from sales declines to purchasing patterns based on demographics </p>
          </div>
        </div>
      </section> <!-- end features section -->
      <!-- Newsletter section -->
      <section class="home-newsletter">
          <div class="container">
          <div class="row">
          <div class="col-sm-12">
            <div class="single">
              <h2 class="text-center news-head">Subscribe to our Newsletter</h2>
            <div class="input-group">
              <input type="email" class="form-control user-email" placeholder="Enter your email">
              <span class="input-group-btn">
              <button class="btn btn-theme" type="submit">Subscribe</button>
              </span>
            </div>
            </div>
          </div>
          </div>
          </div>
          </section>
      <!-- End newsletter section -->

      <!-- result section -->
      <section class="product-result">
        <div class="container">
          <span class="products">Product Results</span>
          <div class="row">
            <div class="col-xs-4">
              <h3 class="products-title">REAL TIME DATA ON EXCEL</h3>
              <p class="products-detail">We make our data available on your Excel spreadsheet. You can retrieve any data with a simple formula.</p>
              <div class="row">
                  <div class="col-xs-12">
                      <h3 class="products-title">DF DASHBOARD</h3>
                      <p class="products-detail">All the data is available in real time on a customizable dashboard that you can browse from any device.</p>
                  </div>
                  <div class="col-xs-12">
                      <h3 class="products-title">DATA API</h3>
                      <p class="products-detail">Our daily data is cleaned, normalized, post processed and aggregated in several formats for you to download and analyze.</p>
                  </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-offset-2 product-logo text-center">
              <img src="<?php echo base_url();?>asset/images/tech-trends.jpg"/>
              <a href="#" class="btn btn-primary access-btn">Access Now</a>
            </div>
          </div>
        </div>
      </section> <!-- end result section -->
      <section class="location" id="contact">
        <div class="container">
          <h2 style="color:rgba(211, 213, 219, 0.753)">Contact US</h2>
          <div class="row">
            <div class="col-md-6 google-image">
              <img src="<?php echo base_url();?>asset/images/google-maps.jpg" />
            </div>
            <div class="col-md-5 col-md-offset-1 contact-us">
              <div class="input-group">
                  <input type="text" class="form-control inputs" placeholder="Name" aria-describedby="basic-addon1">
                  <input type="email" class="form-control inputs" placeholder="Email" aria-describedby="basic-addon2">
                  <textarea class="form-control" placeholder="Write Your Message"></textarea>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- footer -->
      <footer>
          <section class="top-footer">
              <div class="container">
                  <div class="row">
                      <div class="social-title col-md-4 hidden-sm hidden-xs">
                          <h5>Get Connected With us on Social networks!</h5>
                      </div>
                      <div class="social-title col-xs-12 text-center-xs visible-sm visible-xs">
                              <h5>Get Connected With us on Social networks!</h5>
                      </div>
                      <div class="social-links col-xs-offset-2 col-md-6 hidden-xs hidden-sm text-center">
                          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                          <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                          <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                      </div>

                      <div class="visible-xs visible-sm col-xs-12 social-links text-center-xs">
                          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                          <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                          <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                          <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                      </div>
                  </div>
              </div>
          </section><!-- End top-footer -->
          <section class="btm-footer">
              <div class="container">
                  <div class="row mt">
                      <div class="col-md-3 col-xs-12">
                          <h5><strong>Company</strong></h5>
                          <hr class="ft-hr">
                          <p> By leveraging those insights and our Machine Learning Engine, we create predictive models than can answer multiple questions within the financial sector</p>
                      </div>
                      <div class="col-md-4 col-md-offset-2 col-xs-12 ft-p">
                          <h5><strong>Useful Links</strong></h5>
                          <hr class="ft-hr">
                              <p><a href="#">Your Account</a></p>
                              <p><a href="#">Become a Member</a></p>
                              <p><a href="#">Help</a></p>
                      </div>
                      <div class="col-md-3 col-xs-12 ft-p">
                          <h5><strong>Contact</strong></h5>
                          <hr class="ft-hr">
                          <p><i class="fa fa-envelope"></i>&nbsp;&nbsp; Info@example.com</p>
                          <p><i class="fa fa-phone"></i>&nbsp;&nbsp; +0123456789</p>
                          <p><i class="fa fa-print"></i>&nbsp;&nbsp; +0123456789</p>
                      </div>
                  </div>
              </div>
          </section>
          <section class="copyright">
              <div class="container">
                  <div class="col-xs-12 text-center">
                      &copy; 2018 Copyright:Team 7
                  </div>
              </div>
          </section>
     </footer>













    <script src="<?php echo base_url('asset/js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/main.js'); ?>"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120909275-1"
    type="90c5de628179a35087670abc-text/javascript"></script>
  <script type="90c5de628179a35087670abc-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120909275-1');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Osahan Fashion - Bootstrap 4 E-Commerce Theme">
  <meta name="keywords"
    content="Osahan, fashion, Bootstrap4, shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
  <meta name="author" content="Askbootstrap">
  <title>Osahan Fashion - Bootstrap 4 E-Commerce Theme</title>

  <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
  <link rel="icon" type="image/png" href="images/favicon.png">

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/mobile.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/icofont.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">

  <style>
    .shadow {

      box-shadow: 0px 8px 11px 0px rgba(0, 0, 0, 0.11);
      -webkit-box-shadow: 0px 8px 11px 0px rgba(0, 0, 0, 0.11);
      -moz-box-shadow: 0px 8px 11px 0px rgba(0, 0, 0, 0.11);
    }


    .card-cursor {
      cursor: pointer;
    }

    .card-cursor:hover {
      border: 1px solid #ff00004a !important;
    }

    #btn-back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
    }


    #loading {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: #ffffff;
      z-index: 99999;
    }

    .load-circle {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      width: 150px;
      height: 100px;
    }

    .loader {
      width:28px;
      height: 28px;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      background: linear-gradient(0deg, rgba(255, 61, 0, 0.2) 33%, #ff3d00 100%);
      box-sizing: border-box;
      animation: rotation 1s linear infinite;
      margin: 3px;
    }

    .loader::after {
      content: '';
      box-sizing: border-box;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #ffffff;
    }

    @keyframes rotation {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }


    .btn-a:hover  {
     color: white!important;
    }

  </style>
</head>


<?php 
  session_start();
  require_once 'vendor/autoload.php';

   //composer require google/apiclient:^2.15.0

  // crear Api Keys en google para signg up y habiliar los permisos de redireccinamiento por url 

  $clientID = '402042152092-569dap3jp571c2qiauvfpnf7ki0ik3bh.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/clarotpp/login.php'; // configuracion de redireccionamiento si el login es correcto
   
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");



  // facebook
  /// composer require facebook/graph-sdk


  $fb = new Facebook\Facebook([
    'app_id' => '6617581711685775',
    'app_secret' => 'e546aa72259ddb546c9505ac21d67579',
    'default_graph_version' => 'v12.0',
]);


$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl('http://localhost/clarotpp/loginfacebook.php');

?>

<body>

  <div id="loading" style="display: block;">
    <div class="load-circle" style="text-align: center;">
      <div style="text-align: center;">
        <img src="images/logo.png" style="width: 40px;" class="img-fluid" style="text-align: center;">
      </div>
      <div style="margin-top: 10px; ">
        
        <span class="loader"></span>
        <span class="loader"></span>
        <span class="loader"></span>
      </div>

    </div>
  </div>
  <div class="modal fade login-modal-main" id="bd-example-modal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="login-modal">
            <div class="row">
              <div class="col-lg-6 pad-right-0">
                <div class="login-modal-left">
                </div>
              </div>
              <div class="col-lg-6 pad-left-0">
                <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <form>
                  <div class="login-modal-right">

                    <div class="tab-content">
                      <div class="tab-pane active" id="login" role="tabpanel">
                        <h5 class="heading-design-h5">Login to your account</h5>
                        <fieldset class="form-group">
                          <label for="formGroupExampleInput">Enter Email/Mobile number</label>
                          <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="+91 123 456 7890">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="formGroupExampleInput2">Enter Password</label>
                          <input type="password" class="form-control" id="formGroupExampleInput2"
                            placeholder="********">
                        </fieldset>
                        <fieldset class="form-group">
                          <button type="submit" class="btn btn-lg btn-theme-round btn-block">Enter to your
                            account</button>
                        </fieldset>
                        <div class="login-with-sites text-center">
                          <p>or Login with your social profile:</p>
 
                            <a  class="btn-facebook login-icons btn-lg btn-a " href='<?=   $loginUrl ?>'> <i class="fa fa-facebook"></i>Facebook</a>
                          

                            <a  class="btn-google login-icons btn-lg btn-a " href='<?= $client->createAuthUrl() ?>'> <i class="fa fa-google"></i> Google Login</a>
                          
                          <button class="btn-twitter login-icons btn-lg"><i class="fa fa-twitter"></i> Twitter</button>
                        </div>
                        <p>
                        <p><label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me </span>
                          </label>
                        </p>
                        </p>
                      </div>
                      <div class="tab-pane" id="register" role="tabpanel">
                        <h5 class="heading-design-h5">Register Now!</h5>
                        <fieldset class="form-group">
                          <label for="formGroupExampleInput">Enter Email/Mobile number</label>
                          <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="+91 123 456 7890">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="formGroupExampleInput2">Enter Password</label>
                          <input type="password" class="form-control" id="formGroupExampleInput2"
                            placeholder="********">
                        </fieldset>
                        <fieldset class="form-group">
                          <label for="formGroupExampleInput3">Enter Confirm Password </label>
                          <input type="password" class="form-control" id="formGroupExampleInput3"
                            placeholder="********">
                        </fieldset>
                        <fieldset class="form-group">
                          <button type="submit" class="btn btn-lg btn-theme-round btn-block">Create Your
                            Account</button>
                        </fieldset>
                        <p>
                          <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">I Agree with Term and Conditions </span>
                          </label>
                        </p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center login-footer-tab">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i
                              class="icofont icofont-lock"></i> LOGIN</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#register" role="tab"><i
                              class="icofont icofont-pencil-alt-5"></i> REGISTER</a>
                        </li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 text-left">
          <p>
            End Of Reason Sale- Get Min <span class="text-danger">40- 80%</span> off!
          </p>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 text-right">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#"><i class="icofont icofont-iphone"></i> +1-123-456-7890</a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="icofont icofont-headphone-alt"></i> Contact Us</a>
            </li>
            <li class="list-inline-item">
              <span>Download App</span> &nbsp;
              <a href="#"><i class="icofont icofont-brand-windows"></i></a>
              <a href="#"><i class="icofont icofont-brand-apple"></i></a>
              <a href="#"><i class="icofont icofont-brand-android-robot"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  -->
  <nav class="navbar navbar-light navbar-expand-lg bg-primary bg-faded osahan-menu osahan-menu-top-3  sticky-top  ">
    <div class="container">
      <a class="navbar-brand" href="index.html"> <img src="images/logo-white.png" alt="logo"> </a>
      <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto top-categories-search-main">
          <div class="top-categories-search">
            <div class="input-group">
              <input class="form-control" placeholder="Search products & brands" aria-label="Search products & brands"
                type="text">
              <span class="input-group-btn">
                <button class="btn btn-dark" type="button"><i class="icofont icofont-search-alt-2"></i> Search</button>
              </span>
            </div>
          </div>
        </div>
        <div class="my-2 my-lg-0">
          <ul class="list-inline main-nav-right">
            <li class="list-inline-item dropdown osahan-top-dropdown">
              <a class="btn btn-danger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="icofont icofont-shopping-cart"></i> Cart <small class="cart-value">02</small>
              </a>
              <div class="dropdown-menu dropdown-menu-right cart-dropdown">
                <div class="dropdown-item">
                  <a class="pull-right" data-toggle="tooltip" data-placement="top" title href="#"
                    data-original-title="Remove">
                    <i class="fa fa-trash-o"></i>
                  </a>
                  <a href="#">
                    <img class="img-fluid" src="images/all-products/small/1.jpg" alt="Product">
                    <strong>Ipsums Dolors Untra </strong>
                    <small>Color : Red | Size : M</small>
                    <span class="product-price text-danger">$329.99</span>
                  </a>
                </div>
                <div class="dropdown-item">
                  <a class="pull-right" data-toggle="tooltip" data-placement="top" title href="#"
                    data-original-title="Remove">
                    <i class="fa fa-trash-o"></i>
                  </a>
                  <a href="#">
                    <img class="img-fluid" src="images/all-products/small/3.jpg" alt="Product">
                    <strong>Ipsums Dolors Untra </strong>
                    <small>Color : Black | Size : XL</small>
                    <span class="product-desc-price">$82.99</span>
                    <span class="product-price text-danger">$36.99</span>
                  </a>
                </div>
                <div class="dropdown-item">
                  <a class="pull-right" data-toggle="tooltip" data-placement="top" title href="#"
                    data-original-title="Remove">
                    <i class="fa fa-trash-o"></i>
                  </a>
                  <a href="#">
                    <img class="img-fluid" src="images/all-products/small/2.jpg" alt="Product">
                    <strong>Ipsums Dolors Untra </strong>
                    <small>Color : white | Size : L</small>

                    <span class="product-price text-danger">$20.99</span>
                  </a>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-cart-footer text-center">
                  <h4> <strong>Subtotal</strong>: $210 </h4>
                  <a class="btn btn-sm btn-danger" href="view-cart.html"> <i class="icofont icofont-shopping-cart"></i>
                    VIEW
                    CART </a> <a href="cart_checkout.html" class="btn btn-sm btn-primary"> CHECKOUT </a>
                </div>
              </div>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-danger" data-toggle="modal" data-target="#bd-example-modal" href="#"><i
                  class="icofont icofont-ui-user"></i> Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="owl-carousel owl-carousel-slider">
    <div class="item">
      <a href="#"><img class="d-block img-fluid" src="images/grid-slider/slider1.jpg" alt="First slide"></a>
    </div>
    <div class="item">
      <a href="#"><img class="d-block img-fluid" src="images/grid-slider/slider1.jpg" alt="First slide"></a>
    </div>
    <div class="item">
      <a href="#"><img class="d-block img-fluid" src="images/grid-slider/slider1.jpg" alt="First slide"></a>
    </div>
  </div>

  <section class="featured-products">
    <div class="container">
      <div class="section-header">
        <h5 class="heading-design-h5" style="color:black">Ofertas</h5>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div id="owl-carousel-featured" class="owl-carousel owl-carousel-featured">
            <div class="item">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-danger offer-badge">HOT</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/1.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title="Add To Cart"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title="View Detail"
                        class="btn btn-theme-round btn-sm" href="shop-detail.html"><i
                          class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$529.99</span>
                      <span class="product-price">$329.99</span>
                      <span class="product-discount">30% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-info offer-badge">NEW</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/2.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title="Add To Cart"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title="View Detail"
                        class="btn btn-theme-round btn-sm" href="shop-detail.html"><i
                          class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$329.00</span>
                      <span class="product-price">$201.00</span>
                      <span class="product-discount">10% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="h-100">
                <div class="product-item pro">
                  <span class="badge badge-primary offer-badge">30% OFF</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/3.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title="Add To Cart"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title="View Detail"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$229.00</span>
                      <span class="product-price">$101.00</span>
                      <span class="product-discount">20% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-default offer-badge">NEW</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/4.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title="Add To Cart"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title="View Detail"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$200.00</span>
                      <span class="product-price">$100.00</span>
                      <span class="product-discount">50% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-warning offer-badge">OFFERS</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/5.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title="Add To Cart"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title="View Detail"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$430.00</span>
                      <span class="product-price">$350.00</span>
                      <span class="product-discount">20% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-success offer-badge">50% OFF</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/6.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title="Add To Cart"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title="View Detail"
                        class="btn btn-theme-round btn-sm" href="#"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$630.00</span>
                      <span class="product-price">$350.00</span>
                      <span class="product-discount">5% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="categories-list">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h5 class="heading-design-h5">Featured Items <a href="user-login.html" class="btn btn-warning pull-right">Show
              More Items <b>24727</b> <i class="fa fa-arrow-right"></i></a>
          </h5>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/1.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$329.00</span>
                      <span class="product-price">$201.00</span>
                      <span class="product-discount">10% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-danger offer-badge">50% OFF</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/1.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$529.99</span>
                      <span class="product-price">$329.99</span>
                      <span class="product-discount">30% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/4.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$630.00</span>
                      <span class="product-price">$350.00</span>
                      <span class="product-discount">5% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/11.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$229.00</span>
                      <span class="product-price">$101.00</span>
                      <span class="product-discount">20% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/12.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$329.00</span>
                      <span class="product-price">$201.00</span>
                      <span class="product-discount">10% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/8.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$529.99</span>
                      <span class="product-price">$329.99</span>
                      <span class="product-discount">30% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/4.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$630.00</span>
                      <span class="product-price">$350.00</span>
                      <span class="product-discount">5% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-success offer-badge">50% OFF</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/7.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$229.00</span>
                      <span class="product-price">$101.00</span>
                      <span class="product-discount">20% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/1.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$329.00</span>
                      <span class="product-price">$201.00</span>
                      <span class="product-discount">10% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <span class="badge badge-danger offer-badge">50% OFF</span>
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/1.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$529.99</span>
                      <span class="product-price">$329.99</span>
                      <span class="product-discount">30% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/4.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$630.00</span>
                      <span class="product-price">$350.00</span>
                      <span class="product-discount">5% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="h-100">
                <div class="product-item">
                  <div class="product-item-image">
                    <a href="#"><img class="card-img-top img-fluid" src="images/all-products/11.jpg" alt></a>
                  </div>
                  <div class="product-item-body">
                    <div class="product-item-action">
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                      <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                        data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                    </div>
                    <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                    <h5>
                      <span class="product-desc-price">$229.00</span>
                      <span class="product-price">$101.00</span>
                      <span class="product-discount">20% Off</span>
                    </h5>
                  </div>
                  <div class="product-item-footer">
                    <div class="product-item-size">

                    </div>
                    <div class="stars-rating">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="hot-offers">
    <div class="container">
      <div class="section-header">
        <h5 class="heading-design-h5">
          Mas vendidos
          <div class="pull-right" id="countdown"></div>
        </h5>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="h-100">
            <div class="product-item">
              <div class="product-item-image">
                <a href="#"><img class="card-img-top img-fluid" src="images/men/small/2.jpg" alt></a>
              </div>
              <div class="product-item-body">
                <div class="product-item-action">
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                </div>
                <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                <h5>
                  <span class="product-desc-price">$329.00</span>
                  <span class="product-price">$201.00</span>
                  <span class="product-discount">10% Off</span>
                </h5>
              </div>


            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="h-100">
            <div class="product-item">
              <div class="product-item-image">
                <a href="#"><img class="card-img-top img-fluid" src="images/all-products/small/1.jpg" alt></a>
              </div>
              <div class="product-item-body">
                <div class="product-item-action">
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                </div>
                <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                <h5>
                  <span class="product-desc-price">$529.99</span>
                  <span class="product-price">$329.99</span>
                  <span class="product-discount">30% Off</span>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="h-100">
            <div class="product-item">
              <div class="product-item-image">
                <a href="#"><img class="card-img-top img-fluid" src="images/all-products/small/4.jpg" alt></a>
              </div>
              <div class="product-item-body">
                <div class="product-item-action">
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                </div>
                <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                <h5>
                  <span class="product-desc-price">$630.00</span>
                  <span class="product-price">$350.00</span>
                  <span class="product-discount">5% Off</span>
                </h5>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="h-100">
            <div class="product-item">
              <div class="product-item-image">
                <a href="#"><img class="card-img-top img-fluid" src="images/women/small/3.jpg" alt></a>
              </div>
              <div class="product-item-body">
                <div class="product-item-action">
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="Add To Cart"><i class="icofont icofont-shopping-cart"></i></a>
                  <a data-toggle="tooltip" data-placement="top" title class="btn btn-theme-round btn-sm" href="#"
                    data-original-title="View Detail"><i class="icofont icofont-search-alt-2"></i></a>
                </div>
                <h4 class="card-title"><a href="#">Ipsums Dolors Untra</a></h4>
                <h5>
                  <span class="product-desc-price">$229.00</span>
                  <span class="product-price">$101.00</span>
                  <span class="product-discount">20% Off</span>
                </h5>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="container">
      <div class="section-header">
        <h5 class="heading-design-h5">Marcas reconocidas</h5>
      </div>
      <div class="row text-center">
        <div class="col-lg-2 col-md-2 col-sm-2">
          <a href="#"><img class="img-responsive" src="images/brands/1.jpg" alt></a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <a href="#"><img class="img-responsive" src="images/brands/2.jpg" alt></a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <a href="#"><img class="img-responsive" src="images/brands/3.jpg" alt></a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <a href="#"><img class="img-responsive" src="images/brands/4.jpg" alt></a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <a href="#"><img class="img-responsive" src="images/brands/5.jpg" alt></a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
          <a href="#"><img class="img-responsive" src="images/brands/6.jpg" alt></a>
        </div>
      </div>
    </div>
  </section>

  <section class="hot-offers text-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="text-center fw-bold  " style="font-size: 1.5rem;color:black;">Queremos darte lo mejor</p>
          <p class="text-center mb-1 " style="font-size: 1rem;margin-bottom: 1rem;"> Disfruta de una mejor experienca de
            compra. Conoce algunos de los beneficos que tenemos para ti.</p>
          <br>
          <div class="row text-center">


            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="card shadow rounded mb-2  card-cursor  " style="background-color: #f5f5f5;border: 0;">
                <div class="card-body" style="padding-bottom: 1px; padding-left:3px;padding-right: 3px;">
                  <p style="color: red;"> <i class="fa  fa-map-o fa-2x"></i> </p>
                  <p style="color: black;">Tracking Pedido</p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="card shadow rounded mb-2  card-cursor  " style="background-color: #f5f5f5;border: 0;">
                <div class="card-body" style="padding-bottom: 1px; padding-left:3px;padding-right: 3px;">
                  <p style="color: red;"> <i class="fa  fa-home fa-2x"></i> </p>
                  <p style="color: black;">Retiro gratis </p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="card shadow rounded mb-2 card-cursor   " style="background-color: #f5f5f5;border: 0;">
                <div class="card-body" style="padding-bottom: 1px; padding-left:3px;padding-right: 3px;">
                  <p style="color: red;"> <i class="fa  fa-percent  fa-2x"></i> </p>
                  <p style="color: black;">Promociones</p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="card shadow rounded mb-2   card-cursor " style="background-color: #f5f5f5;border: 0;">
                <div class="card-body" style="padding-bottom: 1px; padding-left:3px;padding-right: 3px;">
                  <p style="color: red;"> <i class="fa fa-cart-plus fa-2x"></i> </p>
                  <p style="color: black;">Compra fácil y seguro </p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="card shadow rounded mb-2   card-cursor " style="background-color: #f5f5f5;border: 0;">
                <div class="card-body" style="padding-bottom: 1px; padding-left:3px;padding-right: 3px;">
                  <p style="color: red;"> <i class="fa fa-credit-card  fa-2x"></i> </p>
                  <p style="color: black;">Métodos de pago </p>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="card shadow rounded mb-2 card-cursor  " style="background-color: #f5f5f5;border: 0;">
                <div class="card-body" style="padding-bottom: 1px; padding-left:3px;padding-right: 3px;">
                  <p style="color: red;"> <i class="fa fa-phone  fa-2x"></i> </p>
                  <p style="color: black;">Contáctenos</p>
                </div>
              </div>
            </div>





          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .menu li {
      width: 100% !important;
    }

    .btn-outline-light:hover {
      color: #000 !important;
    }
  </style>

  <footer>

    <section class="footer-Content">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title mb-3 ">Nuestra Compañía</h3>
              <ul class="menu " style="height: 80px;">
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="#">Sucursales</a></li>

              </ul>


              <b class="text-white  " style="margin-top: 1rem;">Metodos de pago </b>
              <div>
                <img src="./images/m1.png" style="max-width: 60px;margin-bottom: 4px;">
                <img src="./images/m2.png" style="max-width: 60px;margin-bottom: 4px;">
                <img src="./images/m3.png" style="max-width: 60px;margin-bottom: 4px;">
                <img src="./images/m4.png" style="max-width: 60px;margin-bottom: 4px;">
              </div>


            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title mb-3 ">Acceso rapido</h3>
              <ul class="menu ">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Seguimiento de pedido</a></li>
                <li><a href="#">Tienda virtual</a></li>
                <li><a href="#">Facturación</a></li>
                <li><a href="#">Terminos y condiciones </a></li>
                <li><a href="#">Delivery </a></li>
                <li><a href="#">Contáctenos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title mb-3 ">Categories</h3>
              <ul class="menu">
                <li><a href="#">Celulares</a></li>
                <li><a href="#">Tablets </a></li>
                <li><a href="#">Auricurales </a></li>
                <li><a href="#">Parlantes </a></li>
                <li><a href="#">Radio </a></li>
                <li><a href="#">Planes </a></li>
                <li><a href="#">Ver mas... </a></li>

              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title mb-3 ">Atención del cliente</h3>
              <div>
                <p> +01 523 - 6666 </p>
                <p> +01 523 - 6666 </p>

                <p>Lun-Sab de 9:00 am - 6:00pm </p>
                <p>correo@gmail.com </p>
                <hr>
                <button type="button" class="btn btn-outline-light w-100">Seguimiento de pedido </button>
              </div>

            </div>
          </div>



        </div>
      </div>
    </section>
  </footer>
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="footer-logo pull-left hidden-xs" style="min-width: 0px;">
            <img alt src="images/logo.png" style="width: 30px;" class="img-responsive">
          </div>
          <div class="copyright">
            <p style="margin-top: 0.5rem;">© Copyright 2023 | &nbsp;Made with LLAKER +capito

            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 text-right">
          <div class="social-icon">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/popper.min.js" type="text/javascript"></script>
  <script src="plugins/tether/tether.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

  <script src="js/custom.js" type="text/javascript"></script>


  <script src="plugins/owl-carousel/owl.carousel.js" type="text/javascript"></script>
  <script src="js/rocket-loader.min.js" data-cf-settings="90c5de628179a35087670abc-|49" defer></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon='{"rayId":"822facf2cb2a9543","version":"2023.10.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}'
    crossorigin="anonymous"></script>

  <script type="text/javascript">

    $(document).ready(function () {
      console.log("entra");

      $("#alertModal").modal("show");



      let mybutton = document.getElementById("btn-back-to-top");

      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      mybutton.addEventListener("click", backToTop);

      function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      $("#loading").css("display", "none");

    });




  </script>

  <style>
    .modal-backdrop {
      background-color: #0000003b !important;
    }

    .modal-dialog {
      min-height: calc(100vh - 120px);
      display: flex;
      flex-direction: column;
      justify-content: center;
      overflow: auto;
    }

    @media(max-width: 768px) {
      .modal-dialog {
        min-height: calc(100vh - 20px);
      }
    }
  </style>

  <div class="modal fade" id="alertModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

      <div class="modal-content">
        <div class="modal-header pb-1 pt-1 border-0">
          <h5 class="modal-title" id="exampleModalLongTitle"> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <H1> imagen aqui</H1>
          <H1> imagen aqui</H1>

          <H1> imagen aqui</H1>
          <H1> imagen aqui</H1>
          <H1> imagen aqui</H1>
          <H1> imagen aqui</H1>
          <H1> imagen aqui</H1>
        </div>

      </div>
    </div>
  </div>

  <button type="button" class="btn btn-danger rounded-circle  btn-floating btn-lg" id="btn-back-to-top">
    <i class="fa fa-arrow-up"></i>
  </button>

</body>

<!-- Mirrored from askbootstrap.com/preview/osahan-fashion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 17:53:56 GMT -->

</html>
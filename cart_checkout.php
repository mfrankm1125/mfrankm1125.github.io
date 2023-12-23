<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/osahan-fashion/cart_checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 17:54:12 GMT -->

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120909275-1"
    type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>
  <script type="1046a36e9bdc1e2bbb99f5bb-text/javascript">
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


</head>

<body>
  <script src="https://checkout.culqi.com/js/v4"></script>
  <script>
    Culqi.publicKey = 'pk_test_f8e2981b9eaef61f';
  </script>

<script>



  function culqi() {
    if (Culqi.token) {  // ¡Objeto Token creado exitosamente!
      const token = Culqi.token.id;
      console.log('Se ha creado un Token: ', token);
      //En esta linea de codigo debemos enviar el "Culqi.token.id"
      //hacia tu servidor con Ajax
    } else if (Culqi.order) {  // ¡Objeto Order creado exitosamente!
      const order = Culqi.order;
      console.log('Se ha creado el objeto Order: ', order);

    } else {
      // Mostramos JSON de objeto error en consola
      console.log('Error : ',Culqi.error);
    }
  };



</script>

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
                          <button class="btn-facebook login-icons btn-lg"><i class="fa fa-facebook"></i>
                            Facebook</button>
                          <button class="btn-google login-icons btn-lg"><i class="fa fa-google"></i> Google</button>
                          <button class="btn-twitter login-icons btn-lg"><i class="fa fa-twitter"></i> Twitter</button>
                        </div>
                        <p><label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me </span>
                          </label>
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
              <span class="input-group-btn categories-dropdown">
                <select class="form-control">
                  <option selected="selected">All Categories</option>
                  <optgroup label="Men's">
                    <option value="0">Footwear</option>
                    <option value="2">Bags & Luggage</option>
                    <option value="3">Clothing</option>
                    <option value="4">Watches</option>
                  </optgroup>
                  <optgroup label="Women's">
                    <option value="5">Fashion Jewellery </option>
                    <option value="6">Bags & Luggage </option>
                    <option value="4">Watches</option>
                  </optgroup>
                </select>
              </span>
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
                    <span class="product-desc-price">$529.99</span>
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
                    <span class="product-desc-price">$29.99</span>
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
  <div class="osahan-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="icofont icofont-ui-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active">Page Name</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <section class="shopping_cart_page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="checkout-step mb-40">
            <ul>
              <li>
                <a href="cart_delivery.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span>
                </a>
              </li>
              <li>
                <a href="cart_order.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span>
                </a>
              </li>
              <li class="active">
                <a href="cart_checkout.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span>
                </a>
              </li>
              <li>
                <a href="cart_done.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 mx-auto">
          <div class="widget">
            <div class="section-header section-header-center text-center">
              <h3 class="heading-design-center-h3">
                Seleccione metodo de pago
              </h3>
            </div>
            <form class="col-lg-8 col-md-8 mx-auto">
              <div class="payment-menthod text-center">
                <ul>
                  <li><a class="active" href="#"><i class="icofont icofont-paypal-alt"></i></a>
                  </li>
                  <li><a href="#"><i class="icofont icofont-visa-alt"></i></a>
                  </li>
                  <li><a href="#"><i class="icofont icofont-mastercard-alt"></i></a>
                  </li>
                  <li><a href="#"><i class="icofont icofont-google-wallet-alt-1"></i></a>
                  </li>
                  <li><a href="#"><i class="icofont icofont-american-express-alt"></i></a>
                  </li>
                </ul>
              </div>
              <div class="form-group">
                <label class="control-label">Número tarjeta </label>
                <input class="form-control border-form-control" value placeholder="0000 0000 0000 0000" type="text">
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="control-label">Mes</label>
                    <input class="form-control border-form-control" value placeholder="01" type="text">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="control-label">Año</label>
                    <input class="form-control border-form-control" value placeholder="15" type="text">
                  </div>
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label class="control-label">CVV</label>
                    <input class="form-control border-form-control" value placeholder="135" type="text">
                  </div>
                </div>
              </div>
              <hr>
              <label class="custom-control custom-radio">
                <input id="radioStacked3" name="radio-stacked" class="custom-control-input" type="radio">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description"><strong>Le gustaría pagar en efectivo en
                  Entrega?</strong></span>
              </label>
              <p>Terminos y condiciones escribir aqui... </p>
              

              <button type="button" id="btn_pagar" class="btn btn-theme-round btn-lg pull-right">Pagar</button>
              <a href="cart_done.html" class="btn btn-theme-round btn-lg pull-right">Siguiente</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="top-brands">
    <div class="container">
      <div class="section-header">
        <h5 class="heading-design-h5">Top Brands <span class="badge badge-primary">200 Brands</span></h5>
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
  <footer>
    <section class="footer-Content">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title">About</h3>
              <div class="textwidget">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod
                  purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, Sed ex est, consectetur eget
                  consectetur, Lorem ipsum dolor sit amet...</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title">Categories</h3>
              <ul class="menu">
                <li><a href="#"><span>562</span> Footwear </a></li>
                <li><a href="#"><span>451</span> Luggage </a></li>
                <li><a href="#"><span>352</span> Clothing </a></li>
                <li><a href="#"><span>312</span> Eyewear </a></li>
                <li><a href="#"><span>262</span> Watches</a></li>
                <li><a href="#"><span>152</span> Jewellery </a></li>
                <li><a href="#"><span>352</span> Clothing </a></li>
                <li><a href="#"><span>312</span> Eyewear </a></li>
                <li><a href="#"><span>262</span> Watches</a></li>
                <li><a href="#"><span>152</span> Jewellery </a></li>
                <li><a href="#"><span>562</span> Footwear </a></li>
                <li><a href="#"><span>451</span> Bags</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title">Latest Post</h3>
              <ul class="blog-footer">
                <li>
                  <a href="#">Lorem ipsum dolor sit amet, quem...</a>
                  <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> March 12, 2017</span>
                </li>
                <li>
                  <a href="#">Full Width Media Post Lorem ipsum..</a>
                  <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> September 25, 2017</span>
                </li>
                <li>
                  <a href="#">Perfect Video Post Lorem ipsum..</a>
                  <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> November 19, 2017</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="footer-widget">
              <h3 class="block-title">Quick Links</h3>
              <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Retunrs</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Advertise With Us</a></li>
              </ul>
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
          <div class="footer-logo pull-left hidden-xs">
            <img alt src="images/footer-logo.png" class="img-responsive">
          </div>
          <div class="footer-links">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">New Collection</a></li>
              <li><a href="#">Mens Collection</a></li>
              <li><a href="#">Women Dresses</a></li>
              <li><a href="#">Kids Collection</a></li>
            </ul>
          </div>
          <div class="copyright">
            <p>© Copyright 2018 Osahan Fashion.&nbsp; | &nbsp;Made with <i class="fa fa-heart"></i>
              by
              <a target="_blank" href="https://www.facebook.com/iamgurdeeposahan">
                <strong>Osahan Studio</strong>
              </a>
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
  <section class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 text-left">
          <div class="payment-menthod">
            <img alt src="images/payment_methods.png">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 text-right">
          <strong>Download App &nbsp; </strong>
          <a href="#"><img alt src="images/app-store.png"></a>
          <a href="#"><img alt src="images/google-play.png"></a>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>
  <script src="js/popper.min.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>
  <script src="plugins/tether/tether.min.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>
  <script src="js/bootstrap.min.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>

  <script src="js/custom.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>

  <link href="plugins/select2/css/select2.min.css" rel="stylesheet" />
  <script src="plugins/select2/js/select2.min.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>

  <script src="plugins/owl-carousel/owl.carousel.js" type="1046a36e9bdc1e2bbb99f5bb-text/javascript"></script>
  <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="1046a36e9bdc1e2bbb99f5bb-|49" defer></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon='{"rayId":"822fad24191d9543","version":"2023.10.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","b":1}'
    crossorigin="anonymous"></script>

    <script>

      

  const btn_pagar = document.getElementById('btn_pagar');

btn_pagar.addEventListener('click', function (e) {
    // Abre el formulario con la configuración en Culqi.settings y CulqiOptions

    Culqi.settings({
    title: 'Culqi Store',
    currency: 'PEN',  // Este parámetro es requerido para realizar pagos yape
    amount: 1000,  // Este parámetro es requerido para realizar pagos yape
    order: 'ord_test_xjmEW4dIyJM9G4cc', // Este parámetro es requerido para realizar pagos con pagoEfectivo, billeteras y Cuotéalo
    xculqirsaid: 'Inserta aquí el id de tu llave pública RSA',
    rsapublickey: 'Inserta aquí tu llave pública RSA',
  });

  Culqi.options({
    lang: "auto",
    installments: false, // Habilitar o deshabilitar el campo de cuotas
    paymentMethods: {
      tarjeta: true,
      yape: true,
      bancaMovil: true,
      agente: true,
      billetera: true,
      cuotealo: true,
    },
  });


  
    Culqi.open();
    e.preventDefault();
});



    </script>
</body>

<!-- Mirrored from askbootstrap.com/preview/osahan-fashion/cart_checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 17:54:12 GMT -->

</html>
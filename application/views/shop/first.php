<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Online shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="http://localhost/ONLINE_SHOP/public/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="http://localhost/ONLINE_SHOP/public/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="http://localhost/ONLINE_SHOP/public/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="http://localhost/ONLINE_SHOP/public/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="http://localhost/ONLINE_SHOP/public/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->



      <style>
          .img{
              height: auto;
              width: 100px;
          }
          .logo{
            background-color: tomato;
  color: red;
  border: 2px solid black;
  margin: 5px;
  padding: 5px;
  margin-left: 0;
  height: 100px;
  width: 100px;

          }
          .carousel-inner img {
    width:auto;
    height:100%;
  }
  .space{
      padding: 50px;
      padding-left: 10px;
      margin-top: 25px;

      margin: 20px;
  }
  .navbar-fnt{
      color: darksalmon;
  }
          </style>
</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="http://localhost/ONLINE_SHOP/public/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
<!-- Header -->

<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo">
								<a href="#">
                                <img src="http://localhost/ONLINE_SHOP/public/images/images.png" alt="logo">

									<!-- <div>ONLINE  </div>
									<div>SHOP</div> -->
								</a>
                            </div>
     <nav class="navbar navbar-expand-lg navbar-light navbar-fnt bg-danger">
  <a class="navbar-brand" href="#">Online  Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Furniture
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture">Sofa</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture">Table</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture">Chair</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture">Cabinetry</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture">Bed</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/furniture">Dining</a>



        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Living
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">Sofa</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">Love seat, chaise</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">Chairs, recliners</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">Coffee table</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">sofa table</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">Decorative pillows</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">floor pillows</a>
          <a class="dropdown-item" href="http://localhost/ONLINE_SHOP/index.php/ShopController/living">Sofa blankets</a>


        </div>
      </li> 


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bedroom
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Single Bed</a>
          <a class="dropdown-item" href="#">Double Bed</a>
          <a class="dropdown-item" href="#"> BedSide Table</a>
          <a class="dropdown-item" href="#">Folding Bed</a>
          <a class="dropdown-item" href="#">Bunk Bed</a>
          <a class="dropdown-item" href="#">Queen size Bed</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Sofa cum Bed</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kids Roon
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Study Table</a>
          <a class="dropdown-item" href="#">Bunk Bed</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Book Shelves</a>
          <a class="dropdown-item" href="#">Art Easels</a>
          <a class="dropdown-item" href="#">Cribes</a>
        </div>
      </li>


           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mattress
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="#">Single Bed Mattress</a>
          <a class="dropdown-item" href="#">Double Bed Mattress</a>
          <a class="dropdown-item" href="#"> BedSide Table Mattress</a>
          <a class="dropdown-item" href="#">Foldable Mattress</a>
          <a class="dropdown-item" href="#">Bunk Bed Mattress</a>
          <a class="dropdown-item" href="#">Queen size Bed Mattress</a>
          <a class="dropdown-item" href="#">Kids Mattress</a>
          <a class="dropdown-item" href="#">Pillows</a>


        </div> </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Furnishing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bed Sheet</a>
          <a class="dropdown-item" href="#">Bed Cover</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Blanket</a>
          <a class="dropdown-item" href="#">Pillows</a>
          <a class="dropdown-item" href="#">Pillow Cover</a>
          <a class="dropdown-item" href="#">Carpet</a>
          <a class="dropdown-item" href="#">Door Mates</a>


        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Decor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Table Decor</a>
          <a class="dropdown-item" href="#">Photo Frames</a>
          <a class="dropdown-item" href="#">Artificial Flowers</a>

          <a class="dropdown-item" href="#">Modern Clock</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#"> Painting</a>
          <a class="dropdown-item" href="#">Plants, Pots & Planters</a>
          <a class="dropdown-item" href="#">Lamp &Lighting</a>

          <a class="dropdown-item" href="#">Small Fountains</a>

        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lighting
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item" href="#">Headlamp (outdoor)</a>
          <a class="dropdown-item" href="#">Lantern</a>
          <a class="dropdown-item" href="#">Solar lamp</a>

          <a class="dropdown-item" href="#">Navigation light</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Glow stick</a>
        </div>
      </li> 

      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<a href="#" class="btn btn-info btn-lg">
<i class="fa fa-shopping-cart" aria-hidden="true"></i>
Shopping Cart
        </a>

                            
                        </div>
                    </div>
                </div>
            </div>

  <!-- The slideshow -->
  <div id="demo" class="carousel slide" data-ride="carousel">



<!-- !-- Indicators --> -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
  <li data-target="#demo" data-slide-to="3"></li>
  <li data-target="#demo" data-slide-to="4"></li>
  <!-- <li data-target="#demo" data-slide-to="5"></li> -->

</ul>

<!-- // -->
  




<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="http://localhost/ONLINE_SHOP/public/images/interior-designs-hd-pics-home-furniture-design-kitchenagenda-com-5b63b6059c484.jpg" alt="Los Angeles">
  </div>
  <div class="carousel-item">
    <img src="http://localhost/ONLINE_SHOP/public/images/melodia-dining-set-o.jpg" alt="Chicago">
  </div>
  <div class="carousel-item">
    <img src="http://localhost/ONLINE_SHOP/public/images/libraries-19_wm.jpg" alt="New York">
  </div>
  <div class="carousel-item">
    <img src="http://localhost/ONLINE_SHOP/public/images/thumb-1920-261476.jpg" alt="New York">
  </div>
  <div class="carousel-item">
    <img src="http://localhost/ONLINE_SHOP/public/images/12.jpeg" alt="New York">
  </div>
  <!-- <div class="carousel-item">
    <img src="http://localhost/ONLINE_SHOP/public/images/12.jpg" alt="New York">
  </div> -->
</div>





 <!-- Left and right controls -->
 <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- // -->



		


    <div class="wrapper">


        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active"> <a href="index.html">Home</a></li>
                    <li> <a href="about.html">About</a></li>
                    <li> <a href="product.html">Product</a></li>
                    <li> <a href="blog.html">Blog</a></li>
                    <li> <a href="contact.html">Contact us</a></li>

                </ul>

            </nav>
        </div>
      						 
        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <!-- <div class="header"> -->

                    <div class="container-fluid">

                        <div class="row">
                            <!-- <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="index.html"><img src="http://localhost/ONLINE_SHOP/public/images/1.jpg" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="http://localhost/ONLINE_SHOP/public/images/1.jpg" alt="#" /></a>
                                        </li>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="http://localhost/ONLINE_SHOP/public/images/2.jpg" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="http://localhost/ONLINE_SHOP/public/images/3.jpg" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="http://localhost/ONLINE_SHOP/public/images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                                <div class="text-bg">
                                    <h1>The latest <br> <strong class="black_bold">furniture Design</strong><br></h1>
                                    <a href="#">Shop Now <i class='fa fa-angle-right'></i></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="text-img">
                                    <figure><img src="http://localhost/ONLINE_SHOP/public/images/bg.jpg" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- discount -->
            <div class="container">
                <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="http://localhost/ONLINE_SHOP/public/images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="http://localhost/ONLINE_SHOP/public/images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption text">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                            <div class="img_bg">
                                                <h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                            <div class="img_bg">
                                                <figure><img src="http://localhost/ONLINE_SHOP/public/images/discount.jpg" /></figure>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end discount -->
            <!-- trending -->
            <div class="trending">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Trending <strong class="black">Categories</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="http://localhost/ONLINE_SHOP/public/images/1.jpg" /></figure>
                                <h3>Outdoor</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="trending-box">
                                <figure><img src="http://localhost/ONLINE_SHOP/public/images/2.jpg" /></figure>
                                <h3>Living Room</h3>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                            <div class="trending-box">
                                <figure><img src="http://localhost/ONLINE_SHOP/public/images/3.jpg" /></figure>
                                <h3>Bedroom Lighting</h3>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end trending -->

            <!-- our brand -->
            <div class="brand">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Featured <strong class="black">Brands</strong></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="brand-bg">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/Avangarda_klu.jpg" /></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/bg.jpg" /></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/sofa-fix-10.png" /></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/images.jfif" /></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end our brand -->
            <!-- map -->
            <div class="contact">
                <div class="container-fluid padddd">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="title">
                                <h2>Contact <strong class="black">Us</strong></h2>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                            <div class="map_section">
                                <div id="map">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
                            <form class="main_form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end map -->
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="border1">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                                    <img class="logo1" src="http://localhost/ONLINE_SHOP/public/images/logo1.jpg" />
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <ul class="lik">
                                        <li> <a href="index.html">Home</a></li>
                                        <li> <a href="about.html">About</a></li>
                                        <li> <a href="product.html">Product</a></li>
                                        <li> <a href="blog.html">Blog</a></li>
                                        <li> <a href="contact.html">Contact us</a></li>
                                    </ul>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                    <ul class="sociel">
                                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new">
                                    <h3>Newsletter</h3>
                                    <form class="newtetter">
                                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                        <button class="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="newtt">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point
                                        <br> of using Lorem I</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="copyright">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
                    </div>

                </div>

            </footer>
            <!-- end footer -->
        </div>

    </div>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="http://localhost/ONLINE_SHOP/public/js/jquery.min.js"></script>
    <script src="http://localhost/ONLINE_SHOP/public/js/popper.min.js"></script>
    <script src="http://localhost/ONLINE_SHOP/public/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost/ONLINE_SHOP/public/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="http://localhost/ONLINE_SHOP/public/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://localhost/ONLINE_SHOP/public/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'http://localhost/ONLINE_SHOP/public/images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->

</body>

</html>
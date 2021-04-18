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
          <a class="dropdown-item" href="#">Sofa</a>
          <a class="dropdown-item" href="#">Table</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Chair</a>
          <a class="dropdown-item" href="#">Cabinetry</a>
          <a class="dropdown-item" href="#">Bed</a>
          <a class="dropdown-item" href="#">Dining</a>



        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Living
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sofa</a>
          <a class="dropdown-item" href="#">Love seat, chaise</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Chairs, recliners</a>
          <a class="dropdown-item" href="#">Coffee table</a>
          <a class="dropdown-item" href="#">sofa table</a>
          <a class="dropdown-item" href="#">Decorative pillows</a>
          <a class="dropdown-item" href="#">floor pillows</a>
          <a class="dropdown-item" href="#">Sofa blankets</a>


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




            <div class="container-fluid">
                <div class="brand-bg">
                    <div class="row">
                    <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/data_study-table_jerold-study-table_updated_walnut_front.jpg" /></i>
                                <h3>Study table</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/nakamura-study-table-with-cabinet-in-wenge-finish-by-mintwud-nakamura-study-table-with-cabinet-in-we-gkuozn.webp" /></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/custom.jpg" /></i>
                                <h3>Jane Lauren Design Chair</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/data_sofa-beds_sereta-sofa-cum-bed_updated_honey_front-h-574x396.jpg" /></i>
                                <h3>Royal Sofa SEt</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/folding-bed-500x500.jpg" /></i>
                                <h3>Victorian Classic Sofa set</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/Study-Table-for-Kids-Chair.jpg" /></i>
                                <h3>Wooden Box Bed </h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/kid-bedrooms-03.jpg" /></i>
                                <h3>Nilkamal Jenn Dining Table</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/ssqwqxe-500x500.jpg" /></i>
                                <h3>Thomas Wall Mounted table</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/BED/kids-room-interiors-500x500.jpg" /></i>
                                <h3>Modern Queen Bed</h3>
                                <span>$80.00</span> <a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/fashion_sofa_hd_picture_167714 (1).jpg" /></i>
                                <h3>Appolo Sofa Set</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/images.jfif" /></i>
                                <h3>OutDoor  Coffe table</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/GST-Rate-for-Wood-and-Wooden-Furniture.jpg" /></i>
                                <h3>wooden Chair</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/download (2).jfif" /></i>
                                <h3>The Loveseat / Sofa</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/unnamed.jpg" /></i>
                                <h3>califorinian bed</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/8091-BED.jpg" /></i>
                                <h3>King Size Bed</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                    <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/screen-5.jpg" /></i>
                                <h3>cabinetry kitchen</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/download (3).jfif" /></i>
                                <h3>Open Storage Cabinetry</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="brand-box">
                                <i><img src="http://localhost/ONLINE_SHOP/public/images/ee0786b634d0feea5c2fe285e04ab41e.jpg" /></i>
                                <h3>Modern Wooden Cabinetry</h3>
                                <span>$80.00</span><a href="http://localhost/HOTEL_RESERVATION/index.php/HotelController/Room" class="btn btn-success">Buy</a>
                            </div>
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
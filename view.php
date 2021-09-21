<!DOCTYPE html>
<html lang="en-US">


<!-- page-about-us01:28-->
<head>
    <title>View | Trinity</title>
   
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,500,600,700,400i,500%7CDancing+Script:700%7CDancing+Script:700%7CGreat+Vibes:400%7CPoppins:400%7CDosis:800%7CRaleway:400,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/view_style.css">

    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">

    

    <!-- jquery library  -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- fontawesome  -->
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <style>
    #SupplierDetails{
        /* border: 1px solid black; */
        /* padding-left: 5px; */
        /* font-size: 12px; */
        /* background-color: grey; */
    }
    </style>
   
    <script>
        function showUser() {
          var ViewOption = document.getElementById("View_options").value;
        //   var job = document.getElementById("job").value;
          var xmlhttp = new XMLHttpRequest();
        
        //   xmlhttp.open("GET","access.php?name="+name+"&job="+job,true);
          xmlhttp.open("GET","access.php?view="+ViewOption,true);
          xmlhttp.send();
            
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("resultData").innerHTML = this.responseText;
              }
            };
            
          }
        
        </script>

</head>

<body>
    <!--  Header  -->
    <header class="background-grey-3">
        <div class="header-output">
            <div class="header-output">
                <div class="header-in">

                    <!-- Up Head -->
                    <div class="up-head d-none d-lg-block background-grey-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-4"><i class="fa fa-phone margin-right-10px"></i> +91 98497 65344 </div>
                                        <div class="col-md-4"><i class="fa fa-envelope-o margin-right-10px"></i> info@trinity.com</div>
                                        <div class="col-md-4"><i class="fa fa-map-marker margin-right-10px"></i> VIT-AP University, Amaravati</div>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- lang dropdown -->
                                            <div class="dropdown show">
                                                <a class="dropdown-toggle text-white text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-us margin-right-8px"></span> English
                              </a>

                                                <div class="dropdown-menu text-small text-uppercase" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es margin-right-8px"></span> Spanish</a>
                                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-mr margin-right-8px"></span> Arabic</a>
                                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr margin-right-8px"></span> French</a>
                                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de margin-right-8px"></span> German</a>
                                                </div>
                                            </div>
                                            <!-- // lang dropdown -->

                                        </div>

                                        <div class="col-lg-6">
                                            <!--  Social -->
                                            <ul class="social-media list-inline text-right margin-0px text-white">
                                                <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <!-- // Social -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Up Head -->
                    <div class="container">
                        <div class="position-relative">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <a id="logo" href="home-1.html" class="d-inline-block margin-tb-15px"><img src="assets/images/logo_trans5.png" alt=""></a>
                                    <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
                                </div>
                                <div class="col-lg-7 col-md-12 position-inherit">
                                    <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px dropdown-dark">
                                    <li class=""><a href="#">Home</a>
                                        <ul class="sub-menu">
                                            
                                        </ul>
                                    </li>
                                        <li class="has-dropdown"><a href="#">About</a>
                                            <ul class="sub-menu">
                                                <li><a href="page-about-us.html">About Us</a></li>
                                                <li><a href="page-faqs.html">Faqs</a></li>
                                                <li><a href="page-out-team.html">Our Team</a></li>
                                                <li><a href="page-price-table.html">Price Table</a></li>
                                                <li><a href="page-contact-us.html">Contact Us</a></li>
                                                <li><a href="page-our-partners.html">Our Partners</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="view.php
                                                ">Views</a></li>
                                            
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Blog</a>
                                            <ul class="sub-menu">

                                            </ul>
                                        </li>
                                        

                                    </ul>



                                    <div class="d-none d-xl-block pull-right model-link margin-top-15px">
                                        <a id="cart-link" class="model-link margin-right-25px text-dark opacity-hover-8" href="#">
                                    <span>3</span><i class="fa fa-shopping-cart"></i>
                                </a>
                                        
                                    </div>
                                    <div class="d-none d-xl-block search-link pull-right model-link margin-top-15px">
                                        <a id="search-header" class="model-link margin-right-0px text-dark opacity-hover-8" href="#search">
                                    <i class="fa fa-search"></i>
                                </a>
                                    </div>

                                </div>
                                <div class="col-lg-2 col-md-12  d-none d-lg-block">
                                    <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#" class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                          <i class="fa fa-envelope-o margin-right-10px"></i>  Login
                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- // Header  -->

    <!-- Search  -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form class="clearfix d-block">
            <input type="search" value="" placeholder="Search for . . . ." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- // Search  -->

    <!-- Get A Quote  -->
    <div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content margin-top-150px background-main-color">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="assets/img/contact-img.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Get A Free Quote</h3>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" id="inputName4" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <a href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // Get A Quote  -->


    <div class="page-title">
        <div class="container">
            <div class="padding-tb-120px">
                <h1>View Page</h1>
                <!-- <h5>You can select and view the information of suppliers, locations and products</h5> -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
    </div>


    

    <!-- ***** Fleet Starts ***** -->
    <section class="secion">
        <br>
        <br>

        <div class="container">
        <form>
            <div class="form-group row">
                <label for="View_options" class="col-sm-2 col-form-label">View: </label>
                <select class="form-control form-control-sm col-sm-3" id="View_options" name="View_options" onchange="showUser()">
                    <option value="">Select category to View</option>
                    <option value="s">Suppliers</option>
                    <option value="l">Locations</option>
                    <option value="p">Products</option>
                </select>
            </div>
        </form>
    </div>
    </section>
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
                    <div class="row" id="resultData">
                        <!-- Data from database will appear here -->
                        
                    </div>         
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->



   





  


    <footer class="layout-dark">
        <div class="container padding-tb-100px">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="about-us sm-mb-45px">
                        <div class="logo-footer margin-bottom-35px">
                            <a href="#"><img src="assets/images/logo_trans5.png" alt=""></a>
                        </div>
                        <div class="text margin-bottom-35px">
                            We are commited to reduce the cost of transport by finding the nearest supplier and provide promising low costs. 
                        </div>
                        <a href="#" class="nile-bottom sm">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">
                        <h2 class="title">Our Services</h2>
                        <ul class="footer-menu">
                            <li><a href="#">Cargo Transportation</a></li>
                            <li><a href="#">Items Delivery</a></li>
                            <li><a href="#">Finding Suppliers</a></li>
                           
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget widget_nav_menu sm-mb-45px">
                        <h2 class="title">Site Pages</h2>
                        <ul class="footer-menu">
                            <li><a href="view.php">views</a></li>
                            
                        </ul>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="nile-widget">
                        <div class="margin-bottom-60px">
                            <h2 class="title">Location</h2>
                            <div class="contact-info opacity-9">
                                <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                <div class="text">
                                    <span class="title-in">Location :</span> <br>
                                    <span class="font-weight-500 text-uppercase"> VIT-AP, Amaravti</span>
                                </div>
                            </div>
                        </div>
                        <div class="call_center">
                            <h2 class="title">Call Center</h2>
                            <div class="contact-info opacity-9">
                                <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                <div class="text">
                                    <span class="title-in">Call Us :</span><br>
                                    <span class="font-weight-500 text-uppercase">9849356261</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copy-right">
            <div class="container padding-tb-50px">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copy-right-text text-lg-left text-center sm-mb-15px"><a target="_blank" href="#">Product definition and validation</a> </div>
                    </div>
                    <div class="col-lg-6">
                        <!--  Social -->
                        <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
                            <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- // Social -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    

</body>


<!-- page-about-us01:28-->
</html>

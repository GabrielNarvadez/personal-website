
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Cristino - Personal Portfolio Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template">
        <meta name="keywords" content="Bootstrap 5, premium, marketing, multipurpose">
        <meta content="Shreethemes" name="author">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Lightbox -->
        <link href="css/tobii.min.css" rel="stylesheet" type="text/css">
        <!-- SLIDER -->
        <link rel="stylesheet" href="css/tiny-slider.css"/>
        <!-- Icon -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <!-- Custom Css -->
        <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt">
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="images/logo.png" height="20" class="d-block mx-auto" alt="">
                </div>
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar Start -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
                <a class="navbar-brand" href="">
                    <img src="images/logo.png" class="logo-light-mode" alt="">
                    <img src="images/logo-light.png" class="logo-dark-mode" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span data-feather="menu" class="fea icon-md"></span>
                </button><!--end button-->

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul id="navbar-navlist" class="navbar-nav navbar-nav-link mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Blog</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li><!--end nav item-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
                            </a>
                            <div class="dropdown-menu rounded m-0" aria-labelledby="navbarDropdown">
                                <div class="container mx-0 mx-md-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="dropdown-item" href="page-blog.html">Blog</a>
                                            <a class="dropdown-item" href="page-blog-detail.html">Blog Detail</a>
                                            <a class="dropdown-item" href="page-portfolio.html">Portfolio</a>
                                            <a class="dropdown-item" href="page-portfolio-detail.html">Portfolio Detail</a>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end container-->
                            </div>
                        </li><!--end nav item-->
                    </ul>

                    <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon">
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div> 
            </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->

        <!-- Home Start -->
        <section class="bg-half d-table w-100" style="background: url('images/home/bg-pages.jpg')center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Projects & Works </h4>
                            <ul class="page-next bg-light d-inline-block py-2 px-4 mt-3 rounded mb-0">
                                <li><a href="index.html" class="text-dark">Cristino</a></li>
                                <li>
                                    <span class="text-primary"> Portfolio</span> 
                                </li> 
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Home End -->

        <!-- Projects End -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 filters-group-wrap">
                        <div class="filters-group">
                            <ul class="portfolioFilter list-inline mb-0 filter-options text-center">
                                <li class="list-inline-item categories-name border text-dark px-3 rounded active" data-group="all">All</li>
                                <li class="list-inline-item categories-name border text-dark px-3 rounded" data-group="branding">Branding</li>
                                <li class="list-inline-item categories-name border text-dark px-3 rounded" data-group="designing">Designing</li>
                                <li class="list-inline-item categories-name border text-dark px-3 rounded" data-group="photography">Photography</li>
                                <li class="list-inline-item categories-name border text-dark px-3 rounded" data-group="development">Development</li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <!-- Gallary -->
                <!-- Gallary -->
                <div id="grid" class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["branding", "designing"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="images/portfolio/1.jpg" alt="1">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/1.jpg" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">Working Keyboard</a></h5>
                                <span>Branding</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["branding", "development"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="images/portfolio/2.jpg" alt="1">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/2.jpg" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">The Micro Headphones</a></h5>
                                <span>Development</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["designing", "development"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="images/portfolio/3.jpg" alt="1">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/3.jpg" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">The Coffee Cup</a></h5>
                                <span>Designing</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="images/portfolio/4.jpg" alt="1">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/4.jpg" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">The Wooden Desk</a></h5>
                                <span>Photography</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="images/portfolio/5.jpg" alt="1">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/5.jpg" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">Camera</a></h5>
                                <span>Illustrations</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["photography"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="images/portfolio/6.jpg" alt="1">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/6.jpg" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">Branded Laptop</a></h5>
                                <span>Photoshop</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!--end container-->
            
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <div class="position-relative">
                                <h4 class="title text-uppercase mb-4">Clients say</h4>
                                <div>
                                    <div class="title-box"></div>
                                    <div class="title-line"></div>
                                </div>
                            </div>
                            <p class="text-muted mx-auto para-desc mt-5 mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="client-review-slider">
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <ul class="list-unstyled float-right mb-0">
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <div class="review-base">
                                            <h6 class="title">" Design Quality "</h6>
                                        </div>
                                    </div><!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don't look even slightly believable. </p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="images/client/01.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                        <div class="content">
                                            <h5 class="name mb-0">Erich Bissonette</h5>
                                            <small class="designation text-muted">Oppo</small>
                                        </div>
                                    </div><!--end reviewer-->
                                </div><!--end client review-->
                            </div>
                            <!--End Client-->

                            <!--Start Client-->                            
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <ul class="list-unstyled float-right mb-0">
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star-half"></i></li>
                                        </ul>

                                        <div class="review-base">
                                            <h6 class="title">" Code Quality "</h6>
                                        </div>
                                    </div><!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="images/client/02.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                        <div class="content">
                                            <h5 class="name mb-0">Tina Meyer</h5>
                                            <small class="designation text-muted">Vivo</small>
                                        </div>
                                    </div><!--end reviewer-->
                                </div><!--end client review-->
                            </div>
                            <!--End Client-->

                            <!--Start Client-->                            
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <ul class="list-unstyled float-right mb-0">
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <div class="review-base">
                                            <h6 class="title">" Feature Availability "</h6>
                                        </div>
                                    </div><!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="images/client/03.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                        <div class="content">
                                            <h5 class="name mb-0">Sharon Murdock</h5>
                                            <small class="designation text-muted">Apple</small>
                                        </div>
                                    </div><!--end reviewer-->
                                </div><!--end client review-->
                            </div>
                            <!--End Client-->

                            <!--Start Client-->
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <ul class="list-unstyled float-right mb-0">
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <div class="review-base">
                                            <h6 class="title">" Customizability "</h6>
                                        </div>
                                    </div><!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="images/client/04.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                        <div class="content">
                                            <h5 class="name mb-0">Jesse Hunt</h5>
                                            <small class="designation text-muted">Samsung</small>
                                        </div>
                                    </div><!--end reviewer-->
                                </div><!--end client review-->
                            </div>
                            <!--End Client-->

                            <!--Start Client-->                            
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <ul class="list-unstyled float-right mb-0">
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star-half"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star-outline"></i></li>
                                        </ul>

                                        <div class="review-base">
                                            <h6 class="title">" Flexibility "</h6>
                                        </div>
                                    </div><!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don't look even slightly believable. </p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="images/client/05.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                        <div class="content">
                                            <h5 class="name mb-0">Andrea Toy</h5>
                                            <small class="designation text-muted">Nokia</small>
                                        </div>
                                    </div><!--end reviewer-->
                                </div><!--end client review-->
                            </div>
                            <!--End Client-->

                            <!--Start Client-->                            
                            <div class="tiny-slide">
                                <div class="client-review rounded shadow m-2">
                                    <div class="review-star">
                                        <ul class="list-unstyled float-right mb-0">
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                            <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                        </ul>

                                        <div class="review-base">
                                            <h6 class="title">" Development "</h6>
                                        </div>
                                    </div><!--end review star-->

                                    <p class="text-muted review-para font-italic mt-3 mb-3"> It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                    <div class="reviewer d-flex align-items-center">
                                        <img src="images/client/06.jpg" class="img-fluid rounded-circle avatar avatar-small me-3" alt="">
                                        <div class="content">
                                            <h5 class="name mb-0">Jay Allums</h5>
                                            <small class="designation text-muted">RedMI</small>
                                        </div>
                                    </div><!--end reviewer-->
                                </div><!--end client review-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            
            <div class="container-fluid mt-100 mt-60">
                <div class="rounded-pill py-5" style="background: url('images/hireme.jpg') center center;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <h4 class="text-light title-dark">I Am Available For Freelancer Projects.</h4>
                                <p class="text-white-50 mx-auto mt-4 para-desc">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-primary mouse-down">Hire me <i data-feather="chevron-down" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end div-->
            </div><!--end container fluid-->
            
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Phone</h5>
                                <p class="text-muted">Promising development turmoil inclusive education transformative community</p>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-md-0 pt-2 pt-md-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Email</h5>
                                <p class="text-muted">Promising development turmoil inclusive education transformative community</p>
                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Location</h5>
                                <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="video-play-icon text-primary">View on Google map</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Contact End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="#"><img src="images/logo-light.png" alt=""></a>
                        <p class="para-desc mx-auto mt-5">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar bg-dark">
            <div class="container text-foot text-center">
                <p class="mb-0">© 2019-20 Cristino. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in" target="_blank" class="text-success"></a>Shreethemes</a>.</p>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->
        
        <!-- Back to top -->
        <a href="#" onclick="topFunction()" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a>
        <!-- Back to top -->
        
        <!-- Style switcher -->
        <div id="style-switcher" class="bg-light border p-3 pt-2 pb-2" onclick="toggleSwitcher()">
            <div>
                <h6 class="title text-center">Select Your Color</h6>
                <ul class="pattern">
                    <li class="list-inline-item">
                        <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color3" href="javascript: void(0);" onclick="setColor('light-green')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color4" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color5" href="javascript: void(0);" onclick="setColor('light-yellow')"></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                    </li>
                </ul>

                <h6 class="title text-center pt-3 mb-0 border-top">Theme Option</h6>
                <ul class="text-center list-unstyled mb-0">
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary rtl-version t-rtl-light mt-2" onclick="setTheme('style-rtl')">RTL</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary ltr-version t-ltr-light mt-2" onclick="setTheme('style')">LTR</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-rtl-version t-rtl-dark mt-2" onclick="setTheme('style-dark-rtl')">RTL</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-primary dark-ltr-version t-ltr-dark mt-2" onclick="setTheme('style-dark')">LTR</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark dark-version t-dark mt-2" onclick="setTheme('style-dark')">Dark</a></li>
                    <li class="d-grid"><a href="javascript:void(0)" class="btn btn-sm btn-block btn-dark light-version t-light mt-2" onclick="setTheme('style')">Light</a></li>
                </ul>

                <h6 class="title text-center pt-3 mb-0 border-top">Download</h6>
                <ul class="text-center list-unstyled mb-0">
                    <li><a href="https://1.envato.market/cristino" target="_blank" class="btn btn-sm btn-block btn-warning mt-2 w-100">Download</a></li>
                </ul>
            </div>
            <div class="bottom p-0">
                <a href="javascript: void(0);" class="settings bg-white shadow d-block"><i class="mdi mdi-cog ms-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
            </div>
        </div>
        <!-- end Style switcher -->

        <!-- javascript -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/gumshoe.js"></script>
        <!-- SLIDER -->
        <script src="js/tiny-slider.js "></script>
        <!-- Lightbox -->
        <script src="js/tobii.min.js"></script>
        <script src="js/shuffle.min.js"></script>
        <!-- Feather icon -->
        <script src="js/feather.min.js"></script>
        <!-- Main Js -->
        <script src="js/plugins.init.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>
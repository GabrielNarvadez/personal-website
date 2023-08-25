<?php
 require('header.php');
?>

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
        <?php
        require('footer.php');
       ?>
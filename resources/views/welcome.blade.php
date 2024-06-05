@extends('layouts.layout')
@section('content')
    
    @include('includes.topbar')
    @include('includes.navbar')

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-lg-6 ftco-animate">
                    <div class="mt-5">
                        <h1 class="mb-4">Construire <br>Votre Maison !</h1>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        <p><a href="#" class="btn btn-primary">Our Services</a> <a href="#" class="btn btn-white" data-toggle="modal" data-target="#exampleModalCenter">Request A Quote</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Quality Construction</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2 d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-worker-1"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Professional Liability</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex">
                        <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-engineer"></span></div>
                        <div class="media-body pl-4">
                            <h3 class="heading mb-3">Dedicated To Our Clients</h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="about-wrap img w-100" style="background-image: url(images/about.jpg);">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-crane"></span></div>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="row justify-content-center mb-4 pt-md-4">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Welcome to Wilcon</span>
                            <h2 class="mb-4">Wilcon A Construction Company</h2>
                            <div class="d-flex about">
                                <div class="icon"><span class="flaticon-hammer"></span></div>
                                <h3>We're in this business since 1975 and We provide the best insdustrial services</h3>
                            </div>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <div class="d-flex video-image align-items-center mt-md-4">
                                <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about-2.jpg);">
                                    <span class="fa fa-play-circle"></span>
                                </a>
                                <h4 class="ml-4">This is how we work on our clients, Watch video</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url(images/bg_2.jpg);">
                        <div class="overlay"></div>
                        <h2>Providing Personalized and High Quality Services</h2>
                        <p>We can manage your dream building A small river named Duden flows by their place</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Request A Quote</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-half-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-4">We Offer Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-1.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-architect"></span></div>
                            <h2>Architecture</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <a href="#" class="btn-custom">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-2.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-worker"></span></div>
                            <h2>Renovation</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <a href="#" class="btn-custom">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-wrap ftco-animate">
                        <div class="img" style="background-image: url(images/services-3.jpg);"></div>
                        <div class="text">
                            <div class="icon"><span class="flaticon-hammer"></span></div>
                            <h2>Construction</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <a href="#" class="btn-custom">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter">
        <div class="img image-overlay" style="background-image: url(images/about-3.jpg);"></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 py-5 bg-secondary aside-stretch">
                    <div class="heading-section heading-section-white p-4 pl-md-0 py-md-5 pr-md-5">
                        <span class="subheading">Wilcon A Construction Company</span>
                        <h2 class="mb-4">Best Provider for Industrial Services</h2>
                        <h4>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="row">
                        <div class="col-md-12 d-flex counter-wrap ftco-animate">
                            <div class="block-18 bg-primary d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-engineer"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="48000">0</strong>
                                    <span>Project Completed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex counter-wrap ftco-animate">
                            <div class="block-18 d-flex align-items-center justify-content-between">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-worker-1"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="54900">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Our Global Work Industries</span>
                    <h2 class="mb-4">Latest Projects</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project">
                        <a href="images/project-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/project-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                        </a>
                        <div class="text">
                            <span class="subheading">Building</span>
                            <h3>Building A Condominium</h3>
                            <p><span class="fa fa-map-marker mr-1"></span> San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 p-4 pl-md-0 py-md-5 pr-md-5 aside-stretch d-flex align-items-center">
                    <div class="heading-section heading-section-white">
                        <span class="subheading" style="color:#fff;">Read Testimonials</span>
                        <h2 class="mb-4" style="font-size: 50px;">It's always a joy to hear that the work we do has positively reviews</h2>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-4 py-md-5 aside-stretch-right">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4 pb-5 d-flex justify-content-between align-items-end">
                                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
                                    <p class="name">Jeff Freshman</p>
                                    <span class="position">Guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Our Blog</span>
                    <h2 class="mb-4">Latest Blog Updates</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                            <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                            <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text d-block">
                            <div class="meta">
                                <p>
                                    <a href="#"><span class="fa fa-calendar mr-2"></span>Sept. 06, 2020</a>
                                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="#">Best for any industrial &amp; business solution</a></h3>
                            <p><a href="blog.html" class="btn btn-secondary py-2 px-3">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer">
        <div class="container mb-5 pb-4">
            <div class="row">
                <div class="col-lg col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2 d-flex align-items-center">About</h2>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                        <ul class="ftco-footer-social list-unstyled mt-4">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Links</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-md-4">
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Project</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog Posts</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Industries</a></li>
                            </ul>
                            <ul class="list-unstyled ml-md-5">
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New Heavy Equipment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg col-md-6">
                    <div class="ftco-footer-widget">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="fa fa-map-marker mr-3"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="fa fa-phone mr-3"></span><span class="text">+2 392 3929 210</span></a></li>
                                <li><a href="#"><span class="fa fa-paper-plane mr-3"></span><span class="text"><span class="__cf_email__" data-cfemail="2841464e476851475d5a4c4745494146064b4745">[email&#160;protected]</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 aside-stretch py-3">
                        <p class="mb-0">
                            Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fa fa-close"></span>
                    </button>
                </div>
                <div class="modal-body p-4 p-md-5">
                    <form action="#" class="appointment-form ftco-animate">
                        <h3>Request Quote</h3>
                        <div class>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class>
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name id class="form-control">
                                            <option value>Select Your Services</option>
                                            <option value>Architecture</option>
                                            <option value>Renovation</option>
                                            <option value>Construction</option>
                                            <option value>Interior &amp; Exterior</option>
                                            <option value>Chemical Research</option>
                                            <option value>Petroleum &amp; Gas</option>
                                            <option value>Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class>
                            <div class="form-group">
                                <textarea name id cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
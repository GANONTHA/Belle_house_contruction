@extends('layouts.layout')

@section('content')



<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner-1.png');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Nos Projets <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Nos Realisations</h1>
            </div>
        </div>
    </div>
</section>
{{-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Global Work Industries</span>
                <h2 class="mb-4">Latest Projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="realisation">
                    <a href="images/realisation-1.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/realisation-1.jpg);">
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
                <div class="realisation">
                    <a href="images/realisation-2.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/realisation-2.jpg);">
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
                <div class="realisation">
                    <a href="images/realisation-3.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/realisation-3.jpg);">
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
                <div class="realisation">
                    <a href="images/realisation-4.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/realisation-4.jpg);">
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
                <div class="realisation">
                    <a href="images/realisation-5.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/realisation-5.jpg);">
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
                <div class="realisation">
                    <a href="images/realisation-6.jpg" class="img image-popup d-flex align-items-center" style="background-image: url(images/realisation-6.jpg);">
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
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
 <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">NOS SECTEURS DE TRAVAUX D’ENVERGURE</span>
                    <h2 class="mb-4">Dernieres Realisations</h2>
                </div>
            </div>
             <div class="row">
            @foreach ($realisations as $realisation)
                
            <div class="col-md-4">
                <div class="project">
                    <a href="{{route('realisation.show',$realisation->id)}}" class="img d-flex align-items-center" style="background-image: url({{asset('storage/' . $realisation->image)}});">
                        <div class="icon d-flex align-items-center justify-content-center mb-5"><span class="fa fa-plus"></span></div>
                    </a>
                    <div class="text">
                        <span class="subheading">{{$realisation->type}}</span>
                        <h3>{{$realisation->name}}</h3>
                        <p><span class="fa fa-map-marker mr-1"></span> {{$realisation->area }}, {{$realisation->city}}, {{$realisation->country}}</p> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>

@endsection
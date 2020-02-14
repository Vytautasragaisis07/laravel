@extends('skelbimai/main')
@section('content')
    @include('skelbimai/_partials/admin')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Visi skelbimai</h1>
                            <p class="mb-0">Skelbimų meniu</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 text-left border-primary">
                    <h2 class="font-weight-light text-primary">Visi</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($ads as $ad)
                    <div class="col-lg-6">
                        <div class="d-block d-md-flex listing">
                            <div class="lh-content">

                                <span class="category">{{$ad->pavadinimas}}</span>
                                <div><img src="({{'storage/'.$ad->img}})" for="subject" alt="image" class="img-fluid rounded"> </div>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="/skelbimas">{{$ad->title}}</a></h3>

                                <p>{{$ad->description}}</p>
                                <address>{{$ad->location}}</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(4 Atsiliepimai)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12 mt-5 text-center">
                <div class="custom-pagination">
                    {{$ads->links()}}
                </div>

            </div>

        </div>
    </div>


@stop
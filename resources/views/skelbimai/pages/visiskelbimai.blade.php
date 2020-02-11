@extends('skelbimai/main')
@section('content')


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
                    <h2 class="font-weight-light text-primary">Visi skelbimai</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">

                    @foreach($ads as $ad)

                    <div class="d-block d-md-flex listing">
                        <a href="/skelbimas/{{$ad->id}}" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">{{$ad->title}}</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">{{$ad->description}}</a></h3>
                            <h3><a href="#">{{$ad->price}}</a></h3>
                            <address>{{$ad->location}}</address>
                            <p class="mb-0">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-secondary"></span>
                                <span class="review">(3 Atsiliepimai)</span>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row mt-5">
                @foreach($ads as $ad)
                    <div class="col-lg-6">
                        <div class="d-block d-md-flex listing">
                            <a href="/skelbimas/{{$ad->id}}" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                            <div class="lh-content">
                                @foreach($categories as $category)
                                    @if($ad->catid == $category->id)
                                        <span class="category">{{$category->title}}</span>
                                    @endif
                                @endforeach


                                @foreach($ads as $pavadinimas)
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="/skelbimas">{{$pavadinimas->title}}</a></h3>
                                @endforeach
                                <p>{{$ad->description}}</p>
                                <address>{{$ad->location}}</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Atsiliepimai)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@stop
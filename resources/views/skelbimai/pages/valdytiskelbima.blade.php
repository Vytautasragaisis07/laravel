@extends('skelbimai/main')
@section('content')
    @include('skelbimai/_partials/admin')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Valdyti skelbima</h1>
                            <p class="mb-0">Valdyti skelbima</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section" data-aos="fade">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-1">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Pavadinimas</th>
                                <th scope="col">Aprašymas</th>
                                <th scope="col">Kaina</th>
                                <th scope="col">El paštas</th>
                                <th scope="col">Telefonas</th>
                                <th scope="col">Vietovė</th>
                                <th scope="col">Radagavimas</th>
                                <th scope="col">Trinimas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{$ad->title}}</td>
                                    <td>{{$ad->description}}</td>
                                    <td>{{$ad->price}}</td>
                                    <td>{{$ad->email}}</td>
                                    <td>{{$ad->phone}}</td>
                                    <td>{{$ad->location}}</td>
                                    <td><a href="/redaguotiSkelbima/ad/{{$ad->id}}" class="btn btn-primary py-2 px-4 text-white btn-success">Redaguoti</a></td>
                                    <td><a href="/trinti-skelbima/{{$ad->id}}" class="btn btn-primary py-2 px-4 text-white btn-danger">Trinti</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6 offset-3">
                        <div class="row form-group text-center">
                            <div class="col-md-12">
                                <a href="/prideti" class="btn btn-primary py-2 px-4 text-white">Prideti</a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Populiariausios kategorijos</h2>
                    <p class="color-black-opacity-5"></p>
                </div>
            </div>
            <div class="overlap-category mb-5">
                <div class="row align-items-stretch no-gutters">
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-car"></span></span>
                            <span class="caption mb-2 d-block">Automobiliai</span>
                            <span class="number">1,921</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-closet"></span></span>
                            <span class="caption mb-2 d-block">Baldai</span>
                            <span class="number">2,339</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-home"></span></span>
                            <span class="caption mb-2 d-block">Nekilnojamas turtas</span>
                            <span class="number">4,398</span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-open-book"></span></span>
                            <span class="caption mb-2 d-block">Knygos &amp; Žurnalai</span>
                            <span class="number">3,298</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-tv"></span></span>
                            <span class="caption mb-2 d-block">Elektronika</span>
                            <span class="number">`2,932</span>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                        <a href="#" class="popular-category h-100">
                            <span class="icon"><span class="flaticon-pizza"></span></span>
                            <span class="caption mb-2 d-block">Kiti</span>
                            <span class="number">183</span>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>



@stop
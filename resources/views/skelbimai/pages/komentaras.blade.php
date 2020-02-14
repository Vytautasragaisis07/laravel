@extends('skelbimai/main')
@section('content')
    @include('skelbimai/_partials/admin')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Komentuoti</h1>
                            <p class="mb-0">Komentuoti</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">

            <form method="GET" action="/komentaras/{{$ad->id}}" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5"  data-aos="fade">

                        <h2 class="mb-5 text-black">Pridėkite Komentara</h2>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="title">Vardas</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-area" for="subject">Aprašymas</label>
                                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Komentuoti" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>

    </div>
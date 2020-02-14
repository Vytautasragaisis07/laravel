@extends('skelbimai/main')
@section('content')
    @include('skelbimai/_partials/admin')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Prideti kategorija</h1>
                            <p class="mb-0">Kategoriju meniu</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/store-category">
                @csrf
                <div class="form-group">
                    <div class="row justify-content-center">
                        <div class="col-md-7 mb-5"  data-aos="fade">

                            <h2 class="mb-5 text-black">Pridėkite kategorija</h2>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="title">Pavadinimas</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary py-2 px-4 text-white">Saugoti</button>
                                </div>
                            </div>


            </form>
        </div>
    </div>
    </div>
    </div>
    </div>

@stop
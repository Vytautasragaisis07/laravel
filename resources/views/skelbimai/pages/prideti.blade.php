@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Prideti skelbimą</h1>
                            <p class="mb-0">Skelbimų meniu</p>
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
            <form method="POST" action="/store-ad">
                @csrf
                <div class="form-group">
                    <div class="row justify-content-center">
                        <div class="col-md-7 mb-5"  data-aos="fade">

                            <h2 class="mb-5 text-black">Pridėkite skelbimą</h2>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="title">Pavadinimas</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label class="text-black" for="description">Aprašymas</label>
                                    <input type="text" id="description" name="description" class="form-control">
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="title">Kategorija</label>
                                        @foreach($categories as $category)
                                            <select class="form-control" name="catid">
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            </select>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-black" for="price">Kaina</label>
                                    <input type="text" id="price" name="price" class="form-control">
                                </div>
                                <div class="col-md-12">
                                        <label class="text-black" for="subject">Pridėti paveikslėlį</label>
                                        <input type="file" id="img" name="image" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label class="text-black" for="email">El paštas</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label class="text-black" for="phone">Telefonas</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label class="text-black" for="location">Vietovė</label>
                                    <input type="text" id="location" name="location" class="form-control">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary py-2 px-4 text-white">Sukurti</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop



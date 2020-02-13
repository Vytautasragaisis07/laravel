@extends('skelbimai/main')

@extends('skelbimai/main')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Redaguoti skelbimą</h1>
                        <p class="mb-0"></p>
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
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" enctype="multipart/form-data" action="/redaguoti_skelbima/{{$ad->id}}" class="p-5 bg-white">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">

                    <h2 class="mb-5 text-black">Redaguokite skelbimą</h2>

                    <div class="row form-group" {{$ad->id}}>

                        <div class="col-md-12">
                            <label class="text-black" for="title">Pavadinimas</label>
                            <input type="text" id="title" name="title" value="{{$ad->title}}" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="title">Kategorija</label>
                            <select class="form-control" name="catid">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>

                        </div>

                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-area" for="subject">Aprašymas</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{$ad->description}}</textarea>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Kaina</label>
                            <input type="text" id="price" name="price" value="{{$ad->price}}" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Pridėti paveikslėlį</label>
                            <div><img src="({{'storage/'.$ad->img}})" for="subject" alt="image" class="img-fluid rounded"> </div>
                            <input type="file" id="img" name="img" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">El.Paštas</label>
                            <input type="text" id="email" value="{{$ad->email}}" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Vieta</label>
                            <input type="text" id="location" name="location" value="{{$ad->location}}" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Telefonas</label>
                            <input type="text" id="phone" name="phone" value="{{$ad->phone}}" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Redaguoti" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

</div>

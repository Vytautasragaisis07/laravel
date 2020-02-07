@extends('skelbimai/main')
@section('content')
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
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">

                    <h2 class="mb-5 text-black">Pridėti skelbimą</h2>

                    <form action="POST" class="p-5 bg-white">

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Kategorijos</th>
                                <th scope="col">Veiksmai</th>
                                <th scope="col">Veiksmai</th>
                                <th scope="col">Veiksmai</th>
                                <th scope="col">Veiksmai</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{$ad->title}}</td>
                                    <td>{{$ad->description}}</td>
                                    <td>{{$ad->price}}</td>
                                    <td>{{$ad->img}}</td>
                                    <td>{{$ad->email}}</td>
                                    <td>{{$ad->location}}</td>
                                    <td>{{$ad->phone}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Pavadinimas</label>
                                <input type="title" id="title" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Aprašymas</label>
                                <textarea type="text" id="description" name="description" rows="3" class="form-control"></textarea>
                            </div>
                        </div>


                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Kaina</label>
                                <input type="number" id="price" name="price" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Pridėti nuotrauką</label>
                                <input type="img" id="img" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">El. Paštas</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Miestas</label>
                                <input type="text" id="location" name="location" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Telefonas</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <a href="/skelbimai" class="btn btn-danger py-2 px-4 text-white">Prideti</a>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>

@stop

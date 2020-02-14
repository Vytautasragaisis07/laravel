
@extends('skelbimai/main')
@section('content')
    @include('skelbimai/_partials/admin')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>{{$ad->title}}</h1>
                            <p class="mb-0">{{$ad->location}}</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4" style="margin-top: -150px;">
                        <div class="slide-one-item home-slider owl-carousel">
                            <div><img src="{{'/storage/'.$ad->img}}" alt="Image" class="img-fluid rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="h5 mb-4 text-black">Description</h4>
            <p>{{$ad->description}}</p>
            <p>{{$ad->price}}</p>
            <p>{{$ad->email}}</p>
            <a href="/komentaroForma/{{$ad->id}}" class="cta"><span class="btn btn-primary py-2 px-4 text-white">Komentuoti</span></a>
            <div class="col-md-12">
                <hr>
                @if(count($ad->comments))
                <div class="comments">
                    <h4>Komentarai</h4>

                    <ul class="list-group">
                        @foreach($ad->comments as $comment)
                            <li class="list-group-item">{{$comment->created_at}} <strong>{{$comment->name}}</strong></li>
                            <li class="list-group-item">{{$comment->comment}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>



@stop
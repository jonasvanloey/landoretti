@extends('welcome')
@section('content')

    <section class="search">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-offset-8 col-lg-4 block ">
                    <div class="blue">
                        <h2>Lorem Ipsum</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. magnis dis parturient montes, nascetur ridiculus mus...</p>
                        <p></p>
                    </div>
                    <div class="white">
                        <a href="#"><h2>Visit auction</h2></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <p>breadcrumbs here</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1>Art</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <h2>Bids</h2>
                </div>
                <div class="col-lg-2">
                    <a href="{{url('art/add')}}"><button>add new bid</button></a>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">filter here</div>
                <button>add filter</button>
            </div>
            <div class="row">
                @foreach( $bids as $bid)
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <img class="prodimage" src="{!!   asset('storage/bids/' .$bid->image_path) !!}" alt="{{$bid->auction_title}}" >
                    </div>
                    <div class="col-lg-8">
                        <h4>{{$bid->auction_title}}</h4>
                        <p>€<h4>{{$bid->min_est_price}}</h4> - €<h4>{{$bid->max_est_price}}</h4></p>
                        <a href="/art/{{$bid->id}}"><button>Details...</button></a>
                        <a href="/art/watchlist/{{$bid->id}}"><button><span class="glyphicon glyphicon-eye-open"></span> add to watchlist</button></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
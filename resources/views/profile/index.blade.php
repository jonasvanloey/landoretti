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
                    <h1>Profile</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$user->name}}</h2>

                </div>
                <div class="col-lg-2">
                    <p>{{$user->email}}</p>
                    {{--<p>{{$user->tel}}</p>--}}
                    {{--TODO add telephone to user--}}
                    <p>{{$user->street}}, {{$user->nr}}</p>
                    <p>{{$user->postcode}}, {{$user->city}}</p>
                </div>
                <div class="col-lg-2">
                    <p>VAT-number</p>
                    <p>{{$user->vat_number}}$
                    <p>Account number</p>
                    <p>xxxxx</p>
                </div>
            </div>
            <div class="row">
                <h3>active auctions</h3>
            </div>
            <div class="row">
                @foreach($active as $a)
                    <div class="col-lg-3">
                        <img class="prodimage" src="{!!   asset('storage/bids/' .$a->image_path) !!}" alt="{{$a->auction_title}}" >
                        <p><b>{{$a->auction_title}}</b></p>
                        <p>{{$a->max_est_price}}</p>
                        <p>{{$a->end_date}}</p><a href="/art/{{$a->id}}"><button>visit Auction ></button></a>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection
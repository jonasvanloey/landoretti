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
                    <p>breadcrumbs</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        {{$bid->auction_title}}
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <img class="prodimage" src="{!!asset('storage/bids/' .$bid->image_path) !!}" alt="{{$bid->auction_title}}">
                </div>
                <div class="col-lg-4">
                    <h3>{{$bid->auction_title}}</h3>
                    <p>maker</p>
                    <hr>
                    <p><?php
                    $today = \Carbon\Carbon::now();
                    $days = $today->diffInDays(\Carbon\Carbon::parse($bid->end_date));
                    $hours = $today->copy()->addDays($days)->diffInHours(\Carbon\Carbon::parse($bid->end_date));
                    $minutes = $today->copy()->addDays($days)->addHours($hours)->diffInMinutes(\Carbon\Carbon::parse($bid->end_date));
                    echo $days.' dagen :'.$hours.' uur :'.$minutes.' minuten';
                    ?></p>
                    {{--<p>{{\Carbon\Carbon::parse($bid->end_date)->diff($today)->format('%H:%I:%S')}}</p>--}}
                    <hr>
                    <p>vage lorem ipsum</p>
                    <hr>
                    <p>Estimated price</p>
                    <h4>€{{$bid->min_est_price}} - €{{$bid->max_est_price}}</h4>
                    <a href="/art/{{$bid->id}}/buy">
                        <h5>Buy now for €{{$bid->buyout_price}}</h5>
                    </a>
                    @if($isbid)
                    {!!  Form::open(['url' => '/art/'.$bid->id.'/bid','method' => 'post']) !!}
                    {!! Form::text('bid','no bid has been made yet',['class'=>'form-control']) !!}
                    {!! Form::submit('Bid now') !!}
                    {!! Form::close() !!}
                    @else
                        {!!  Form::open(['url' => '/art/'.$bid->id.'/bid','method' => 'post']) !!}
                        {!! Form::text('bid',$highest[0]->bid_price,['class'=>'form-control']) !!}
                        {!! Form::submit('Bid now') !!}
                        {!! Form::close() !!}
                        @endif
                    <a href="/art/watchlist/{{$bid->id}}"><span class="glyphicon glyphicon-eye-open"></span> add to watchlist</a>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-8">
                    <h5>Description</h5>
                    <p>{{$bid->description}}</p>
                    <h5>condition</h5>
                    <p>{{$bid->condition}}</p>
                </div>
                <div class="col-lg-4">
                    <h5>artist</h5>
                    <p>kjfdnkjnds</p>
                    <h5>Dimensions</h5>
                    <p>{{$bid->height}}x{{$bid->width}}x{{$bid->depth}}</p>
                    <h5>color</h5>
                    <a href="">
                        <button>Ask a question about this auction</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
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
                    <h1>watchlist</h1>
                </div>
                <div class="col-lg-12"><a href="/watchlist">all</a> | <a href="?active">active</a> | <a href="?ended">ended</a></div>
            </div>
            {!!  Form::open(['url' => '/watchlist/delete','method' => 'get']) !!}
            <div class="row">
                <div class="col-lg-12">
                    {!! Form::submit('Delete selected') !!}
                    <a href="/watchlist/deleteall" class="btn btn-danger">delete all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th class="col"></th>
                            <th class="col">Auction details</th>
                            <th class="col">estaminated price</th>
                            <th class="col">end date</th>
                            <th class="col">remaining time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($watchlist as $key=>$w)
                            <tr>
                                <td  class="row">{!! Form::checkbox('watchlist['.$key.']', $w->id, false) !!}</td>
                                <td><img src="{!!asset('storage/bids/' .$w->bid->image_path) !!}" alt="{{$w->bid->auction_title}}" style="max-width: 100%;max-height: 200px;"><h6>{{$w->bid->auction_title}}</h6></td>
                                <td>{{$w->bid->max_est_price}}</td>
                                <td>{{$w->bid->end_date}}</td>
                                <td>remaining time</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
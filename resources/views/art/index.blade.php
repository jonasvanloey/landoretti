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
                <div class="col-lg-12"><b>Sort By:</b><a href="?ending=soonest">ending soonest</a><a href="?ending=latest">ending latest</a><a href="?new_auctions">new auctions</a><a href="?popular_auctions">popular auctions</a></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    {!!  Form::open(['url' => '/art','method' => 'GET']) !!}
                    <div class="col-lg-4">
                        <h3>Price</h3>
                        <ul>
                            <li>{!! Form::label('price', 'Up to 5,000') !!}
                                {!! Form::checkbox('price[]', '-5000') !!}</li>
                            <li>{!! Form::label('price', '5,000–10,000') !!}
                                {!! Form::checkbox('price[]', '5000–10000') !!}</li>
                            <li>{!! Form::label('price', '10,000–25,000') !!}
                                {!! Form::checkbox('price[]', '10000–25000') !!}</li>
                            <li>{!! Form::label('price', '25,000–50,000') !!}
                                {!! Form::checkbox('price[]', '25000-50000') !!}</li>
                            <li>{!! Form::label('price', '50,000–100,000') !!}
                                {!! Form::checkbox('price[]', '50000–100000') !!}</li>
                            <li>{!! Form::label('price', 'Above') !!}
                                {!! Form::checkbox('price[]', 'Above') !!}</li>
                        </ul>
                        <h3>Ending</h3>
                        <ul>
                            <li>{!! Form::label('endingf', 'Ending this week') !!}
                                {!! Form::checkbox('endingf[]', 'this_week') !!}</li>
                            <li>{!! Form::label('endingf', 'newly listed') !!}
                                {!! Form::checkbox('endingf[]', 'newly_listed') !!}</li>
                            <li>{!! Form::label('endingf', 'Purchase now') !!}
                                {!! Form::checkbox('endingf[]', 'Purchase_now') !!}</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h3>Era</h3>
                        <ul>
                            <li>{!! Form::label('era', 'Pre war') !!}
                                {!! Form::checkbox('era[]', 'Pre-war') !!}</li>
                            <li>{!! Form::label('era', '1940-1950') !!}
                                {!! Form::checkbox('era[]', '1940-1950') !!}</li>
                            <li>{!! Form::label('era', '1960-1980') !!}
                                {!! Form::checkbox('era[]', '1960-1980') !!}</li>
                            <li>{!! Form::label('era', '1990-present') !!}
                                {!! Form::checkbox('era[]', '1990-present') !!}</li>
                        </ul>
                        <h3>Media</h3>
                        <ul>
                            <li>{!! Form::label('media', 'Design') !!}
                                {!! Form::checkbox('media[]', 'Design') !!}</li>
                            <li>{!! Form::label('media', 'Paintings and Works on Paper') !!}
                                {!! Form::checkbox('media[]', 'Paintings_Paper') !!}</li>
                            <li>{!! Form::label('media', 'Photographs') !!}
                                {!! Form::checkbox('media[]', 'Photographs') !!}</li>
                            <li>{!! Form::label('media', 'Prints and Multiples') !!}
                                {!! Form::checkbox('media[]', 'Prints_Multiples') !!}</li>
                            <li>{!! Form::label('media', 'Sculpture') !!}
                                {!! Form::checkbox('media[]', 'Sculpture') !!}</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h3>Style</h3>
                        <ul>
                            <li>{!! Form::label('style', 'Abstract') !!}{!! Form::checkbox('style[]', 'Abstract') !!}</li>
                            <li>{!! Form::label('style', 'African American') !!}{!! Form::checkbox('style[]', 'African_American') !!}</li>
                            <li>{!! Form::label('style', 'Asian Contemporary') !!}{!! Form::checkbox('style[]', 'Asian_Contemporary') !!}</li>
                            <li>{!! Form::label('style', 'conceptual') !!}{!! Form::checkbox('style[]', 'conceptual') !!}</li>
                            <li>{!! Form::label('style', 'contemporary') !!}{!! Form::checkbox('style[]', 'contemporary') !!}</li>
                            <li>{!! Form::label('style', 'Emerging Artists') !!}{!! Form::checkbox('style[]', 'Emerging_Artists') !!}</li>
                            <li>{!! Form::label('style', 'Figurative') !!}{!! Form::checkbox('style[]', 'Figurative') !!}</li>
                            <li>{!! Form::label('style', 'Middle Eastern Contemporary') !!}{!! Form::checkbox('style[]', 'Middle_Eastern_Contemporary') !!}</li>
                            <li>{!! Form::label('style', 'Minimalism') !!}{!! Form::checkbox('style[]', 'Minimalism') !!}</li>
                            <li>{!! Form::label('style', 'Modern') !!}{!! Form::checkbox('style[]', 'Modern') !!}</li>
                            <li>{!! Form::label('style', 'Pop') !!}{!! Form::checkbox('style[]', 'Pop') !!}</li>
                            <li>{!! Form::label('style', 'Urban') !!}{!! Form::checkbox('style[]', 'Urban') !!}</li>
                            <li>{!! Form::label('style', 'Vintage Photographs') !!}{!! Form::checkbox('style[]', 'Vintage Photographs') !!}</li>
                        </ul>
                    </div>

                    {!! Form::submit('Zoek') !!}
                    {!! Form::close() !!}
                </div>
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
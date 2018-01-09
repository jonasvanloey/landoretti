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
                    <h1>My Auctions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <h4>Pending</h4>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th class="col">Auction details</th>
                            <th class="col">estaminated price</th>
                            <th class="col">end date</th>
                            <th class="col">remaining time</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pending as $p)
                                <tr>
                                    <td class="row">{{$p->auction_title}}</td>
                                    <td >{{$p->max_est_price}}</td>
                                    <td >{{$p->end_date}}</td>
                                    <td >remaining time</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-2">
                    <a href="{{url('art/add')}}"><button>add new auction</button></a>
                </div>
            </div>
            <div class="row col-lg-12">
                <h4>refused</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th class="col">Auction details</th>
                            <th class="col">estaminated price</th>
                            <th class="col">end date</th>
                            <th class="col">remaining time</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($refused as $r)
                        <tr>
                            <td class="row">{{$r->auction_title}}</td>
                            <td >{{$r->max_est_price}}</td>
                            <td >{{$r->end_date}}</td>
                            <td >remaining time</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row col-lg-12">
                <h4>Active</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th class="col">Auction details</th>
                        <th class="col">estaminated price</th>
                        <th class="col">end date</th>
                        <th class="col">remaining time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($active as $a)
                        <tr>
                            <td class="row">{{$a->auction_title}}</td>
                            <td >{{$a->max_est_price}}</td>
                            <td >{{$a->end_date}}</td>
                            <td >remaining time</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row col-lg-12">
                <h4>Expired</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th class="col">Auction details</th>
                        <th class="col">estaminated price</th>
                        <th class="col">end date</th>
                        <th class="col">remaining time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($expired as $e)
                        <tr>
                            <td class="row">{{$e->auction_title}}</td>
                            <td >{{$e->max_est_price}}</td>
                            <td >{{$e->end_date}}</td>
                            <td >x</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row col-lg-12">
                <h4>Sold</h4>
                <table class="table table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th class="col">Auction details</th>
                        <th class="col">estaminated price</th>
                        <th class="col">end date</th>
                        <th class="col">remaining time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sold as $s)
                        <tr>
                            <td class="row">{{$s->auction_title}}</td>
                            <td >{{$s->max_est_price}}</td>
                            <td >{{$s->end_date}}</td>
                            <td >x</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
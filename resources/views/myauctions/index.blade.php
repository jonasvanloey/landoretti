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
                </div>
                <div class="col-lg-2">
                    <button>add new auction</button>
                </div>
            </div>
            <div class="row col-lg-12"><h4>refused</h4></div>
            <div class="row col-lg-12"><h4>Active</h4></div>
            <div class="row col-lg-12"><h4>Expired</h4></div>
            <div class="row col-lg-12"><h4>Sold</h4></div>
        </div>
    </section>
@endsection
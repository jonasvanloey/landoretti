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
        <div class="container">
            <div class="row">
                <div class="breadcrumbs">
                    <a href="/home">Home</a>><a href="#">Isearch</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1>I Searchs</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <h2>Add a request</h2>
                </div>
                <div class="col-lg-12">
                    <form action="">
                        <div class="col-lg-6">
                            <label for="art">What are you looking for?</label>
                            <input type="text" id="art" name="art">
                        </div>
                        <div class="col-lg-6">
                            <label for="artist">Artist</label>
                            <input type="text" id="artist" name="artist">
                        </div>
                        <div class="col-lg-9">
                            <label for="info">Information about the artwork</label>
                            <input type="text" id="info" name="info">
                        </div>
                        <div class="col-lg-3">
                            <button type="submit">Admit request</button>
                        </div>
                    </form>
                   
                </div>
             
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>overview</h2>
                </div>
                <div class="col-lg-12" style="border: 1px solid darkgrey;">
                    <div class="col-lg-10">
                        <p><b>Search:</b></p>
                        <p><b>Description:</b></p>
                        <p><b>Posted on:</b></p>
                    </div>
                    <div class="col-lg-2">
                        <button>I own this artwork <span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section></section>
@endsection
@extends('welcome')
@section('content')
    <section class="landing">
        <div class="wrapper landingwr">
            <div class="row">
                <div class="col-xs-12 blue center-block">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="hdiw">
        <div class="wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h1>{{trans('homepage.title')}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-lg-4">
                    <div class="icon"><span class="glyphicon glyphicon-ok"></span></div>
                    <h3>{{trans('homepage.sign_up')}}</h3>
                </div>
                <div class="col-xs-4 col-lg-4"><div class="icon"><span class="glyphicon glyphicon-pencil"></span></div>
                    <h3>{{trans('homepage.make_deals')}}</h3>
                </div>
                <div class="col-xs-4 col-lg-4"><div class="icon"><span></span></div>
                    <h3>{{trans('homepage.everybody_happy')}}</h3>
                </div>
            </div>
        </div>

    </section>
    <section class="highlight">
        <div class="wrapper">
            <div class="ro">
                <div class="col-lg-12">
                    <h2>{{trans('homepage.pop')}}<span></span></h2>
                    @foreach($bids as $b)
                        <div class="col-lg-3">

                            <a href="/art/{{$b->id}}">
                                <img class="prodimage" src="{!!   asset('storage/bids/' .$b->image_path) !!}" alt="{{$b->auction_title}}" >
                                <h4>{{$b->auction_title}}</h4>
                            </a>
                        </div>
                        @endforeach


                </div>
            </div>
        </div>
    </section>
    @endsection
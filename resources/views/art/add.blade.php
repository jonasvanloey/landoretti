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
                <h1>add a bid</h1>
                {!!  Form::open(['url' => '/art/store','method' => 'post', 'files' => true]) !!}

                <div class="form-group">
                    {!!  Form::label('style','style:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::select('style', ['Abstract' => 'Abstract', 'African American' => 'African American', 'Asian Contemporary' => 'Asian Contemporary','Conceptual'=>'Conceptual','Contemporary'=>'Contemporary','Emerging Artists'=>'Emerging Artists','Figurative'=>'Figurative','Middle Eastern Contemporary'=>'Middle Eastern Contemporary','Minimalism'=>'Minimalism','Modern'=>'Modern','Pop'=>'Pop','Urban'=>'Urban','Vintage Photographs'=>'Vintage Photographs'], null, ['placeholder' => 'Style']) !!}
                        @if ($errors->has('style'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('style') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('media','media:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::select('media', ['Design' => 'Design', 'Paintings and Works on Paper' => 'Paintings and Works on Paper', 'Photographs' => 'Photographs','Prints and Multiples'=>'Prints and Multiples','Sculpture'=>'Sculpture'], null, ['placeholder' => 'media']) !!}
                        @if ($errors->has('media'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('media') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('title','title:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('title',null,['class'=>'form-control']) !!}
                        @if ($errors->has('title'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('min_est_price','minimum estimated price:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('min_est_price',null,['class'=>'form-control']) !!}
                        @if ($errors->has('min_est_price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('min_est_price') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('max_est_price','maximum estimated price:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('max_est_price',null,['class'=>'form-control']) !!}
                        @if ($errors->has('max_est_price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('max_est_price') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('buyout_price','Buyout price:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('buyout_price',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('buyout_price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('buyout_price') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('width','width:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('width',null,['class'=>'form-control col-md-7']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('height','height:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('height',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('height'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('depth','depth:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('depth',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('depth'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('depth') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('year','year:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('year',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('year'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('origin','origin:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::text('origin',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('origin'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('origin') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('description','Description:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::textarea('description',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('condition','Condition:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::textarea('condition',null,['class'=>'form-control col-md-7']) !!}
                        @if ($errors->has('condition'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('condition') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    {!!  Form::label('end_date','End date:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7 ">
                        {!! Form::date('end_date', \Carbon\Carbon::now()) !!}
                        @if ($errors->has('end_date'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('image', 'Image:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7">
                        {!! Form::file('image') !!}
                        @if ($errors->has('image'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('signature_image', 'Signature image:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7">
                        {!! Form::file('signature_image') !!}
                        @if ($errors->has('signature_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('signature_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('optional_image', 'Optional image:',['class'=> 'col-md-3 ']) !!}
                    <div class="col-md-7">
                        {!! Form::file('optional_image') !!}
                        @if ($errors->has('optional_image'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('optional_image') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                {!! Form::submit('Submit') !!}

            </div>
        </div>
    </section>
@endsection
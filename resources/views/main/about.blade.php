@extends('layouts.app')

@section('content')
    <body>
    <section class="about" id="about">
        <div class="container">
            <div class="main-text">
                <h1>{{ trans('main.about') }}<span> {{ trans('main.us') }}</span></h1>
            </div>

            <div class="row" style="margin-top: 50px">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('images/about-img.png') }}" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <h2>{{ trans('main.how.travel') }}</h2>
                    <p>{{ trans('main.about.p') }}
                    </p>
                    <button id="about-btn"><a href="{{ route('book.create') }}" class="btn-link">{{trans('main.read.more')}}...</a>
                    </button>
                </div>
            </div>

        </div>
    </section>

    </body>
@endsection

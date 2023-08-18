@extends('layouts.app')

@section('content')

    <body>
    <section class="packages" id="packages">
        <div class="container">

            <div class="main-text">
                <h1><span>{{ trans('main.p') }}</span>{{ trans('main.ackages') }}</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach($packages as $package)
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card mb-3" >
                        <img src="{{ asset('storage/' . $package->image) }}" alt="">
                        <div class="card-body">
                            <h3>{{ $package->translate(App::getLocale())->country}}</h3>
                            <p>{{ Str::limit(strip_tags($package->translate(App::getLocale())->description), 300) }}</p>

                            <div class="star">
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="star {{ $package->rate >= $i ? 'fa-solid fa-star checked' : 'fa-solid fa-star' }}"></span>
                                    @endfor
                                </div>
                            </div>
                            <h6>Price: <strong>{{ $package->price }}</strong></h6>
                            <a href="{{ route('main') }}">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach


{{--                <div class="col-md-4 py-3 py-md-0">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{ asset('images/pakistan.png') }}" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>Pakistan</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, dolorem.</p>--}}
{{--                            <div class="star">--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star "></i>--}}
{{--                            </div>--}}
{{--                            <h6>Price: <strong>$500</strong></h6>--}}
{{--                            <a href="#book">Book Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 py-3 py-md-0">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{ asset('images/france.png') }}" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <h3>France</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, dolorem.</p>--}}
{{--                            <div class="star">--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star checked"></i>--}}
{{--                                <i class="fa-solid fa-star "></i>--}}
{{--                            </div>--}}
{{--                            <h6>Price: <strong>$500</strong></h6>--}}
{{--                            <a href="#book">Book Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    </body>

@endsection

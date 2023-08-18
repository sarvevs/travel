@extends('layouts.app')

@section('content')

    <body>
    <section class="services" id="services">
        <div class="container">
            <div class="main-text">
                <h1><span>{{ trans('main.s') }}</span>{{ trans('main.ervices') }}</h1>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-utensils"></i>
                        <div class="card-body">
                            <h3>{{ trans('main.hotel') }}</h3>
                            <p>{{ trans('main.hotel.p') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-hotel"></i>
                        <div class="card-body">
                            <h3>{{ trans('main.food') }}</h3>
                            <p>{{ trans('main.food.p') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-bullhorn"></i>
                        <div class="card-body">
                            <h3>{{ trans('main.guide') }}</h3>
                            <p>{{ trans('main.guide.p') }}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-globe-asia"></i>
                        <div class="card-body">
                            <h3>{{ trans('main.around') }}</h3>
                            <p>{{ trans('main.around.p') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-plane"></i>
                        <div class="card-body">
                            <h3>{{ trans('main.faster') }}</h3>
                            <p>{{ trans('main.faster.p') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-hiking"></i>
                        <div class="card-body">
                            <h3>{{ trans('main.adventures') }}</h3>
                            <p>{{ trans('main.adventures.p') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
@endsection

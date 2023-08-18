@extends('layouts.app')

@section('content')
    <style>
        .slick-slide img {
            height: 350px; /* Замените на желаемую высоту */
            margin: 10px;
            object-fit: cover;
        }

        .slick-slide {
            border: 1px solid #ddd; /* Рамка */
            background-color: #f5f5f5; /* Фоновый цвет */
        }

        .slick-slider {
            margin-left: 30px;
            margin-right: 30px;
        }
    </style>
    <body>
    <div class="slick-slider py-3">
        @foreach ($galleries as $gallery)
            @foreach ($allImages[$gallery->id] as $image)
                <div>
                    <img src="{{ asset('images/gallery/' . $image) }}" alt="">
                </div>
            @endforeach
        @endforeach
    </div>
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
                        <button id="about-btn"><a href="{{ route('book.create') }}" class="btn-link">{{ trans('main.read.more') }}...</a>
                        </button>
                </div>
            </div>

        </div>
    </section>

    </body>
@endsection

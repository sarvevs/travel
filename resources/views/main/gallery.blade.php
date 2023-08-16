@extends('layouts.app')

@section('content')

    <body>
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="main-text">
                <h1><span>G</span>allery</h1>
            </div>

            <div class="row" style="margin-top: 30px;">
{{--                <div class="col-md-4 py-3 py-md-0">--}}
                <div class="col-md-12 py-3 py-md-0" style="column-count: 3;">
                    @foreach ($galleries as $gallery)
                        @foreach ($allImages[$gallery->id] as $image)
                    <div class="card">
                        <img src="{{ asset('images/gallery/' . $image) }}" alt="" >
                    </div>

                    @endforeach
                    @endforeach
                </div>
                </div>

        </div>
    </section>

    </body>

@endsection

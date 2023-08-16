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
                <h1>About<span> Us</span></h1>
            </div>

            <div class="row" style="margin-top: 50px">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('images/about-img.png') }}" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <h2>How Travel Agency Work</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores assumenda aut
                        distinctio, dolor doloribus ducimus eos eum eveniet facilis fuga illo impedit ipsam iste
                        molestiae, nihil provident quae quaerat reiciendis repellat repellendus rerum velit veritatis
                        vitae voluptate voluptatem voluptatibus! A animi delectus ex itaque, libero necessitatibus
                        perferendis provident. A ab accusantium aut autem culpa cumque deserunt dolor doloribus error
                        illo ipsum itaque, iusto neque pariatur similique tempora totam.</p>
                    <button id="about-btn"><a href="{{ route('book.create') }}" class="btn-link">Read More...</a></button>
                </div>
            </div>

        </div>
    </section>

    </body>
@endsection

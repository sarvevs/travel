@extends('layouts.app')

@section('content')
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1><span>{{ trans('main.b') }}</span>{{ trans('main.ook') }}</h1>
            </div>

            <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="{{ asset('images/book-img.png')}}" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="text" class="form-control" placeholder="{{ trans('main.book.where') }}" name="country" ><br>
                        <input type="text" class="form-control" placeholder="{{ trans('main.book.how') }}" name="how_many" ><br>
                        <input type="date" class="form-control" placeholder="{{ trans('main.book.arrivals') }}" name="arrivals" ><br>
                        <input type="date" class="form-control" placeholder="{{ trans('main.book.leaving') }}" name="leaving" ><br>
                        <textarea  class="form-control" rows="5" name="info"
                                  placeholder="{{ trans('main.book.info') }}"></textarea>
                        <input type="submit" value="{{ trans('main.book.now') }}" class="submit" required>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

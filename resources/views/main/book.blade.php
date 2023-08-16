@extends('layouts.app')

@section('content')
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1><span>B</span>ook</h1>
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
                        <input type="text" class="form-control" placeholder="Where To" name="country" ><br>
                        <input type="text" class="form-control" placeholder="How Many" name="how_many" ><br>
                        <input type="date" class="form-control" placeholder="Arrivals" name="arrivals" ><br>
                        <input type="date" class="form-control" placeholder="Leaving" name="leaving" ><br>
                        <textarea  class="form-control" rows="5" name="info"
                                  placeholder="Enter Your Name & Details"></textarea>
                        <input type="submit" value="Book Now" class="submit" required>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

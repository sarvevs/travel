@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання тура</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.packages.index') }}">Тури</a></li>
                            <li class="breadcrumb-item active">Додавання тура</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="country" placeholder="Країна"
                                       value="{{ old('country') }}">
                                @error('country')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <div class="form-group ">
                                    <label>Контент</label>
                                    <form method="post">
                                        @csrf
                                        <textarea id="summernote" name="description"> {{ old('description') }}</textarea>
                                        @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </form>
                                </div>
                                <div class="form-group w-50">
                                    <label for="exampleInputFile">Додати фото</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" accept="image/*"
                                                   name="image">
                                            <label class="custom-file-label">Виберіть фото</label>
                                        </div>
                                    </div>
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group w-50">
                                    <label>Рейтинг</label>
                                    <div class="rating" >
                                        <input type="radio" id="star1" name="rate" value="1">
                                        <label for="star1" class="star">&#9733;</label>
                                        <input type="radio" id="star2" name="rate" value="2">
                                        <label for="star2" class="star">&#9733;</label>
                                        <input type="radio" id="star3" name="rate" value="3">
                                        <label for="star3" class="star">&#9733;</label>
                                        <input type="radio" id="star4" name="rate" value="4">
                                        <label for="star4" class="star">&#9733;</label>
                                        <input type="radio" id="star5" name="rate" value="5">
                                        <label for="star5" class="star">&#9733;</label>
                                    </div>
                                    @error('rate')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group w-50">

                                        <label>Вартість</label>
                                        <div class="input-wrapper" >
                                            <span class="currency">$</span>
                                            <input type="number"  name="price" class="price-input" placeholder="Enter price">
                                        </div>
                                    @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Додати">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


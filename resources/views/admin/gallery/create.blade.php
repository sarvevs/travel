@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання фото</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.gallery.index') }}">Галерея</a>
                            </li>
                            <li class="breadcrumb-item active">Додати фото</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="container mt-5">
                        <h3 class="text-center mb-5">Image Upload in Laravel</h3>
                        <form action="{{route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="user-image mb-3 text-center">
                                <div class="imgPreview" > </div>
                            </div>

                            <div class="custom-file">
                                <input type="file" name="images[]" class="custom-file-input" id="images" multiple="multiple">
                                <label class="custom-file-label" for="images">Choose image</label>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                                Upload Images
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
{{--    <script>--}}
{{--        $(function() {--}}
{{--            // Multiple images preview with JavaScript--}}
{{--            var multiImgPreview = function(input, imgPreviewPlaceholder) {--}}

{{--                if (input.files) {--}}
{{--                    var filesAmount = input.files.length;--}}

{{--                    for (i = 0; i < filesAmount; i++) {--}}
{{--                        var reader = new FileReader();--}}

{{--                        reader.onload = function(event) {--}}
{{--                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);--}}
{{--                        }--}}

{{--                        reader.readAsDataURL(input.files[i]);--}}
{{--                    }--}}
{{--                }--}}

{{--            };--}}

{{--            $('#images').on('change', function() {--}}
{{--                multiImgPreview(this, 'div.imgPreview');--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
    <script>
        $(function() {
            // Multiple images preview with JavaScript
            var multiImgPreview = function(input, imgPreviewPlaceholder) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    var imgContainer = $('<div>').css({
                        display: 'flex',
                        flexWrap: 'nowrap',
                        overflowX: 'auto',
                        alignItems: 'center' // Выравнивание по вертикали
                    });

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var img = $($.parseHTML('<img>')).attr('src', event.target.result);
                            img.css({ width: '300px', height: '300px', marginRight: '10px' }); // Увеличенный размер
                            img.appendTo(imgContainer);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }

                    imgContainer.appendTo(imgPreviewPlaceholder);
                }

            };

            $('#images').on('change', function() {
                multiImgPreview(this, 'div.imgPreview');
            });
        });
    </script>
@endsection

























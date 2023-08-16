@extends('admin.layouts.main')
@section('content')
    <style>

        .image-preview {
            margin: 20px;
            box-shadow: 0 5px 5px -6px black;

            border-radius: 5px;
        }



    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пости</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item active">Галерея</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-1 mb-3">
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-block btn-primary">Додати</a>
                </div>
                <div class="card">


                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Фото</th>

                                <th>Дія</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($gallery as $gal)
                                <tr>
                                    <td>{{ $gal->id }}</td>
                                    <td >
                                        @foreach (json_decode($gal->images) as $imageName)
                                            <img src="{{ asset('images/gallery/' . $imageName) }}"
                                                 class="image-preview" alt="Image"
                                                 style="width: 200px; height: 250px; object-fit: cover"  >
                                        @endforeach
                                    </td>
                                    <td>

                                        <form action="{{ route('admin.gallery.destroy', $gal->id) }}"
                                              method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger text-right"
                                                   role="button"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <script>
            const imageContainers = document.querySelectorAll('.image-container');

            imageContainers.forEach(container => {
                const image = container.querySelector('.image-preview');

                container.addEventListener('mousemove', (e) => {
                    const boundingRect = container.getBoundingClientRect();
                    const offsetX = (e.clientX - boundingRect.left) / boundingRect.width;
                    const offsetY = (e.clientY - boundingRect.top) / boundingRect.height;

                    image.style.transformOrigin = `${offsetX * 100}% ${offsetY * 100}%`;
                });
            });
        </script>
@endsection


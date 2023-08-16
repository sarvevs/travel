@extends('admin.layouts.main')
@section('content')

    <style>
        .star {
            display: inline-block;
            color: #ccc;
            font-size: 20px;
        }

        .star.active {
            color: #ffcc00;
        }
    </style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 w-100">
                    <div class="col-sm-6 d-flex align-items-center" style="margin-left:100px;">
                        <h1 class="m-auto"> {{ $package->country }}</h1>
                        <a href="{{ route('admin.packages.edit', $package->id) }}" class="text-success"><i
                                    class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>


                    </div>
                    <div class="col-sm">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.packages.index') }}">Тури</a></li>
                            <li class="breadcrumb-item active">\\\\\\</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 ">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover ">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $package->id }}</td>
                                    </tr>

                                    <tr>
                                        <td>Країна</td>
                                        <td>{{ $package->country }}</td>
                                    </tr>
                                    <tr>
                                        <td>Опис</td>
                                        <td>{{ $package->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Рейтинг</td>
                                        <td>
                                            <div class="rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <span class="star {{ $package->rate >= $i ? 'active' : '' }}">&#9733;</span>
                                                @endfor
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Вартість</td>
                                        <td>{{ $package->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Фото</td>
                                        <td><img src="{{ asset('storage/' . $package->image) }}" alt=""></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


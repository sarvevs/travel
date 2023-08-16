@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 w-100">
                    <div class="col-sm-6 " >
                        <h1 class="m-auto"> {{ $user_request->country }}</h1>
                        <form action="{{ route('admin.user_requests.destroy', $user_request->id) }}" method="POST">
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.user_requests.index') }}">Заяви</a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 ">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover ">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $user_request->id }}</td>
                                    </tr>

                                    <tr>
                                        <td>Країна</td>
                                        <td>{{ $user_request->country }}</td>
                                    </tr>
                                    <tr>
                                        <td>Кількість</td>
                                        <td>{{ $user_request->how_many }}</td>
                                    </tr>
                                    <tr>
                                        <td>Дата виїзду</td>
                                        <td>
                                            <p>{{ \Carbon\Carbon::parse($user_request->arrivals)->format('d.m.Y')  }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Дата прибутя</td>
                                        <td ><p>{{ \Carbon\Carbon::parse($user_request->leaving)->format('d.m.Y')  }}</p></td>
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


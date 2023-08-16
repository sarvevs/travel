@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Заяви</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Головна</a></li>
                            <li class="breadcrumb-item active">Заяви</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="col-20">
                    <div class="card">

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Назва</th>
                                    <th class="text-right">Переглянути </th>
                                    <th class="text-right">Видалити</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user_requests as $user_request)
                                    <tr>
                                        <td>{{ $user_request->id }}</td>
                                        <td>{{ $user_request->country }}</td>
                                        <td class="text-right"><a href="{{ route('admin.user_requests.show', $user_request->id) }}"><i
                                                    class="far fa-eye"></i></a></td>
                                        <td class="text-right">
                                            <form action="{{ route('admin.user_requests.destroy', $user_request->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="border-0 bg-transparent" >
                                                    <i class="fas fa-trash text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection


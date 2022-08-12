@extends('layouts.admin_layout')
@section('title', 'Пользователи')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Пользователи</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Пользователь</th>
                            <th>email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $model_has_roles => $model_has_role)
                        <tr>
                            <td>{{ $model_has_role->id }}</td>
                            <td>{{ $model_has_role->name }}</td>
                            <td>{{ $model_has_role->email }}</td>
                            {{-- <td>{{ $model_has_role->password }}</td> --}}
                            <td class="project-actions text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                        data-bs-toggle="dropdown" aria-expanded="false">Действие</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <li>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('users.edit',$model_has_role->id,$model_has_role->role_id) }}"><i
                                                    class="fas fa-pencil-alt"></i>Редактировать</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('users.destroy',$model_has_role->id) }}"
                                                method="POST" id="form" style="display: inline-block">
                                                @csrf
                                                <!-- Проверка запросов. -->
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-btn"><i
                                                        class="fas fa-trash"></i>Удалить</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
{{--  {{!! $users->links() !!}   --}}
@endsection
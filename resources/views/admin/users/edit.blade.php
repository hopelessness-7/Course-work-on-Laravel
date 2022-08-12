@extends('layouts.admin_layout')
@section('title', 'Редоктирование пользователя')
    @section('content')
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Изменения пользователя</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @if ($message = Session::get('success'))  <!-- Показ сообщения об операции (создание, удаление или изменение). -->
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form action="{{ route('users.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Пользователь</label>
                                        <input type="text" value ="{{ $user -> name}}" name="name" class="form-control"
                                            id="exampleInputEmail1" placeholder="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">email</label>
                                        <input type="text" value ="{{ $user -> email}}" name="email" class="form-control"
                                            id="exampleInputEmail1" placeholder="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">password</label>
                                        <input type="text" value ="{{ $user -> password}}" name="password" class="form-control"
                                            id="exampleInputEmail1" placeholder="password" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @endsection
@extends('layouts.admin_layout')
@section('title', 'Редоктирование оценки')
    @section('content')
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Изменения оценки</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Проблемка!</strong> Введите корректную информацию.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form action="{{ route('balls.update',$ball->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID студента</label>
                                        <input type="text" value ="{{ $ball -> student_id}}" name="student_id" class="form-control"
                                            id="exampleInputEmail1" placeholder="student_id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID предмета</label>
                                        <input type="text" value ="{{ $ball -> subject_id}}" name="subject_id" class="form-control"
                                            id="exampleInputEmail1" placeholder="subject_id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Оценка</label>
                                        <input type="text" value ="{{ $ball -> ball}}" name="ball" class="form-control"
                                            id="exampleInputEmail1" placeholder="ball" required>
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

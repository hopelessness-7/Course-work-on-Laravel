@extends('layouts.admin_layout')
@section('title', 'Редоктирование предмета')
    @section('content')
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Изменения предмета</h1>
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
                        <form action="{{ route('subjects.update',$subject->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Наименование предмета</label>
                                    <input type="text" value ="{{ $subject -> name}}" name="name" class="form-control"
                                        id="exampleInputEmail1" placeholder="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Код предмета</label>
                                    <input type="text" value ="{{ $subject -> code}}" name="code" class="form-control"
                                        id="exampleInputEmail1" placeholder="code" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Код преподователя </label>
                                    <input type="text" value ="{{ $subject -> teacher_id}}" name="teacher_id" class="form-control"
                                        id="exampleInputEmail1" placeholder="teacher_id" required>
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
    <script>
        function funBtn () {
            var inputIDsub = document.querySelector('#IDsub');
            var inputBall = document.querySelector('#ball');
            localStorage.setItem("IDsub",inputIDsub.value);
            localStorage.setItem("ball",inputBall.value);

        }
        window.onload = function(){
            var storedValue1 = localStorage.getItem("IDsub");
            var storedValue2 = localStorage.getItem("ball");
            document.querySelector('#IDsub').value = storedValue1;
            document.querySelector('#ball').value = storedValue2;
            localStorage.clear();
            console.log(storedValue1)
        }
    </script>
@endsection
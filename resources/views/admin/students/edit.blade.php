@extends('layouts.admin_layout')
@section('title', 'Редоктирование студента')
    @section('content')
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Изменения студента</h1>
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
                        <form action="{{ route('students.update',$student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <strong>Имя Cтудента:</strong>
                                    <input type="text" name="name" value ="{{ $student -> name}}" class="form-control" placeholder="Имя студента">
                                </div>
                                <div class="form-group">
                                    <strong>Фамилия Cтудента:</strong>
                                    <input type="text" name="lastname" value ="{{ $student -> lastname}}" class="form-control" placeholder="фамилия Cтудента">
                                </div>
                                <div class="form-group">
                                    <strong>Номер:</strong>
                                    <input type="text" name="phone" value ="{{ $student -> phone}}" class="form-control" placeholder="номер Cтудента">
                                </div>
                                <div class="form-group">
                                    <strong>Емаил:</strong>
                                    <input type="text" name="email" value ="{{ $student -> email}}" class="form-control" placeholder="Емаил Cтудента">
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
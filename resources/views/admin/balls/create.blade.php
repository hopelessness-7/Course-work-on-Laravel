@extends('layouts.admin_layout')
@section('title', 'Cоздание оценки')
    @section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание оценки</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @if ($errors->any())            <!-- Валидация. -->
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
                            <form id="form" action="{{ route('balls.store') }}" method="POST">   <!-- созадние записии, ссылка на контроллер. -->
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID предмета:</label>
                                        <input type="text" name="subject_id" class="form-control" id="IDstud" placeholder="ID предмета" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID студента</label>
                                        <input type="text" name="student_id" class="form-control"
                                            id="IDsub" placeholder="ID студента" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Оценка:</label>
                                        <input type="text" name="ball" class="form-control" 
                                            id="ball" placeholder="Оценка" required>
                                    </div>
                                    <div>
                                        <button  type="submit" class="btn btn-primary" id="btn" onclick="funBtn()">Создать</button>
                                    </div>
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
                var inputBall = document.querySelector('#IDstud');
                localStorage.setItem("IDsub",inputIDsub.value);
                localStorage.setItem("ball",inputBall.value);
                localStorage.setItem("IDstud",inputIDstud.value);
            }
            window.onload = function(){
                var storedValue1 = localStorage.getItem("IDsub");
                var storedValue2 = localStorage.getItem("ball");
                var storedValue2 = localStorage.getItem("IDstud");
                document.querySelector('#IDsub').value = storedValue1;
                document.querySelector('#ball').value = storedValue2;
                document.querySelector('#IDstud').value = storedValue3;
                localStorage.clear();
                console.log(storedValue1)
            }
        </script>
@endsection 
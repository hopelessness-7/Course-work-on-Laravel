@extends('layouts.admin_layout')
@section('title', 'Cоздание cтудента')
    @section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание студента</h1>
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
                            <form id="form" action="{{ route('students.store') }}" method="POST">   <!-- созадние записии, ссылка на контроллер. -->
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Фамилия пользовтеля:</label>
                                        <select name="" id="userId">
                                            @foreach ($users as $user )
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                         <input style="display: none" type="text" name="users_id" class="form-control" id="inputId" placeholder="ID предмета" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Имя пользовтеля:</label>
                                        <select name="" id="userName">
                                            @foreach ($users as $user )
                                                <option value="{{$user->name}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                         <input style="display: none" type="text" name="name" class="form-control" id="inputName" placeholder="ID предмета" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">email:</label>
                                        <select name="" id="userEmail">
                                            @foreach ($users as $user )
                                                <option value="{{$user->email}}">{{$user->email}}</option>
                                            @endforeach
                                        </select>
                                        <input style="display: none" type="text" name="email" class="form-control" 
                                        id="inputEmail"  placeholder="Оценка" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Телефон:</label>
                                        <input type="text" name="phone" class="form-control"
                                            id="IDsub" placeholder="ID студента" required>
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
    var select1 = document.getElementById('userName');
    
    select1.addEventListener('change', function(){
        var getValue = this.value;
        console.log( getValue );
        var inputName = document.getElementById('inputName');
        inputName.value = getValue;
        console.log(inputName)
    });

    var select2 = document.getElementById('userEmail');

    select2.addEventListener('change', function(){
        var getValue = this.value;
        console.log( getValue );
        var inputEmail = document.getElementById('inputEmail');
        inputEmail.value = getValue;
        console.log(inputEmail)
    });

    var select3 = document.getElementById('userId');

    select3.addEventListener('change', function(){
        var getValue = this.value;
        console.log( getValue );
        var inputId = document.getElementById('inputId');
        inputId.value = getValue;
        console.log(inputId)
    });
        
</script>
@endsection 
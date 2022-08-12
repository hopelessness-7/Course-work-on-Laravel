@extends('layouts.admin_layout')
@section('title', 'Расписание')
    @section('content')
<style>
    .container {
        max-width: 500px;
    }
    dl, ol, ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
</style>
<div class="container mt-5">
    <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
      <h3 class="text-center mb-5">Добавления расписания</h3>
        @csrf
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
      @endif

      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Группа</label>
            <input type="text" name="name_group" class="form-control"
                id="IDsub" placeholder="группа" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Дата начала</label>
            <input type="date" name="data_from" class="form-control"
                id="IDsub" placeholder="ID студента" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Дата конца</label>
            <input type="date" name="data_to" class="form-control"
                id="IDsub" placeholder="ID студента" required>
        </div>
        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input" id="chooseFile">
            <label class="custom-file-label" for="chooseFile">Выберите файл</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
            Добавить расписание
        </button>
        <a class="btn btn-primary btn-block mt-4" href="{{ route('schedules.index') }}">Назад</a>
    </form>
</div>
@endsection         <!-- Конец секции. -->
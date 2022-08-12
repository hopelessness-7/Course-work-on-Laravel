@extends('layouts.admin_layout')
@section('title', 'Расписание групп')
    @section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Расписание групп</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @if ($message = Session::get('success'))  <!-- Показ сообщения об операции (создание, удаление или изменение). -->
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="d-md-flex justify-content-md-end p-3">
        <a class="btn btn-secondary" href="{{ route('fileUpload') }}">Добавить расписание</a>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th with="18" >№</th>
                                <th>Группа</th>
                                <th>Дата начала</th>
                                <th>Дата конца</th>
                                <th>Расписание</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $schedule->name_group }}</td>
                                    <td>{{ $schedule->data_from }}</td>
                                    <td>{{ $schedule->data_to }}</td>
                                    <td><a href="{{ $schedule->file_path }}">Расписание</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    {!! $schedules->links() !!}
@endsection         <!-- Конец секции. -->
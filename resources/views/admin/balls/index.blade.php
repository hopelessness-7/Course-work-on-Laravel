@extends('layouts.admin_layout')
@section('title', 'Оценки')
    @section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Оценки</h1>
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
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID предмета</th>
                                <th>ID студента</th>
                                <th>Оценка</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($balls as $ball)
                                <tr>
                                    <td>{{ $ball->id }}</td>
                                    <td>{{ $ball->student_id }}</td>
                                    <td>{{ $ball->subject_id }}</td>
                                    <td>{{ $ball->ball }}</td>
                                    <td class="project-actions text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">Действие</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <li>
                                                    <a class="btn btn-info btn-sm" href="{{ route('balls.edit',$ball->id) }}"><i class="fas fa-pencil-alt"></i>Редактировать</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('balls.destroy',$ball->id) }}" method="POST" id="form" style="display: inline-block">
                                                        @csrf    <!-- Проверка запросов. -->
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm delete-btn"><i class="fas fa-trash">Удалить</i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    {!! $balls->links() !!}
@endsection         <!-- Конец секции. -->

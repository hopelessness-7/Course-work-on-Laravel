@extends('layouts.admin_layout')
@section('title', 'Студенты')
    @section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Студенты</h1>
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
        <a class="btn btn-secondary" href="{{ route('students.create') }}">Добавить cтудена</a>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Фамилия
                                </th>
                                <th>
                                    Номер
                                </th>
                                <th>
                                    email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>
                                        {{ $student->id }}
                                    </td>
                                    <td>
                                        {{ $student->name }}
                                    </td>
                                    <td>
                                        {{ $student->lastname }}
                                    </td>
                                    <td>
                                        {{ $student->phone }}
                                    </td>
                                     <td>
                                        {{ $student->email }}
                                    </td>
                                    <td class="project-actions text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                              Действие
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <li>
                                                    <a class="btn btn-info btn-sm" href="{{ route('students.edit',$student->id) }}">
                                                        <i class="fas fa-pencil-alt"></i>
                                                            Редактировать
                                                    </a>
                                                </li>
                                                    <form action="{{ route('students.destroy',$student->id) }}" method="POST" id="form" style="display: inline-block">
                                                        @csrf    <!-- Проверка запросов. -->
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Удалить
                                                        </button>
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
    {!! $students->links() !!}
@endsection         <!-- Конец секции. -->
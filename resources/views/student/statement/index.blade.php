@extends('layouts.student_layout')
@section('title', 'Ведомость')
    @section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Ведомость</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>
                                    №
                                </th>
                                <th>
                                    Пользователь
                                </th>
                                <th>
                                    email
                                </th>
                                <th>
                                    password
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    {!! $statement->links() !!}
@endsection         <!-- Конец секции. -->
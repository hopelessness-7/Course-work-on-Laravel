@extends('layouts.student_layout')
@section('title', 'Ведомость')
@section('content')
<style>
    .content input {
        width: 25%;
        display: inline-block;
        margin-bottom: 20px;
    }
</style>
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
    Начальная дата: <input class="form-control" id="from" type="date"> Конечная дата: <input class="form-control" id="to"
    type="date">
    <input class="form-control" id="name" type="text" placeholder="Введите дату">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-striped projects"  >
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Предмет</th>
                            <th>Оценка</th>
                            <th>Дата</th>
                        </tr>
                    </thead>
                    <tbody id="my-table">
                        @foreach ($statements as $balls=>$ball )
                        @if (Auth::user()->id === $ball->users_id )
                            <tr>
                                <td>{{ $ball->id }}</td>
                                <td>{{ $ball->name }}</td>
                                <td>{{ $ball->ball }}</td>
                                <td>{{ $ball->created_at }}</td>
                            </tr>    
                            @endif 
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>
<script>
    //jquery
    $(function () {
        //name part
        $("#name").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#my-table").find('tr').filter(function () {
                $(this).toggle($(this).find('td').text().toLowerCase().indexOf(value) > -1)
            });
        });
        $("#from,#to").bind('keyup change', function () {

            var val1 = moment($('#from').val().toLowerCase(), 'YYYY/MM/DD');
            var val2 = moment($('#to').val().toLowerCase(), 'YYYY/MM/DD');

            $("#my-table").find('tr').filter(function () {
                $(this).toggle((moment($(this).find('td').text().toLowerCase(),
                    'YYYY/MM/DD') >= (val1) || !val1["_isValid"]) && (moment($(this).find('td').text()
                        .toLowerCase(),
                        'YYYY/MM/DD') <= (val2) || !val2["_isValid"]))
            });
            //console.log(val1["_isValid"], val2["_isValid"]);
        })


    });
</script>

@endsection
<!-- Конец секции. -->
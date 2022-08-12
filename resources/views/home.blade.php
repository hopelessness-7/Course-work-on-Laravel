@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Добро пожаловать, если вы новый пользователь, то ожидайте подверджения - ') }}<strong>{{ $user = auth()->user()->name }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ФИО пользователя:') }}
                    {{ $user = auth()->user()->name }}<br>
                    {{ __('ID пользователя:') }}
                    {{ $user = auth()->user()->id }}<br>
                    {{ __('Email пользователя:') }}
                    <a href="mailto:{{ $user = auth()->user()->email }}">{{ $user = auth()->user()->email }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
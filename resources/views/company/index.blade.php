{{-- <form action="#" method="POST" class="form-horizontal">
    @csrf
    <!-- Name input-->
    <div class="form-floating mb-3">
        <input class="form-control" type="text" name="name">
        <label for="name">Nome</label>
    </div>
    <!-- Email address input-->
    <div class="form-floating mb-3">
        <input class="form-control" type="email" name="email">
        <label for="email">Email</label>
    </div>
    <!-- Phone number input-->
    <div class="form-floating mb-3">
        <input class="form-control" type="tel" name="phone">
        <label for="phone">Telefone</label>
    </div>
    <!-- Message input-->
    <div class="form-floating mb-3">
        <input class="form-control" type="password" name="password">
        <label for="phone">Senha</label>
    </div><div class="form-floating mb-3">
        <input class="form-control" type="password" name="password_confirmation">
        <label for="phone">Confirmar senha</label>
    </div>
    <!-- Submit Button-->
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
    </div>
</form> --}}


@extends('layouts.app')

@section('title', 'Usuários')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Usuários</li>
                </ol>
            </div>
            <h3 class="page-title">Usuários</h3>
        </div>
    </div>
</div>
<br>

<div class="card">
    <div class="card-body">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="header-title">Lista de usuários</h4>
        <div class="dropdown">
            <a href="{{ route('company.create')}}" class="btn btn-primary btn-sm">Cadastrar</a>
        </div>
    </div>
    @include('company._partials.list-companies')
    </div>
</div>
<br>



@endsection
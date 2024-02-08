@extends('layouts.app')

@section('title', 'Usuários')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Empresas</a></li>
                    <li class="breadcrumb-item active">Nova empresa</li>
                </ol>
            </div>
            {{-- <h3 class="page-title">{{ $user->name }}</h3> --}}
        </div>
    </div>
</div>
<br>
{{-- Form para o cadastrar os usuarios do sistema --}}
<form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data" id="idFormUser" class="form-horizontal">
    @csrf
    @include('company._partials.form-cad-empresa')
</form>

@endsection
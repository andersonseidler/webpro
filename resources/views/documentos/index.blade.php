@extends('layouts.app')

@section('title', 'Emprestimos')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Documentos</li>
                </ol>
            </div>
            <h3 class="page-title">Documentos</h3>
        </div>
    </div>
</div>
<br>

<div class="card">
    <div class="card-body">
        <div class="row">
            {{-- @if ($errors->any())
                <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                </ul>
            @endif --}}
            <div class="col-sm-12">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title"></h4>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#standard-modal">Cadastrar</button>
                        <button class="btn btn-secondary btn-sm" id="deleteAllSelectedRecord" disabled><i
                                class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
                @if ($docs->total() != 0)
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Colaborador</th>
                                <th>Documento</th>
                                <th>Categoria</th>
                                <th>Dada cadastro</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($docs as $doc)
                                <tr>
                                    <td>{{ $doc->colaborador }}</td>
                                    <td>{{ $doc->documento }}</td>
                                    <td>{{ $doc->subdocumento }}</td>
                                    <td>{{ Carbon\Carbon::parse($doc->create_at)->format('d/m') }}</td>
                                    <td class="table-action">
                                        <a href="storage/{{ $doc->arquivo }}" class="action-icon" download> <i
                                                class="mdi mdi-download"></i></a>
                                        <a href="storage/{{ $doc->arquivo }}" class="action-icon" target="blank"> <i
                                                class="mdi mdi-printer"></i></a>
                                        <a href="{{ route('documentos.destroy', $doc->id) }}"
                                            class="action-icon mdi mdi-delete" data-confirm-delete="true"></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @elseif($docs->total() == 0)
                        <div class="alert alert-warning" role="alert">
                            NENHUM RESULTADO ENCONTRADO!
                        </div>
                    @endif
            </div>
        </div>
    </div>
    
</div>
<!-- Standard modal -->
<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Novo documento</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                @include('documentos.create')
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 

    @endsection

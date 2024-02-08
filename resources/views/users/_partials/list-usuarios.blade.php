<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                
                <table class="table table-striped table-centered mb-0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Acesso</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                            <td class="table-user">
                                @if($users->image)
                                    <img src="{{ url("storage/{$users->image}") }}" class="me-2 rounded-circle">
                                @else
                                <img src="{{ url("assets/img/icon_user.png") }}" class="me-2 rounded-circle">
                                @endif
                                {{ $users->name }}
                            </td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->telefone }}</td>
                            <td>{{ $users->perfil }}</td>
                            <td class="table-action">

                                <a href="{{ route('users.edit', $users->id) }}"
                                    data-bs-toggle="tooltip"
                                    data-bs-target="#standard-modal-edit"
                                    class="font-18 text-info me-2"
                                    data-bs-placement="top"
                                    aria-label="Edit"
                                    data-bs-original-title="Editar"><i class="uil uil-pen"></i></a>
                                <a href="{{ route('users.destroy', $users->id) }}"
                                    class="mdi mdi-delete font-18 text-danger" 
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    aria-label="Delete"
                                    data-bs-original-title="Excluír" data-confirm-delete="true"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
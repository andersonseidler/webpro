<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    
                    <tbody>

                        @foreach ($companies as $company)
                        <tr>

                            <td>{{ $company->nome }}</td>
                            <td>{{ $company->endereco }}</td>
                            <td>{{ $company->cidade }}</td>
                            <td class="table-action">
                                <a href="#" class="action-icon"> <i class="fa-solid fa-check"></i></a>
                                <a href="# class="action-icon mdi mdi-delete" data-confirm-delete="true"></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
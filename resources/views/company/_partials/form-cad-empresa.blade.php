<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Informações pessoais</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="endereco">
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="cidade">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Telefone</label>
                                <input type="text" class="form-control" name="telefone">
                            </div>
                        </div> <!-- end col -->
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Celular</label>
                                <input type="text" class="form-control" name="celular">
                            </div>
                        </div>
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="">Selecione o status</option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inativo">Inativo</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label">Imagem</label>
                                    <div class="input-group">
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Nome empresa</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="empresa" name="domain">
                            <span class="input-group-text" id="basic-addon2">.laradoc.com</span>
                          </div>
                        </div>
                        </div>
                    </div> <!-- end row -->
                    
                    

                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Cadastrar</button>
                    </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div>
    
</div>

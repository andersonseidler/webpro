<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuários</a></li>
                    <li class="breadcrumb-item active">Novo usuário</li>
                </ol>
            </div>
            <h3 class="page-title">Novo usuário</h3>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card text-center">
            <div class="card-body">
               
                    <img src="{{ url('assets/img/icon_user.png') }}" class="rounded-circle avatar-lg img-thumbnail" alt="user-image">
                
                {{-- <h4 class="mb-0 mt-2">Nome</h4>
                <p class="text-muted font-14"></p>

                <div class="text-start mt-3">
                    <p class="text-muted mb-2 font-13"><strong>Nome :</strong> <span class="ms-2"></span></p>

                    <p class="text-muted mb-2 font-13"><strong>Telefone :</strong><span class="ms-2"></span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 "></span></p>

                    <p class="text-muted mb-1 font-13"><strong>Perfil :</strong> <span class="ms-2"></span></p>
                </div> --}}

                {{-- <ul class="social-list list-inline mt-3 mb-0">
                    
                    <li class="list-inline-item">
                        <a target="_blank" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    
                    <li class="list-inline-item">
                        <a target="_blank"  class="social-list-item border-danger text-danger"><i class="mdi mdi-instagram"></i></a>
                    </li>
                    
                    <li class="list-inline-item">
                        <a target="_blank"  class="social-list-item border-info text-info"><i class="mdi mdi-skype"></i></a>
                    </li>
                    
                    <li class="list-inline-item">
                        <a target="_blank"  class="social-list-item border-secondary text-secondary"><i class="mdi mdi-linkedin"></i></a>
                    </li>                    
                </ul> --}}
            </div> 
        </div> 
    </div>
    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">
                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Informações pessoais</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Telefone</label>
                                <input type="tel" class="form-control" name="telefone" onkeyup="handlePhone(event)" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="useremail" class="form-label">Perfil</label>
                                <select class="form-select" name="perfil">
                                    <option value="">Selecione o perfil</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Usuário">Usuário</option>
                                  </select>
                            </div>
                        </div>
                    </div> <!-- end row -->


                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Acesso</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="social-fb" class="form-label">Senha</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="social-insta" class="form-label">Confirmar senha</label>
                                <div class="input-group">
                                    <input type="password" name="password_confirm" id="password_confirm" class="form-control"/>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end row -->


                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-box me-1"></i> Foto de perfil</h5>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Imagem</label>
                            <div class="input-group">
                                
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div> <!-- end row -->
                    <br>


                    
                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6 text-end">
                            <a href="{{ url()->previous() }}"><button type="button" class="btn btn-secondary btn-sm">Voltar</button></a>
                        <button type="button" onclick="form.reset();" class="btn btn-warning btn-sm">Limpar</button>
                        <button type="button" id="submitFormUser" class="btn btn-success btn-sm">Cadastrar</button>
                        </div>
                    </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div>
    
</div>

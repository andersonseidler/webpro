<div class="col-sm-8  mx-auto">


    
    
    

    <label for="firstName" class="form-label">Nome: <span style="color:red;">*</span></label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="nome" >
    </div>
    
    <label for="firstName" class="form-label">Email <span style="color:red;">*</span></label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="email">
    </div>

    <label for="firstName" class="form-label">Senha <span style="color:red;">*</span></label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="password">
    </div>

    <label for="firstName" class="form-label">Confirmar senha <span style="color:red;">*</span></label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="password_confirm">
    </div>
    <hr class="my-4">
    <label for="firstName" class="form-label">Nome do seu negócio <span style="color:red;">*</span></label>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="domain" id="inputCampo">
      <span class="input-group-text">laradoc.test</span>
    </div>
    <script>
      document.getElementById('inputCampo').addEventListener('input', function(event) {
        // Obtém o valor atual do campo de entrada
        var valorCampo = event.target.value;
  
        // Remove espaços em branco do valor atual
        var valorSemEspacos = valorCampo.replace(/\s/g, '');
  
        // Se o valor sem espaços for diferente do valor atual, atualiza o campo
        if (valorCampo !== valorSemEspacos) {
          event.target.value = valorSemEspacos;
        }
      });
    </script>
    <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
</div>
{{-- <div class="row g-5">
    <div class="col-lg-12">
      <h4 class="mb-3">Informações pessoais</h4>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
          </div>

          <div class="col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>

          <div class="col-sm-6">
            <label for="email" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password">
          </div>

          <div class="col-sm-6">
            <label for="email" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control" name="password_confirm">
          </div>
          <br>
          <hr class="my-4">
          <h5 class="mb-3">Informações da empresa</h5>
          <div class="col-lg-12">
            <label for="zip" class="form-label">Nome da empresa</label>
            <input type="text" class="form-control" name="domain">
          </div>
          <div class="col-md-2">
            <label for="zip" class="form-label">CEP</label>
            <input type="text" class="form-control" name="cep">
          </div>

          <div class="col-md-6">
            <label for="zip" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco">
          </div>

          <div class="col-md-4">
            <label for="zip" class="form-label">Bairo</label>
            <input type="text" class="form-control" name="bairro">
          </div>

          <div class="col-md-4">
            <label for="zip" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="cidade">
          </div>

          <div class="col-md-4">
            <label for="zip" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado">
          </div>

          <div class="col-md-4">
            <label for="zip" class="form-label">Complemento</label>
            <input type="text" class="form-control" name="complemento">
          </div>

          <div class="col-md-4">
            <label for="zip" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone">
          </div>

          <div class="col-md-4">
            <label for="zip" class="form-label">Celular</label>
            <input type="text" class="form-control" name="celular">
          </div>

          <div class="col-md-4">
                <label for="zip" class="form-label">Logo</label>
                <input class="form-control" type="file" name="image">
                      
          </div>



        </div>


        

        <hr class="my-4">

        <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
    </div>
  </div> --}}
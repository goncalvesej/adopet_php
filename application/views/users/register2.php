<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-sm-1 text-center">
      <h2>Novo Cadastro</h2>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-sm-1 col-md-offset-2">
        <form class="form" action="/registroo" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" value="" class="form-control" placeholder="Nome" required="required">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="" class="form-control"  placeholder="Email" required="required">
          </div>
          <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" id="phone" name="phone" value="" class="form-control"  onkeyup="phoneField();" placeholder="Telefone - Exemplo: (19)99999-9999" required="required">
          </div>
          <div class="form-group">
            <label for="pass">Senha</label>
            <input type="password" name="pass" value="" class="form-control"  placeholder="Senha" required="required">
          </div>
          <div class="form-group">
              <label for="photo">Foto de perfil</label>
              <input type="file" id="photo" name="photo">
              <p class="help-block">Clique para enviar uma foto.</p>
          </div>
          <div class="row">
            <div class="col-md-4 col-md-offset-2">
              <input onclick="rregister();" name="button" class="btn btn-info btn-block" value="Enviar">
            </div>
            <div class="col-md-4">
              <input type="reset" for="" name="button" class="btn btn-default btn-block" value="Limpar">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
<script src="/js/userScript.js"></script>

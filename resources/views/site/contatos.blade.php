<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Para entrar em contato conosco basta respoder esse simples formulario</h3>
  <p>segue abaixo o formulario.</p>
    
  <form action="/" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Nome Completo:</label>
      <input type="name" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um nome valido.</div>
    </div>

    <div class="mb-3">
      <label for="pwd" class="form-label">Telefone:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Escreva seu telefone" name="pswd" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um Telefone valido.</div>
    </div>

    <div class="mb-3">
      <label for="pwd" class="form-label">CPF:</label>
      <input type="number" class="form-control" id="pwd" placeholder="escreva seu CPF" name="pswd" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um CPF valido.</div>
    </div>



    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck"> Eu li e aceito com os termso e uso.</label>
      <div class="valid-feedback">valido.</div>
      <div class="invalid-feedback">Aceite para continuar.</div>
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>


































<div class="container mt-3">
  <h3</h3>
  <p> clique aqui para sair.</p>
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    sair
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">tem certeza que deseja sair ?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Obrigado por n??s acompanhar at?? aqui
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <a href="/">  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >sair</button> </a>
      </div>

    </div>
  </div>
</div>

</body>
</html>

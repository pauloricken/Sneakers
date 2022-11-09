<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comprar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Logo o produto será seu!, responda oque se pede por favor </h3>
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
      <label for="pwd" class="form-label">endereço:</label>
      <input type="endereço" class="form-control" id="pwd" placeholder="escreva seu endereço" name="pswd" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um endereço valido.</div>
    </div>

    <div class="mb-3">
      <label for="pwd" class="form-label">complemento:</label>
      <input type="text" class="form-control" id="pwd" placeholder="escreva seu complemento" name="pswd" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um complemento valido.</div>
    </div>
    <div class="mb-3">

      <label for="pwd" class="form-label">CEP:</label>
      <input type="CEP" class="form-control" id="pwd" placeholder="escreva seu CEP" name="pswd" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um cep valido.</div>
    </div>

      <label for="pwd" class="form-label"> Cartão de Crédito:</label>
      <input type="number" class="form-control" id="pwd" placeholder="escreva seu cartão de Crédito" name="pswd" required>
      <div class="valid-feedback">Valido.</div>
      <div class="invalid-feedback">Escreva um cartão valido.</div>
    </div>


    <div class="container mt-3">
  <h3</h3>
  
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Comprar
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">tem certeza que deseja Comprar ?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        teste
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <a href="/finaliza">  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" >Comprar</button> </a>
      </div>

    </div>
  </div>
</div>

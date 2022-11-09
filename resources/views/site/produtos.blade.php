<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>




</head>
<body>

<div class="container mt-3">
  <h2>Produtos</h2><hr>
  <div class="mt-4 p-5 bg-secondary text-white rounded">
    <h1>Cátalogo de produtos esportivos </h1> 
    <p> Este portal foi criado para auxiliar as pessoas e
            profissionais que buscam informações sobre produtos esportivos. Para
            ajudá-lo em sua pesquisa, selecionamos as principais informações
            sobre produtos esportivos para que esta ferramenta possa contribuir ao
            máximo para a melhoria da qualidade de seus serviços e a
            competitividade de sua loja.</p> 
  </div>
</div>

<br><br>

<div class="container">
<div class="card1" style="width: 35rem;">
  <img src="{{url('imgs/image3.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tênis adidas Ultraboost 22 LEP - Masculino</h5>
    <p class="card-text">esse Snekears Faz parte da Coleção adidas .</p>
    <span>R$1.199,99</span><br>
    <a href="/comprar" class="btn btn-primary">Comprar</a>
  </div>

</div>
<hr>
</div>
<div class="container">
<div class="card1" style="width: 35rem;">
  <img src="{{url('imgs/image3.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tênis adidas Ultraboost 22 LEP - Masculino</h5>
    <p class="card-text">esse Snekears Faz parte da Coleção adidas .</p>
    <span>R$1.199,99</span><br>
    <a href="/comprar" class="btn btn-primary">Comprar</a>
  </div>

</div>
<hr>
</div>



<div class="container mt-3">
  <h3</h3>
  
  
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
        Modal body..
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
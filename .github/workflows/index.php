<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Bootstrap Css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title>T3 Tênis Branco</title>
</head>
<body>
	<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./img/logo-t3.png" height="50" width="150"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">MASCULINO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">FEMININO</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MARCAS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Adidas</a></li>
            <li><a class="dropdown-item" href="#">Nike</a></li>
            <li><a class="dropdown-item" href="#">Mizuno</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar Tênis" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Pesquisar</button>
      </form>
          <a class="nav-link active" aria-current="page" href="#"><img src="./img/user-img.png" width="20" height="20"></a>
    </div>
  </div>
</nav>

	<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="./img/img-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./img/img-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/img-3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

	<!-- Grid -->
<div class="container">
  <div class="row">
    <div class="col">
      <img src="./img/entrega.png" class="img-thumb" alt="...">
    </div>
    <div class="col">
      <img src="./img/loja.png" class="img-thumb" alt="...">
    </div>
    <div class="col">
      <img src="./img/parcelamento.png" class="img-thumb" alt="...">
    </div>
    <div class="col">
      <img src="./img/frete.png" class="img-thumb" alt="...">
    </div>
  </div>
</div>

	<!-- Grid Card -->
<div class="row row-cols-1 row-cols-md-3">
  <div class="col">
    <div class="card-item">
      <img src="./img/linha-mizuno.jpg" class="card-img-top" alt="...">
    </div>
  </div>

    <div class="col">
    <div class="card-item">
      <img src="./img/linha-nike.jpg" class="card-img-top" alt="...">
    </div>
  </div>

    <div class="col">
    <div class="card-item">
      <img src="./img/linha-adidas.jpg" class="card-img-top" alt="...">
    </div>
  </div>
  </div>
</div>

      <center><p class="fs-2"><b>Mais Vendidos</b></p></center>

<!-- Card Produtos -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://static.netshoes.com.br/produtos/tenis-nike-air-max-sc-feminino/14/JD8-3670-014/JD8-3670-014_zoom1.jpg?ts=1684328084&ims=326x" class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis Nike Air Max SC</h5>
        <p class="text-success"><b>FRETE GRÁTIS</b></p>
        <p class="card-text"><p class="disabled"><s>R$ 600,99</s></p><b>R$ 349,99</b></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://static.netshoes.com.br/produtos/tenis-nike-downshifter-12-feminino/06/2IC-7627-306/2IC-7627-306_detalhe2.jpg?ts=1656437527&ims=326x" class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis Nike Downshifter 12 Feminino</h5>
        <p class="text-success"><b>FRETE GRÁTIS</b></p>
        <p class="card-text"><p class="disabled"><s>R$ 600,99</s></p><b>R$ 349,99</b></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://static.netshoes.com.br/produtos/tenis-nike-air-max-sc-feminino/06/2IC-7654-006/2IC-7654-006_detalhe3.jpg?ts=1681300986&ims=326x" class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis Nike Air Max SC</h5>
        <p class="text-success"><b>FRETE GRÁTIS</b></p>
        <p class="card-text"><p class="disabled"><s>R$ 600,99</s></p><b>R$ 349,99</b></p>
      </div>
    </div>
  </div>

<div class="col">
    <div class="card">
      <img src="https://static.netshoes.com.br/produtos/tenis-mizuno-wave-tornamic-2-feminino/62/2FU-6895-162/2FU-6895-162_detalhe2.jpg?ts=1681726247&ims=326x" class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis Mizuno Wave Tornamic 2 Feminino</h5>
        <p class="text-success"><b>FRETE GRÁTIS</b></p>
        <p class="card-text"><p class="disabled"><s>R$ 600,99</s></p><b>R$ 349,99</b></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://static.netshoes.com.br/produtos/tenis-nike-air-max-sc-feminino/14/JD8-3670-014/JD8-3670-014_zoom1.jpg?ts=1684328084&ims=326x" class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis Nike Air Max SC</h5>
        <p class="text-success"><b>FRETE GRÁTIS</b></p>
        <p class="card-text"><p class="disabled"><s>R$ 600,99</s></p><b>R$ 349,99</b></p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="https://static.netshoes.com.br/produtos/tenis-nike-air-max-sc-feminino/14/JD8-3670-014/JD8-3670-014_zoom1.jpg?ts=1684328084&ims=326x" class="card-img" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tênis Nike Air Max SC</h5>
        <p class="text-success"><b>FRETE GRÁTIS</b></p>
        <p class="card-text"><p class="disabled"><s>R$ 600,99</s></p><b>R$ 349,99</b></p>
      </div>
    </div>
  </div>

</div>

<center><p class="fs-2"><b>Marcas</b></p></center>

	<!-- Grid Marcas -->
<center>
<div class="row row-cols row-cols-md-3">
  <div class="col">
      <img src="./img/jordan.png" class="img" alt="...">
  </div>

    <div class="col">
      <img src="./img/nike.png" class="img" alt="...">
  </div>

    <div class="col">
      <img src="./img/adidas.png" class="img" alt="...">
  </div>
  </div>
</center>

<footer class="rodape-prin">
	<hr>
<div class="container">
  <div class="row">
    <div class="col">
       <p class="fs-6"><b>SERVIÇOS AO CLIENTE</b></p>
		<p class="text-sm-start">Entre em contato</p>
		<p class="text-sm-start">Solicitar devolução</p>
    </div>
    <div class="col">
       <p class="fs-6"><b>OUTROS SERVIÇOS</b></p>
       <p class="text-sm-start">Produtos por marca</p>
       <p class="text-sm-start">Comprar vale presentes</p>
       <p class="text-sm-start">Programa de afiliados</p>
       <p class="text-sm-start">Produtos em promoção</p>
    </div>
    <div class="col">
       <p class="fs-6"><b>MINHA CONTA</b></p>
       <p class="text-sm-start">Minha conta</p>
       <p class="text-sm-start">Histórico de pedidos</p>
       <p class="text-sm-start">Lista de desejos</p>
       <p class="text-sm-start">Informativo</p>
    </div>
  </div>
</div>
<hr>
Compre na loja virtual TENISBRANCO. Aqui você encontra os melhores modelos com os melhores preços. Tênis, Sapatos e muito mais. Aproveite!
Copyright ® 2023 Tenis Branco - Todos os Direitos Reservados - Imagens meramentes ilustrativas.
</footer>
</body>
</html>
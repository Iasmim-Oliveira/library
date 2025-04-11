<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Carrosséis de Cards</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (opcional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="asset{{'/public/css/styles.css'}}">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Minha Página</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Section 1 -->
<section class="container my-5">
    <h2 class="text-center mb-4">Reading</h2>
    <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!--TODO: fazer o foreach pros cards-->
            <!-- Slide 1 -->
            <div class="carousel-item">
                <div class="d-flex">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">Descrição do card 1.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controles do Carrossel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<!-- Section 2 -->
<section class="container my-5">
    <h2 class="text-center mb-4">Readed</h2>
    <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item">
                <div class="d-flex">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card 9</h5>
                            <p class="card-text">Descrição do card 9.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controles do Carrossel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p>&copy; 2023 Minha Página. Todos os direitos reservados.</p>
        <p>
            <a href="#" class="text-white">Política de Privacidade</a> |
            <a href="#" class="text-white">Termos de Uso</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS e dependências -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

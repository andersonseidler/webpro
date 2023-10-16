<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ 'front/css/styles.css' }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Portal Barber</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="/">Início</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                            <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="login"><span class="fw-bolder text-primary">Login</span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- BUSCA ESTABELECIMENTO -->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <form action="{{ route('search.index') }}" method="GET">
                            <div class="text-center my-5">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Barbearias &middot; Salões de Beleza &middot; Studios</div></div>
                                {{-- <p class="lead fw-light mb-4">Espaço título para news.</p> --}}
                                <p class="text-muted">Busque um estabelecimento perto de você.</p>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="estabelecimento" placeholder="Estabelecimento">
                                    <input type="text" class="form-control" name="localizacao" placeholder="Localização">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Button</button>
                                  </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Header-->
            <table class="table table-striped table-centered mb-0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    @foreach ($companies as $comp)
                    <tr>
                        <td>{{ $comp->nome }}</td>
                        <td>{{ $comp->endereco }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- About Section-->
        </main>
        <!-- Footer-->
        @include('components.footer-site')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
    </body>
</html>

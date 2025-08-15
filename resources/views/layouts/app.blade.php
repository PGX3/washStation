<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Wash Station') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar custom */
        .navbar {
            padding: 1rem 2rem;
            transition: 0.3s;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #2c3e50 !important;
        }

        .nav-link {
            font-weight: 500;
            color: #555 !important;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000000ff;
            text-align: center;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url('{{asset("resources/images/backgroundImage.jpg") }}') no-repeat center center;
            background-size: cover;
            opacity: 0.35;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            color: #f8f9fa;
        }

        .btn-primary {
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }

        /* Cards Section */
        .feature-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 1rem;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .feature-card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #0d6efd;
        }

        footer {
            background: #2c3e50;
            color: #fff;
            padding: 2rem 0;
            text-align: center;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Wash Station</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><span class="nav-link">Visitante</span></li>
                    <li class="nav-item"><span class="nav-link">visitante@email.com</span></li>
                    <li class="nav-item ms-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm">Sair</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content container">
            <h1>Bem-vindo ao Wash Station</h1>
            <p>Gerencie sua empresa de lavagem de carros de forma simples e eficiente.</p>
            <a href="{{ route('companies.create') }}" class="btn btn-primary btn-lg mt-3">Cadastrar Empresa</a>
        </div>
    </section>

    <!-- Features / Cards Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="card feature-card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-speedometer2"></i>
                            <h5 class="card-title fw-bold">Rápido e Prático</h5>
                            <p class="card-text text-muted">Agende e acompanhe as lavagens da sua empresa em poucos cliques.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-people-fill"></i>
                            <h5 class="card-title fw-bold">Equipe Organizada</h5>
                            <p class="card-text text-muted">Controle seus funcionários e distribua tarefas com facilidade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-graph-up"></i>
                            <h5 class="card-title fw-bold">Relatórios</h5>
                            <p class="card-text text-muted">Tenha acesso a relatórios de performance e finanças da sua empresa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Wash Station. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

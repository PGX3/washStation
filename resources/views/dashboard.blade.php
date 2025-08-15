@extends('layouts.app')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 80vh; background: linear-gradient(135deg, #f0f4ff, #ffffff);">
    <div class="mb-4">
        <h1 class="display-4 fw-bold text-primary">Bem-vindo ao Wash Station!</h1>
        <p class="lead text-secondary">Parece que você ainda não tem nenhuma empresa cadastrada. Vamos começar?</p>
    </div>

    <div>
        <a href="{{ route('companies.create') }}" class="btn btn-lg btn-gradient rounded-pill shadow" style="background: linear-gradient(135deg, #6C63FF, #8E54E9); color: #fff; padding: 0.75rem 2.5rem; font-size: 1.2rem; transition: transform 0.2s;">
            Cadastrar Primeira Empresa
        </a>
    </div>

    <div class="mt-5" style="max-width: 500px;">
        <img src="https://images.unsplash.com/photo-1605902711622-cfb43c4433a5?auto=format&fit=crop&w=600&q=80" alt="Lavagem de carro" class="img-fluid rounded shadow">
    </div>
</div>

<style>
.btn-gradient:hover {
    transform: translateY(-5px) scale(1.05);
}
</style>
@endsection

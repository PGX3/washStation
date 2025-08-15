@extends('layouts.app')

@section('content')
<!-- Fundo com gradiente animado -->
<div class="position-relative" style="min-height: 100vh; overflow: hidden;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 50%, #ffffff 100%); animation: gradientMove 15s ease infinite;"></div>

    <div class="container py-5 position-relative" style="z-index: 1;">
        <h2 class="mb-5 text-center fw-bold" style="font-size: 2.8rem; color: #333;">Agenda do Dia</h2>

        <div class="row g-4">
            @forelse($washes as $wash)
                @php
                    $statusColor = $wash->status === 'completo' ? 'success' : 'warning';
                    if ($wash->washType->name === 'Simples') {
                        $typeColor = 'primary';
                    } elseif ($wash->washType->name === 'Completa') {
                        $typeColor = 'info';
                    } elseif ($wash->washType->name === 'Detalhada') {
                        $typeColor = 'danger';
                    } else {
                        $typeColor = 'secondary';
                    }

                    $schedule = \Carbon\Carbon::parse($wash->schedule_at)->format('H:i');
                @endphp

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-lg border-0 rounded-4 h-100 position-relative overflow-hidden" style="transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                        <!-- Efeito suave de luz -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at top right, rgba(255,255,255,0.2), transparent 70%); pointer-events: none;"></div>

                        <div class="card-header d-flex justify-content-between align-items-center text-white" style="background: linear-gradient(135deg, #6C63FF, #8E54E9); font-weight: bold; font-size: 1rem;">
                            <span class="badge bg-{{ $typeColor }} text-uppercase fw-bold">{{ $wash->washType->name }}</span>
                        
                        </div>

                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary" style="font-size: 1.3rem;">{{ $wash->customer_name }}</h5>
                            <p class="card-text mb-1">
                                <i class="bi bi-person-circle me-2"></i> Funcionário: <strong>{{ $wash->employee->name }}</strong>
                            </p>
                            <p class="card-text mb-1">
                                <i class="bi bi-currency-dollar me-2"></i> Preço: <strong>R$ {{ number_format($wash->price, 2, ',', '.') }}</strong>
                            </p>
                            <p class="card-text mb-1">
                                <i class="bi bi-clock me-2"></i> Horário: <strong>{{ $schedule }}</strong>
                            </p>
                            <p class="card-text mb-1">
                                <i class="bi bi-geo-alt me-2"></i> Endereço: <strong>{{ $wash->company->address ?? 'Não definido' }}</strong>
                            </p>
                            <p class="card-text mb-3 text-muted">
                                Tipo de Pagamento: <strong>{{ $wash->payment ? $wash->payment->payment_method : 'Não pago' }}</strong>
                            </p>

                            <form method="POST" action="{{ route('washes.updateStatus', $wash->id) }}">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-{{ $statusColor }} w-100 fw-bold" style="transition: all 0.3s;">
                                    {{ ucfirst($wash->status) }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted" style="font-size: 1.2rem;">Nenhuma lavagem agendada para hoje.</p>
            @endforelse
        </div>
    </div>
</div>

<!-- Animações de hover e gradient -->
<style>
    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
</style>
@endsection

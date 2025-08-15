<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Wash;

class DashboardController extends Controller
{
    public function index()
    {
        // Verifica se existe alguma empresa cadastrada
        if (Company::count() === 0) {
            // Se não houver empresa, mostra a home vazia com call-to-action
            return view('home-empty');
        }

        // Se houver empresa, calcula dados para o dashboard
        $totalWashesToday = Wash::whereDate('schedule_at', now())->count();
        $completedWashes = Wash::whereDate('schedule_at', now())
                               ->where('status', 'completo')
                               ->count();
        $totalRevenue = Wash::whereDate('schedule_at', now())
                            ->sum('price');

        return view('dashboard', compact('totalWashesToday', 'completedWashes', 'totalRevenue'));
    }
}

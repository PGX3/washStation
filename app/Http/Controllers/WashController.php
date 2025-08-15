<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wash;

class WashController extends Controller
{
    public function index()
    {
        $today = now()->toDateString();
        $washes = Wash::with(['employee', 'washType'])
            ->whereDate('schedule_at', $today)
            ->orderBy('schedule_at')
            ->get();

        // Passa a variável $header pra evitar erro no layout
        return view('agenda.index', [
            'washes' => $washes,
            'header' => 'Agenda do Dia',
        ]);
    }

    public function updateStatus(Wash $wash)
    {
        if ($wash->status === 'pendente') {
            $wash->status = 'completo';
        } elseif ($wash->status === 'completo') {
            $wash->status = 'pendente';
        }

        $wash->save();

        return back();
    }
}

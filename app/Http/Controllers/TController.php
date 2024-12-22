<?php

namespace App\Http\Controllers;

use App\Jobs\RJob;
use App\Jobs\TJob;
use Illuminate\Contracts\View\View;

class TController extends Controller
{
    public function index(): View
    {
        return view('custom.jobs');
    }

    public function store()
    {
        sleep(2);

        TJob::class::dispatch(user: 'Felipe Pinheiro dos Santos', age: 21);
        RJob::class::dispatch(user: 'Felipe Pinheiro dos Santos', age: 21);

        return redirect()
            ->back()
            ->with('message', 'Store method -> Call job \ '.TJob::class);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index(Request $request) {
        // return $request->url();
        // return $request->method();
        // return response('', 302, ['Location' => 'https://www.google.com']);
        // return redirect('https://www.google.com');
        $series = [
            'Ahsoka',
            'Fundação',
            'A Roda do Tempo',
            'Muv-Luv'
        ];
        return view('listar-series')->with('series', $series);
    }
}

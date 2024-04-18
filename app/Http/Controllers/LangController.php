<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $lang)
    {
        if(!in_array($lang, ['en', 'es'])) {
            abort(400);
        }

        session(['lang' => $lang]);

        return redirect()->back();
    }
}

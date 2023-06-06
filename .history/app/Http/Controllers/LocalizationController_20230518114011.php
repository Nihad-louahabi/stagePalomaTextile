<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;


class LocalizationController extends Controller
{
    public function change($locale){
        Session::put('locale', $locale);

        return redirect()->back();

    }
}


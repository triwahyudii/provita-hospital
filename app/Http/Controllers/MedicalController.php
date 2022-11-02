<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class MedicalController extends Controller
{
    public function check_up() {
        $paket = Paket::with(['paket']);
        return view('medical');
    }
}

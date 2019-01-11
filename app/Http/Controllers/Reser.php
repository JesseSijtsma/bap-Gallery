<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Reser extends Controller
{
    public function index() {
        $reservations = \DB::select('select * from reservations');
        dd($reservations);
    }
}

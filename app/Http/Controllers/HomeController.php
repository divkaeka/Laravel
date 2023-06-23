<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Jual;
use App\Models\JualDetail;
use App\Models\AlamatKirim;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(Gate::allows('isResto')){
            return redirect('resto/home');
            }else if(Gate::allows('isKurir')){
            return redirect('kurir/home');
            }else if(Gate::allows('isKonsumen')){
            return redirect('konsumen/home');
            }
    }
}

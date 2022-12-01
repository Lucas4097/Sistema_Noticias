<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homePage()
    {
        $carousel = Notice::where('type', 2)
            ->limit(3)
            ->inRandomOrder()
            ->get();

        $acess = Notice::orderBy('acess', 'desc')
            ->limit(3)
            ->get();

        if (Auth::check()){
            $recomendation = 1;
        }else{
            $recomendation = Notice::where('type', 3)
            ->limit(2)
            ->inRandomOrder()
            ->get();
        }

        return view('user.home', [
            'carousel' => $carousel,
            'acess' => $acess,
            'recomendation' => $recomendation,
        ]);
    }
}

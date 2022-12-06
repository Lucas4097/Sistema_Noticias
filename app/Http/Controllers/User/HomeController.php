<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homePage()
    {
        $random[0] = rand(1, 5);
        do {
            $random[1] = rand(1, 5);
        } while ($random[0] == $random[1]);

        for ($i=0; $i < 2; $i++) {
            $notices[$i] = Notice::where('category', $random[$i])->limit(2)->get();
        }

        $notices = $notices[0]->merge($notices[1]);
        $other = Notice::where('category', 6)->limit(2)->get();

        $carousel = Notice::where('type', 2)
            ->limit(3)
            ->inRandomOrder()
            ->get();

        $acess = Notice::orderBy('acess', 'desc')
            ->limit(3)
            ->get();

        $category = false;

        if (Auth::check()){
            $history = History::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->first();
            if (!empty($history)) {
                $category = $history->notice->category;
            }
        }
        $recomendation = Notice::where('type', 3)
        ->where(function($query)use($category){
            if ($category) {
                $query->where('category', $category);
            }
        })
        ->limit(2)
        ->inRandomOrder()
        ->get();


        return view('user.home', [
            'notices' => $notices,
            'others' => $other,
            'carousel' => $carousel,
            'acess' => $acess,
            'recomendations' => $recomendation,
        ]);
    }
}

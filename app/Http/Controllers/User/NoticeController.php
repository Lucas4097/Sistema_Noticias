<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticePage(Request $request)
    {
        $notice = Notice::findOrFail($request->id);
        return view('user.notice', [
            'notice' => $notice,
        ]);
    }

    public function searchPage(Request $request)
    {
        if ($request->category){
            $results = Notice::where('category', $request->category)
                            ->orderBy('created_at', 'desc')
                            ->paginate(8);
            $search = $request->category;
        }

        if ($request->search){
            $results = Notice::where('title', 'LIKE',"%$request->search%")
                            ->orWhere('description', 'LIKE', "%$request->search%")
                            ->orWhere('preview', 'LIKE' , "%$request->search%")
                            ->orderBy('created_at', 'desc')
                            ->paginate(8);
            $search = $request->search;
        }

        return view('user.search', [
            'results' => $results,
            'search' => $search
        ]);
    }
}

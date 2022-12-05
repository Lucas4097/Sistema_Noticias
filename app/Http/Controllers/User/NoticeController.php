<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\History;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function noticePage(Request $request)
    {
        $notice = Notice::findOrFail($request->id);
        $notice->update(['acess' => $notice->acess+1]);
        $commets = Comment::where('notice_id', $request->id)->paginate(5);

        if(Auth::check()){
            $histories = History::where('user_id', Auth::user()->id)->get();
            $controller = false;
            foreach ($histories as $history) {
                if ($history->notice->category == $notice->category) {
                    $controller = true;
                    break;
                }
            }
            if($controller == false)
                History::create([
                    'user_id' => Auth::user()->id,
                    'notice_id' => $notice->id,
                ]);
        }

        return view('user.notice', [
            'notice' => $notice,
            'comments' => $commets,
        ]);
    }

    public function commentStore(Request $request)
    {
        $comments = $request->except('_token');
        $comments['user_id'] = Auth::user()->id;
        Comment::create($comments);
        return back()->with('status', 'Comentário criado com sucesso!');
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

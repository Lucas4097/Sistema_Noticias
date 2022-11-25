<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $notices = Notice::paginate();
        return view('admin.dashboard', [
            'notices' => $notices
        ]);
    }

    public function dashboardCreatePage()
    {
        return view('admin.dashboardCreate');
    }

    public function dashboardCreate(Request $request)
    {
        $notice = $request->except('_token');
        $notice['image'] = $request->image->store('images');
        Notice::create($notice);
    }

    public function dashboardEditPage(Request $request)
    {
        $notice = Notice::findOrFail($request->id);
        return view('admin.dashboardEdit', [
            'notice' => $notice
        ]);
    }

    public function dashboardDelete(Request $request)
    {
        $notice = Notice::findOrFail($request->id);
        $notice->delete();
        return back()->with('status', 'Deletado com sucesso!');
    }

}

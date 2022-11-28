<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUpdateNotice;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function dashboardPage(Request $request)
    {
        $notices = Notice::where('title', 'LIKE', "%$request->search%")
            ->orWhere('preview', 'LIKE', "%$request->search%")
            ->paginate(8);
        return view('admin.dashboard', [
            'notices' => $notices
        ]);
    }

    public function dashboardCreatePage()
    {
        return view('admin.dashboardCreate');
    }

    public function dashboardCreate(StoreUpdateNotice $request)
    {
        $notice = $request->except('_token');
        $notice['image'] = $request->image->store('images');
        Notice::create($notice);

        return redirect()->route('dashboardPage')
            ->with('status', 'Criado com sucesso!');
    }

    public function dashboardEditPage(Request $request)
    {
        $notice = Notice::findOrFail($request->id);
        return view('admin.dashboardEdit', [
            'notice' => $notice
        ]);
    }

    public function dashboardEdit(StoreUpdateNotice $request)
    {
        $directory = Notice::findOrFail($request->id);

        $notice = $request->except('_token');

        if ($request->image) {
            Storage::delete($directory->image);
            $notice['image'] = $request->image->store('images');
        }

        Notice::findOrFail($request->id)->update($notice);

        return redirect()->route('dashboardPage')
            ->with('status', 'Editado com sucesso!');
    }

    public function dashboardDelete(Request $request)
    {
        $notice = Notice::findOrFail($request->id);
        Storage::delete($notice->image);
        $notice->delete();
        return back()->with('status', 'Deletado com sucesso!');
    }

}

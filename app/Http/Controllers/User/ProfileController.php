<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateName;
use App\Http\Requests\User\UpdatePhoto;
use App\Http\Requests\User\UpdateProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function user()
    {
        return view('user.profile');
    }

    public function photoEdit(UpdatePhoto $request)
    {
        if(Auth::user()->photo != 'default/person.svg')
            Storage::delete(Auth::user()->photo);

        $photo = $request->photo->store('users');

        return User::find(Auth::user()->id)->update(['photo' => $photo])
            ? redirect()->route('user')->with('status', 'Foto alterada com sucesso!')
            : redirect()->route('user')->with('fail', 'Ocorreu um erro ao tentar alterar a foto!');
    }

    public function userEdit(UpdateName $request)
    {
        return User::find(Auth::user()->id)->update(['name' => $request->name])
            ? redirect()->route('user')->with('status', 'Nome alterado com sucesso!')
            : redirect()->route('user')->with('fail', 'Ocorreu um erro ao tentar alterar o nome!');
    }
}

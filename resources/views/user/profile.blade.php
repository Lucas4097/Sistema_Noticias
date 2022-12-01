@extends('layouts.app')


@section('main')
    <section class="container my-5">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('userEdit', ['id' => Auth::user()->id]) }}" method="post" class="w-75 mx-auto row" enctype="multipart/form-data">
            @csrf
            <div class="col">
                <div class="mb-2">
                    <label for="">Nome</label>
                    <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                </div>
                <div class="mb-2">
                    <label for="">Email</label>
                    <input name="email" type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                </div>
                <div class="mb-2">
                    <label for="">Senha</label>
                    <input type="password" name="password" id="" class="form-control" value="{{ Auth::user()->password }}" disabled>
                </div>
            </div>
            <div class="col">
                <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="" style="width: 160px;">
                <input type="file" src="" alt="" name="photo" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-success w-100">Editar</button>
            </div>
        </form>
    </section>
@endsection

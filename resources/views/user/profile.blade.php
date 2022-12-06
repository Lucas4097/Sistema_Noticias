@extends('layouts.app')


@section('main')
    <section class="container my-5">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="w-75 mx-auto row">
            <form action="{{ route('userEdit', ['id' => Auth::user()->id]) }}" method="post" class="col">
                @csrf
                <div class="mb-2">
                    <label for="">Nome</label>
                    <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
                </div>
                <div class="mb-2">
                    <label for="">Email</label>
                    <input type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                </div>
                <div class="mb-2">
                    <button type="submit" class="btn btn-success">Editar o nome</button>
                </div>
            </form>
            <div class="ms-2 col">
                <form action="{{ route('photoEdit', ['id' => Auth::user()->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <img class="rounded-circle border border-dark border-2 mb-2 bg-dark"
                        src="{{ asset('storage/' . Auth::user()->photo) }}" alt="" style="width: 140px;">
                    <input type="file" src="" alt="" name="photo" class="form-control mb-2">
                    <button type="submit" class="btn btn-success">Enviar foto</button>
                </form>
            </div>
        </div>
    </section>
@endsection

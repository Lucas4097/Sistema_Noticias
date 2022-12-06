@extends('layouts.admin')

@section('main')
    <section class="container">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="border border-2 border-secondary p-3 bg-light shadow mt-5 w-75 mx-auto">
            <form action="{{ route('dashboardCreate') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="">Título</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Subtitulo</label>
                    <input name="preview" type="text" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Descrição</label>
                    <textarea name="description" id="" class="form-control"></textarea>
                </div>
                <div class="mb-2">
                    <label for="">Tipo</label>
                    <select name="type" class="form-select">
                        <option value="1">Notícia</option>
                        <option value="2">Destaque</option>
                        <option value="3">Recomendação</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <select name="category" class="form-select">
                        <option value="1">Esporte</option>
                        <option value="2">Política</option>
                        <option value="3">Saúde</option>
                        <option value="4">Mundo</option>
                        <option value="5">Cultura</option>
                        <option value="6">Outros</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="file" src="" alt="" name="image" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </section>
@endsection

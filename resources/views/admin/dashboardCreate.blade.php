@extends('layouts.app')

@section('main')
    <section class="container">
        <form action="{{ route('dashboardCreate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input name="title" type="text" class="form-control">
                <label for="">Título</label>
            </div>
            <div class="mb-2">
                <input name="preview" type="text" class="form-control">
                <label for="">Subtitulo</label>
            </div>
            <div class="mb-2">
                <textarea name="description" id="" class="form-control"></textarea>
                <label for="">Descrição</label>
            </div>
            <div class="mb-2">
                <select name="type" class="form-select" aria-label="Default select example">
                    <option selected>Tipo</option>
                    <option value="1">Notícia</option>
                    <option value="2">Destaque</option>
                    <option value="3">Recomendação</option>
                </select>
            </div>
            <div class="mb-2">
                <input type="file" src="" alt="" name="image" class="form-control">
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </section>
@endsection

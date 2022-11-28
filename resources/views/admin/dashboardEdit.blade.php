@extends('layouts.admin')

@section('main')
    <section class="container">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form action="{{ route('dashboardEdit') }}" method="post" enctype="multipart/form-data" class="row">
            @csrf
            <section class="col-6">
                <div class="mb-2">
                    <label for="">Título</label>
                    <input name="title" type="text" class="form-control" value="{{ $notice->title }}">
                </div>
                <div class="mb-2">
                    <label for="">Subtitulo</label>
                    <input name="preview" type="text" class="form-control" value="{{ $notice->preview }}">
                </div>
                <div class="mb-2">
                    <label for="">Descrição</label>
                    <textarea name="description" id="" class="form-control">{{ $notice->title }}</textarea>
                </div>
                <div class="mb-2">
                    <label for="">Tipo</label>
                    <select name="type" class="form-select" aria-label="Default select example">
                        <option
                            @if ($notice->type == 1)
                            selected
                            @endif
                        value="1">Notícia</option>
                        <option
                            @if ($notice->type == 2)
                            selected
                            @endif
                        value="2">Destaque</option>
                        <option
                            @if ($notice->type == 3)
                            selected
                            @endif
                        value="3">Recomendação</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">Categoria</label>
                    <select name="category" class="form-select" aria-label="Default select example">
                        <option value="1">Esporte</option>
                        <option value="2">Política</option>
                        <option value="3">Saúde</option>
                        <option value="4">Mundo</option>
                        <option value="5">Cultura</option>
                        <option value="6">Outros</option>
                    </select>
                </div>

                <div class="mb-2">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="id" value="{{ $notice->id }}">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </section>

            <section class="col-6">
                <div class="mb-2">
                    <img src="{{ asset('storage/'. $notice->image) }}" width="250px" class="mb-2" alt="">
                    <input type="file" src="" alt="" name="image" class="form-control">
                </div>
            </section>

        </form>
    </section>
@endsection

@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <section class="w-75 mx-auto text-center mb-2">
            <h1 class="mb-2">{{ $notice->title }}</h1>
            <img class="mb-2" src="{{ asset('storage/' . $notice->image) }}" alt="">
            <p class="lead">{{ $notice->description }}</p>
        </section>

        <section class="mb-3 w-50 mx-auto">
            @auth
                <form class="mb-2" action="{{ route('commentStore') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comentário</label>
                        <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Deixe um comentário"></textarea>
                    </div>
                    <input type="hidden" name="notice_id" value="{{ $notice->id }}">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </form>
            @else
                <div class="mb-2">
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Conecte a uma conta para comentar" disabled></textarea>
                    </div>
                </div>
            @endauth

            <div class="mt-5">
                @forelse ($comments as $comment)
                    <div class="card mb-3 border-0" style="max-width: 700px;">
                        <div class="row g-0">
                            <div class="col-1">
                                <img src="{{ asset('storage/' . $comment->user->photo) }}" class="img-fluid rounded-circle"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-0">
                                    <h5 class="card-title fs-6">{{ $comment->user->name }}</h5>
                                    <p class="card-text">{{ $comment->comment }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="bg-secondary text-white text-center p-3">
                        <h4>Nenhum comentário</h4>
                    </div>
                @endforelse

                {{ $comments->appends(['search' => request()->get('search', '')])->links('vendor.pagination.bootstrap-4') }}

            </div>
        </section>
    </div>
@endsection

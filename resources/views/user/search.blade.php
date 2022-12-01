@extends('layouts.app')

@section('main')
    <section class="container mx-auto my-5">
        <h1>Procurando por: {{ $search }}</h1>

        <div class="d-flex gap-2 flex-wrap">
            @forelse ($results as $notice)
                @include('components.cards')

            @empty

                @include('components.empty')
            @endforelse
        </div>
        {{ $results->appends(['search' => request()->get('search', '')])->links('vendor.pagination.bootstrap-4') }}
    </section>
@endsection

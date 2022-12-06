@extends('layouts.app')

@section('main')
    <section class="container mx-auto my-5">
        <h1>Procurando por: @if ($search)
                {{ $search }}
            @endif
            @foreach (['Esporte', 'Política', 'Saúde', 'Mundo', 'Cultura'] as $key => $value)
                @if ($key + 1 == $search)
                    {{ $value }}
                    @php break; @endphp
                @endif
            @endforeach
        </h1>

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

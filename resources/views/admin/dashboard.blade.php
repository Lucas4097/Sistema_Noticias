@extends('layouts.admin')

@section('main')
    <section class="container">
        <a href="{{ route('dashboardCreatePage') }}" class="btn btn-primary">Criar Noticia</a>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <table class="table table-bordered border-warning table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Prévia</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acessos</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Criado</th>
                    <th scope="col">Atualizado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($notices as $notice)
                    <tr>
                        <td>{{ $notice->id }}
                        <td>{{ $notice->title }}</td>
                        <td>{{ $notice->preview }}</td>
                        <td>
                            @if ($notice->type == 1)
                            Notícia
                            @elseif ($notice->type == 2)
                            Destaque
                            @elseif ($notice->type == 3)
                            Recomendados
                            @endif
                        </td>
                        <td>
                            @if ($notice->category == 1)
                            Esporte
                            @elseif ($notice->category == 2)
                            Política
                            @elseif ($notice->category == 3)
                            Saúde
                            @elseif ($notice->category == 4)
                            Mundo
                            @elseif ($notice->category == 5)
                            Cultura
                            @elseif ($notice->category == 6)
                            Outros
                            @endif
                        </td>
                        <td>{{ $notice->acess }}</td>
                        <td>{{ $notice->user->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($notice->created_at)) }}</td>
                        <td>{{ date('d/m/Y', strtotime($notice->updated_at)) }}</td>
                        <td class="d-flex flex-wrap gap-2">
                            <a href="{{ route('dashboardEditPage', ['id' => $notice->id]) }}"
                                class="btn btn-outline-success">Editar</a>
                            <form action="{{ route('dashboardDelete', ['id' => $notice->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        {{ $notices->appends(['search' => request()->get('search', '')])->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
    </section>
@endsection

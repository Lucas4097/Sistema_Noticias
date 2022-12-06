@extends('layouts.app')

@section('main')
    <section class="mx-auto mt-2 carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel as $key => $carousel)
                    <a href="{{ route('noticePage', ['id' => $carousel->id]) }}">
                        <div class="carousel-item @if ($key == 0) active @endif">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="col-1 bg-carousel">
                                </div>
                                <div class="col-4 m-3">
                                    <h2>{{ $carousel->title }}</h2>
                                    <p>{{ $carousel->description }}</p>
                                </div>
                                <img src="{{ asset('storage/' . $carousel->image) }}" class="d-block col-7" alt="...">
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-arrow-left-circle-fill text-danger" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-arrow-right-circle-fill text-danger" viewBox="0 0 16 16">
                    <path
                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container row mt-5 mx-auto">
        <article class="col-7">
            @foreach ($notices as $key => $notice)
                <section class="mb-2">
                    @if (($key + 2) % 2 == 0)
                        <h1>
                            @foreach (['Esporte', 'Política', 'Saúde', 'Mundo', 'Cultura'] as $key => $value)
                                @if ($key + 1 == $notice->category)
                                    {{ $value }}
                                    @php break; @endphp
                                @endif
                            @endforeach
                        </h1>
                        <hr>
                    @endif

                    <a href="{{ route('noticePage', ['id' => $notice->id]) }}" class="card border-0 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="{{ asset('storage/' . $notice->image) }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $notice->title }}</h5>
                                    <p class="card-text">{{ $notice->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </section>
            @endforeach


            <section class="mb-2">
                <h1>Outros</h1>
                <hr>
                @foreach ($others as $notice)
                    <a href="{{ route('noticePage', ['id' => $notice->id]) }}" class="card border-0 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="{{ asset('storage/' . $notice->image) }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $notice->title }}</h5>
                                    <p class="card-text">{{ $notice->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>

        </article>

        <article class="ms-5 col-4">
            <section class="mb-2">
                <h3 class="text-center">Mais lidas</h3>
                <hr>
                @foreach ($acess as $key => $acess)
                    <div class="d-flex justify-content-between">
                        <a class="d-flex align-items-center" href="{{ route('noticePage', ['id' => $acess->id]) }}">
                            <h1 class="me-2">{{ $key + 1 }}.</h1>
                            <p>{{ $acess->title }}</p>
                        </a>
                        <p class="">{{ $acess->acess }}</p>
                    </div>
                    <hr>
                @endforeach
            </section>

            <section class="mb-2">
                <h3 class="text-center">Recomendações</h3>
                @foreach ($recomendations as $recomendation)
                    <a href="{{ route('noticePage', ['id' => $recomendation->id]) }}" class="card border-0 mb-3"
                        style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex align-items-center">
                                <img src="{{ asset('storage/' . $recomendation->image) }}" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $recomendation->title }}</h5>
                                    <p class="card-text">{{ $recomendation->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
        </article>
    </div>
@endsection

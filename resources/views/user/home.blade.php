@extends('layouts.app')

@section('main')
    <section class="mx-auto mt-2 carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel as $carousel)
                    <div class="carousel-item active">
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
                @endforeach
                {{-- <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="col-1 bg-carousel">
                        </div>
                        <div class="col-4 m-3">
                            <h2>Lorem</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo
                                pariatur dolore laboriosam voluptas repudiandae dicta temporibus, aliquam.</p>
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                            class="d-block col-7" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex">
                        <div class="col-4 m-3">
                            <h2>Teste</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo
                                pariatur dolore laboriosam voluptas repudiandae dicta temporibus, aliquam.</p>
                        </div>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                            class="d-block col-8" alt="...">
                    </div>

                </div> --}}
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
            <section class="mb-2">
                <h1>Esporte</h1>
                <hr>
                <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <section class="mb-2">
                <h1>Esporte</h1>
                <hr>
                <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
            <section class="mb-2">
                <h1>Esporte</h1>
                <hr>
                <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                    to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        </article>

        <article class="ms-5 col-4">
            <section class="mb-2">
                <h3 class="text-center">Mais lidas</h3>
                <hr>
                @foreach ($acess as $key => $acess)
                    <div class="">
                        <a class="d-flex" href="">
                            <h1 class="me-1">{{ $key + 1 }}.</h1>
                            <p>{{ $acess->title }}</p>
                        </a>
                    </div>
                    <hr>
                @endforeach
            </section>

            <section class="mb-2">
                <h3 class="text-center">Recomendações</h3>
                @auth
                @else
                    @foreach ($recomendation as $recomendation)
                        <a href="#" class="card border-0 mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center">
                                    <img src="{{ asset('storage/'. $recomendation->image) }}" class="img-fluid rounded-start" alt="...">
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
                @endauth

            </section>
        </article>
    </div>
@endsection

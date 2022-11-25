@extends('layouts.app')

@section('main')
    <section class="col-4 mx-auto mt-2">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex">
                        <p class="col-4 m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus explicabo
                            pariatur dolore laboriosam voluptas repudiandae dicta temporibus, aliquam.</p>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                            class="d-block col-8" alt="...">
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container row mt-3 mx-auto">
        <article class="col-9">
            <h1>Esporte</h1>
            <hr>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="col-3">
            <section class="border border-2 border-primary">
                <h1>Hello</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, tempora voluptates aut illum fugit
                    delectus. Nesciunt rem culpa laboriosam repudiandae, adipisci repellat est consequatur optio porro, esse
                    facere, quaerat ullam!</p>
            </section>
        </article>
    </div>
@endsection

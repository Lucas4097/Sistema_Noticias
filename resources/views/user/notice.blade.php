@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <section class="w-75 mx-auto text-center mb-2">
            <h1 class="mb-2">{{ $notice->title }}</h1>
            <img class="mb-2"
                src="{{ asset('storage/'. $notice->image) }}" alt="">
            <p class="lead">{{ $notice->description }}</p>
        </section>

        <section class="mb-3 w-50 mx-auto">
            <form class="mb-2" action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentário</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deixe um comentário"></textarea>
                </div>
                <button class="btn btn-success" type="submit">Enviar</button>
            </form>

            <div class="card mb-3 border-0" style="max-width: 700px;">
                <div class="row g-0">
                  <div class="col-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU" class="img-fluid rounded-circle" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-0">
                      <h5 class="card-title fs-6">Nome</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
            <div class="card mb-3 border-0" style="max-width: 700px;">
                <div class="row g-0">
                  <div class="col-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU" class="img-fluid rounded-circle" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-0">
                      <h5 class="card-title fs-6">Nome</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
            <div class="card mb-3 border-0" style="max-width: 700px;">
                <div class="row g-0">
                  <div class="col-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4LqjrGP-1vkt2mo4FxkQE7uwSTJX_U11bYGqPvoTwJOsrzZwiIbay85wXIWJs85RocZU&usqp=CAU" class="img-fluid rounded-circle" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-0">
                      <h5 class="card-title fs-6">Nome</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
@endsection

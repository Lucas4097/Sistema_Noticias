<a href="{{ route('noticePage', ['id' => $notice->id]) }}" class="card border-0 mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4 d-flex align-items-center">
            <img src="{{ asset('storage/'. $notice->image) }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $notice->title }}</h5>
                <p class="card-text">{{ $notice->description }}</p>
            </div>
        </div>
    </div>
</a>

<section>
    <button class="btn btn-dark mt-3 ms-5"><a href="/" class="text-decoration-none text-light"><- Go Home</a></button>
    <div class="card mx-auto mt-5" style="width: 25rem;">
        <img src="{{ asset($show -> path) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $show->name }}</h5>
            <p class="card-text">{{ $show->quantity }} g/l</p>
            <form action="/delete/{{ $show->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Remove</button>
            </form>
        </div>
    </div>
</section>

<section>
    <div id="carouselExampleControls" class="carousel slide mt-5 text-center" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @foreach ($tabs as $tab)
                    <h1>{{$tab -> id}} : {{$tab -> nom}}</h1>
                @endforeach
            </div>
            <div class="carousel-item">
                @foreach ($tabs as $tab)
                    <h1>{{$tab -> id}} : {{$tab -> age}} ans</h1>
                @endforeach
            </div>
            <div class="carousel-item">
                @foreach ($tabs as $tab)
                    <h1>{{$tab -> id}} : {{$tab -> email}}</h1>
                @endforeach
            </div>
        </div>
        <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

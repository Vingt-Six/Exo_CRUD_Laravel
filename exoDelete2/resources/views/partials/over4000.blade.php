<section>
    <div class="card mx-3" style="width: 18rem;">
        <img src="{{ asset('img/mustang-1703538_1280.webp') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Cars over 4000$</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Show
            </button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Over 4000$</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Brand</th>
                                <th scope="col">Years</th>
                                <th scope="col">Color</th>
                                <th scope="col">Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                @if ($car -> price > 4000)
                                    <tr>
                                        <th scope="row">{{$car -> brand}}</th>
                                        <td>{{$car -> year}}</td>
                                        <td>{{$car -> color}}</td>
                                        <td>{{$car -> price}}<span class="text-success">$</span></td>
                                        <td>
                                            <form action="/delete/{{$car -> id}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn p-0">x</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>

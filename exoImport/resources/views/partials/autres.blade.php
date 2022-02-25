<section class="mt-5 bg-secondary text-light">
    <h1>Autres</h1>
    <table class="table text-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autres as $autre)
                <tr>
                    <th scope="row">{{$autre -> id}}</th>
                    <td>{{$autre -> nom}}</td>
                    <td>{{$autre -> age}}</td>
                    <td>{{$autre -> genre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="mt-5 bg-danger text-light">
    <h1>Femmes</h1>
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
            @foreach ($femmes as $femme)
                <tr>
                    <th scope="row">{{$femme -> id}}</th>
                    <td>{{$femme -> nom}}</td>
                    <td>{{$femme -> age}}</td>
                    <td>{{$femme -> genre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="mt-5 bg-primary text-light">
    <h1>Hommes</h1>
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
            @foreach ($hommes as $homme)
                <tr>
                    <th scope="row">{{$homme -> id}}</th>
                    <td>{{$homme -> nom}}</td>
                    <td>{{$homme -> age}}</td>
                    <td>{{$homme -> genre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="mt-5 bg-dark text-light">
    <h1>Femmes 18-24</h1>
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
            @foreach ($femmesMajeurs as $item)
                <tr>
                    <th scope="row">{{$item -> id}}</th>
                    <td>{{$item -> nom}}</td>
                    <td>{{$item -> age}}</td>
                    <td>{{$item -> genre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
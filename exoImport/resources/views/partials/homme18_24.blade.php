<section class="mt-5 bg-warning text-light">
    <h1>Hommes 18-24</h1>
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
            @foreach ($hommesMajeurs as $item)
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
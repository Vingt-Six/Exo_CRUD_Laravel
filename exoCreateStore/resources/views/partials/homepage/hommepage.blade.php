<section>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Lvl</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
                <tr>
                    <th scope="row">{{$pokemon -> id}}</th>
                    <td>{{$pokemon -> name}}</td>
                    <td>{{$pokemon -> type}}</td>
                    <td>{{$pokemon -> level}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
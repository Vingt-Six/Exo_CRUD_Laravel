<section>
    <a href="/create" class="btn btn-outline-secondary">Add Member</a>
    <a href="/deleteALL" class="btn btn-outline-info">DELETE ALL</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membres as $item)
                <tr>
                    <th scope="row">{{$item -> id}}</th>
                    <td>{{$item -> nom}}</td>
                    <td>{{$item -> age}}</td>
                    <td>{{$item -> genre}}</td>
                    <td>
                        <a href="/membre/{{$item -> id}}/edit" class="btn btn-outline-warning">Edit</a>
                    </td>
                    <td>
                        <a href="/show/{{$item -> id}}" class="btn btn-outline-dark">Show</a>
                    </td>
                    <td>
                        <form action="/delete/{{$item -> id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

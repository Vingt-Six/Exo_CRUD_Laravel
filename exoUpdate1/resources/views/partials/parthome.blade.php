<section>
    <a href="/create" class="btn btn-outline-primary">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <th scope="row">{{$animal -> id}}</th>
                    <td>{{$animal -> gender}}</td>
                    <td>{{$animal -> age}}</td>
                    <td>
                        <form action="/delete/{{$animal -> id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/show/{{$animal -> id}}" class="btn btn-outline-info">Show</a>
                    </td>
                    <td>
                        <a href="/animals/{{$animal -> id}}/edit" class="btn btn-outline-success">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<section>
    <button class="btn border-dark ms-5 mt-3 mb-5"><a href="/create" class="text-decoration-none text-dark">Add People</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <th scope="row">{{$member -> id}}</th>
                    <td>{{$member -> name}}</td>
                    <td>{{$member -> age}}</td>
                    <td>{{$member -> gender}}</td>
                    <td>
                        <form action="/delete/{{$member -> id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

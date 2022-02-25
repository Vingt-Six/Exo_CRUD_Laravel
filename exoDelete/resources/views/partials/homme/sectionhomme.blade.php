<section>
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
            @foreach ($mans as $member)
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
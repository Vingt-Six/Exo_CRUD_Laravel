<section class="mt-5 mx-auto" style="width: 30%">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ings as $ing)
                <tr>
                    <th scope="row">{{$ing -> id}}</th>
                    <td><a href="/show/{{ $ing->id }}" class="text-decoration-none text-dark">{{ $ing->name }}</a></td>
                    <td class="p-1">
                        <form action="/delete/{{ $ing->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger h-50" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

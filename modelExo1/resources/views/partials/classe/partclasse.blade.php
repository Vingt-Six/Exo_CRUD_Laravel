<section>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Size</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $classe)
            <tr>
                <th scope="row">{{$classe -> id}}</th>
                <td>{{$classe -> name}}</td>
                <td>{{$classe -> size}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
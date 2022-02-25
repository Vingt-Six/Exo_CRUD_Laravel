<section class="mt-5">
    <h1>All </h1>
    <h2>Total : {{$count($members)}}</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            {{-- Condition if else --}}
                {{-- @if ($member->genre == 'Homme')
                    <tr class="bg-primary text-light">
                        <th scope="row">{{$member -> id}}</th>
                        <td>{{$member -> nom}}</td>
                        <td>{{$member -> age}}</td>
                        <td>{{$member -> genre}}</td>
                    </tr>
                @else
                    <tr class="bg-danger text-light">
                        <th scope="row">{{$member -> id}}</th>
                        <td>{{$member -> nom}}</td>
                        <td>{{$member -> age}}</td>
                        <td>{{$member -> genre}}</td>
                    </tr>
                @endif --}}

            {{-- Condition ternaire --}}
                <tr class="{{$member -> genre == 'Homme' ? 'bg-primary' : 'bg-danger'}} text-light">
                    <th scope="row">{{$member -> id}}</th>
                    <td>{{$member -> nom}}</td>
                    <td>{{$member -> age}}</td>
                    <td>{{$member -> genre}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

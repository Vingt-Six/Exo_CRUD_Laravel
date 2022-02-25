<section class="mt-3">
    <h2>Tout le monde</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                {{-- <tr class="{{($member -> age == 22 or $member -> age == 23) ? 'bg-success' : (($member -> age > 24) ? 'bg-info' : 'bg-light')}}">
                    <th scope="row">{{$member -> id}}</th>
                    <td>{{$member -> name}}</td>
                    <td>{{$member -> gender}}</td>
                    <td>{{$member -> email}}</td>
                    <td>{{$member -> age}}</td>
                </tr> --}}

                @if ($member -> age == 22 or $member -> age == 23)
                    <tr style="background-color: rgb(69, 19, 110); color: white;">
                        <th scope="row">{{$member -> id}}</th>
                        <td>{{$member -> name}}</td>
                        <td>{{$member -> gender}}</td>
                        <td>{{$member -> email}}</td>
                        <td>{{$member -> age}}</td>
                    </tr>
                @elseif ($member -> age > 24)
                    <tr class="bg-info">
                        <th scope="row">{{$member -> id}}</th>
                        <td>{{$member -> name}}</td>
                        <td>{{$member -> gender}}</td>
                        <td>{{$member -> email}}</td>
                        <td>{{$member -> age}}</td>
                    </tr>
                @else
                    <tr>
                        <th scope="row">{{$member -> id}}</th>
                        <td>{{$member -> name}}</td>
                        <td>{{$member -> gender}}</td>
                        <td>{{$member -> email}}</td>
                        <td>{{$member -> age}}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</section>

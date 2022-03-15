<section>
    <form action="/animals/{{$edit -> id}}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="{{$edit -> gender}}" name="gender" value="{{$edit -> gender}}">
            </div>
            <div class="col">
                <input type="age" class="form-control" placeholder="{{$edit -> age}}" name="age" value="{{$edit -> age}}">
            </div>
        </div>
        <button class="btn btn-dark" type="submit">Update</button>
    </form>
</section>

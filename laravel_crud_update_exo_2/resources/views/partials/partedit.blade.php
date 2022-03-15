<section>
    <a href="{{URL::previous()}}" class="btn btn-outline-dark">Back</a>
    <form action="/membre/{{$edit -> id}}/update" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-5">
            <div class="col">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nom" value="{{$edit -> nom}}">
            </div>
            <div class="col">
                <label for="">Age</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="age" value="{{$edit -> age}}">
            </div>
        </div>
        <label for="" class="mt-3">Genre</label>
        <select class="form-select" aria-label="Default select example" name="genre">
            <option selected>Open this select menu</option>
            <option value="Homme" @if ($edit -> genre == 'Homme') ? selected : null @endif>Homme</option>
            <option value="Femme" @if ($edit -> genre == 'Femme') ? selected : null @endif>Femme</option>
        </select>
        <button class="btn btn-primary mt-5" type="submit">Add</button>
    </form>
</section>
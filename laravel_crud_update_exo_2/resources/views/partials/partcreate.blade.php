<section>
    <a href="{{URL::previous()}}" class="btn btn-outline-dark">Back</a>
    <form action="/store" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col">
                <label for="">Nom</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nom">
            </div>
            <div class="col">
                <label for="">Age</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="age">
            </div>
        </div>
        <label for="" class="mt-3">Genre</label>
        <select class="form-select" aria-label="Default select example" name="genre">
            <option selected>Open this select menu</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
        <button class="btn btn-primary mt-5" type="submit">Add</button>
    </form>
</section>

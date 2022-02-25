<section>
    <form action="/store" method="POST">
        @csrf
        <div class="row mx-5">
            <div class="col">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col">
                <label for="">Age</label>
                <input type="number" class="form-control" name="age">
            </div>
        </div>
        <select class="form-select mt-4 w-75 mx-auto" aria-label="Default select example" name="gender">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
        <button class="btn btn-danger ms-5">Add</button>
    </form>
</section>

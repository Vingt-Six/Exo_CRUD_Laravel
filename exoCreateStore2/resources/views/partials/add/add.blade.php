<section class="mx-5">
    <form action="/store" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Age</label>
                <input type="text" class="form-control" name="age">
            </div>
            <div class="col">
                <label for="">Gender</label>
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-danger mt-3">Go</button>
    </form>
</section>

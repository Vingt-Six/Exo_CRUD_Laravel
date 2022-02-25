<section class="mt-5 mx-5">
    <form action="/store" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col">
                <label for="">Quantity</label>
                <input type="number" class="form-control" min="0" name="quantity">
            </div>
        </div>
        <label for="">Image URL</label>
        <select class="form-select" aria-label="Default select example" name="path">
            <option selected>Select Ingredient</option>
            <option value="img/sel.jpeg">Sel</option>
            <option value="img/poivre.jpeg">Poivre</option>
            <option value="img/pomme.jpeg">Pomme</option>
        </select>
        <button type="submit" class="btn btn-success text-light mt-3">Add</button>
    </form>
</section>

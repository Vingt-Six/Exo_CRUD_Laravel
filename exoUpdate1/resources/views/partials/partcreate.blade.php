<section>
    <form action="/store" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Tiger" aria-label="Gender" name="gender">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="10" aria-label="Age" name="age">
            </div>
        </div>
        <button class="btn btn-outline-dark" type="submit">Add</button>
    </form>
</section>

<section>
    <form action="/store" method="POST">
        @csrf
    <div class="row g-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" name='firstname' class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <input type="number" name="age" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <input type="text" name="email" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
    </div>
    <button type="submit">Add</button>
    </form>
</section>

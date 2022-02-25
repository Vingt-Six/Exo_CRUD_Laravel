<section class="mx-5 mt-5">
    <form action="/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-8">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-4">
                <label for="">Level</label>
                <input type="number" class="form-control" min="0" max="100" name="level">
            </div>
        </div>
        <label for="" class="mt-3">Type</label>
        <select class="form-select" name="type">
            <option value="Acier">Acier</option>
            <option value="Combat">Combat</option>
            <option value="Dragon">Dragon</option>
            <option value="Eau">Eau</option>
            <option value="Electrik">Electrik</option>
            <option value="Fée">Fée</option>
            <option value="Feu">Feu</option>
            <option value="Glace">Glace</option>
            <option value="Insecte">Insecte</option>
            <option value="Normal">Normal</option>
            <option value="Plante">Plante</option>
            <option value="Poison">Poison</option>
            <option value="Psy">Psy</option>
            <option value="Roche">Roche</option>
            <option value="Sol">Sol</option>
            <option value="Spectre">Spectre</option>
            <option value="Ténèbres">Ténèbres</option>
            <option value="Vol">Vol</option>
        </select>
        <button type="submit" class="btn btn-success mt-3">Add</button>
    </form>
</section>

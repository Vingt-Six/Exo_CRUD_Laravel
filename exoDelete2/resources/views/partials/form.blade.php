<section>
    <form action="/store" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col">
                <label for="">Brand</label>
                <select class="form-select" aria-label="Default select example" name="brand">
                    <option selected>Select car</option>
                    <option value="Abarth">Abarth</option>
                    <option value="Alfa Romeo">Alfa Romeo</option>
                    <option value="Aston Martin">Aston Martin</option>
                    <option value="Audi">Audi</option>
                    <option value="Bentley">Bentley</option>
                    <option value="BMW">BMW</option>
                    <option value="Bollore">Bollore</option>
                    <option value="BRP">BRP</option>
                    <option value="Bugatti">Bugatti</option>
                    <option value="Cadillac">Cadillac</option>
                    <option value="Caterham">Caterham</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Chrysler">Chrysler</option>
                    <option value="Citroën">Citroën</option>
                    <option value="Cupra">Cupra</option>
                    <option value="Dacia">Dacia</option>
                    <option value="Daihatsu">Daihatsu</option>
                    <option value="Dodge">Dodge</option>
                    <option value="DS">DS</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Fisker">Fisker</option>
                    <option value="Ford">Ford</option>
                    <option value="GMC">GMC</option>
                    <option value="Honda">Honda</option>
                    <option value="Hummer">Hummer</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Infiniti">Infiniti</option>
                    <option value="Izuzu">Izuzu</option>
                    <option value="Jaguar">Jaguar</option>
                    <option value="Jannarelly">Jannarelly</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Kia">Kia</option>
                    <option value="Koenigsegg">Koenigsegg</option>
                    <option value="Lamborghini">Lamborghini</option>
                    <option value="Lancia">Lancia</option>
                    <option value="Land-Rover">Land-Rover</option>
                    <option value="Lexus">Lexus</option>
                    <option value="Lotus">Lotus</option>
                    <option value="Maserati">Maserati</option>
                    <option value="Maybach">Maybach</option>
                    <option value="Mazda">Mazda</option>
                    <option value="Mclaren">Mclaren</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="MG Motor">MG Motor</option>
                    <option value="Mini">Mini</option>
                    <option value="Mitsubishi">Mitsubishi</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Opel">Opel</option>
                    <option value="Pagani">Pagani</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="PGO">PGO</option>
                    <option value="Polestar">Polestar</option>
                    <option value="Porsche">Porsche</option>
                    <option value="Renault">Renault</option>
                    <option value="Rolls Royce">Rolls Royce</option>
                    <option value="Saab">Saab</option>
                    <option value="Seat">Seat</option>
                    <option value="Shelby">Shelby</option>
                    <option value="Skoda">Skoda</option>
                    <option value="Smart">Smart</option>
                    <option value="Ssangyong">Ssangyong</option>
                    <option value="Subaru">Subaru</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Venturi">Venturi</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Volvo">Volvo</option>
                    <option value="Zenvo">Zenvo</option>
                </select>
            </div>
            <div class="col">
                <label for="">Years</label>
                <input type="number" class="form-control" name="year" min="0" max="2022">
            </div>
        </div>
        <div class="row g-3">
            <div class="col">
                <label for="">Color</label>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="col">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" min="0">
            </div>
        </div>
        <div>
            <label for="">Promo</label>
            <input type="number" class="form-control" name="sale" min="0" max="100">
        </div>
        <button class="btn btn-danger mt-3" type="submit">Add</button>
    </form>
</section>

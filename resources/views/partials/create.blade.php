<section>
    <h1> Ajouter une boisson dans la machine</h1>
        <div class="container d-flex justify-content-center gap-2">
            
            <form class="d-flex gap-2" action="{{ route('store.boisson') }}" method="POST">
            @csrf
            <div>
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom">
            </div>
         
            <div>
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix">
            </div>
            <button type="submit">Ajouter la boisson</button> 
            </form>
    </div>
    </section>
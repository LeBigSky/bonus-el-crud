<section>
    <h1> Modifier une boisson</h1>
        <div class="container d-flex justify-content-center gap-2">
            <form class="d-flex gap-2" action="/update/{{ $edit['id'] }}" method="POST">
            @csrf
            <div>
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom" value="{{ $edit['nom'] }}">
            </div>
         
            <div>
                <label for="prix">prix</label>
                <input type="number" name="prix" id="prix" value="{{ $edit['prix'] }}">
            </div>
            <button type="submit">Modifier la boisson</button> 
            </form>
    </div>
    </section>
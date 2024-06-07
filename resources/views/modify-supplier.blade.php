@include('header')
<h1>Modifier le fournisseur Fournisseur</h1>

<form action="/suppliers/modify/{{$supplier->id}}" method='post'>
    @csrf
    <div>
        <p><label for="name">Nom du fournisseur :</label></p>
        <p><input type="text" name="name" id="name" value="{{$supplier->name}}"></p>
    </div>

    <div>
        <p><label for="adress">Adresse du fournisseur :</label></p>
        <p><input type="text" name="adress" id="adress" value="{{$supplier->adress}}"></p>
    </div>

    <div>
        <p><label for="website">Site web du fournisseur :</label></p>
        <p><input type="text" name="website" id="website" value="{{$supplier->website}}"></p>
    </div>

    <input type="submit" value="Enregistrer">
</form>
<p><a href="/suppliers/delete/{{$supplier->id}}">Supprimer le fournisseur</a></p>
@include('footer')

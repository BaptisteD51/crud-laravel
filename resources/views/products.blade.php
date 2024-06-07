@include('header')
<h1>Tous les médicaments</h1>
<p><a href="products/create">Ajouter un produit</a></p>
<p> Les médicaments : </p>
<table>
    <thead>
        <tr>
            <th>Médicament :</th>
            <th>Description :</th>
            <th>Fournisseur :</th>
            <th>Quantité :</th>
            <th>Prix :</th>
        </tr>
    </thead>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->supplier->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}} €</td>
            <td><a href="products/view/{{$product->id}}">Voir</a></td>
            <td><a href="products/modify/{{$product->id}}">Modifier</a></td>
        </tr>
    @endforeach
</table>
<p><a href="/suppliers">Voir les fournisseurs</a></p>
@include('footer')
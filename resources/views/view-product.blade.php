@include('header')
<h1>{{$product->name}}</h1>
<p><a href="/products/modify/{{$product->id}}">Modifier</a></p>

<h2>Fournisseur :</h2>
<p>{{$product->supplier->name}}</p>

<h2>Quantité :</h2>
<p>{{$product->quantity}}</p>

<h2>Prix :</h2>
<p>{{$product->price}}</p>

<h2>Description :</h2>
<p>{{$product->description}}</p>
<p><a href="/products">Retourner aux produits</a></p>
@include('footer')

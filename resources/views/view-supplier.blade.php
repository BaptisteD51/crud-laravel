@include('header')
<h1>{{$supplier->name}}</h1>
<p><a href="/suppliers/modify/{{$supplier->id}}">Modifier</a></p>

<h2>Adresse : </h2>
<p>{{$supplier->adress}}</p>

<h2>Site web : </h2>
<p><a href="{{$supplier->website}}">{{$supplier->website}}</a></p>

<h2>Liste des produits :</h2>
<ul>
    @foreach($supplier->products as $product)
        <li>{{$product->name}} - <a href="/products/view/{{$product->id}}">Voir</a></li>
    @endforeach
</ul>
@include('footer')

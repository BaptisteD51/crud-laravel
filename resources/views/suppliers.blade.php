@include('header')
<h1>Fournisseurs</h1>
<a href="/suppliers/create">Ajouter un fournisseur</a>
<table>
    <thead>
        <th>Fournisseur :</th>
        <th>Adresse :</th>
        <th>Site internet : </th>
    </thead>
@foreach ($suppliers as $supplier)
    <tr>
        <td>{{$supplier->name}}</td>
        <td>{{$supplier->adress}}</td>
        <td><a href="{{$supplier->website}}">{{$supplier->website}}</a></td>
        <td><a href="/suppliers/view/{{$supplier->id}}">Voir</a></td>
        <td><a href="/suppliers/modify/{{$supplier->id}}">Modifier</a></td>
    </tr>
@endforeach
</table>
<p><a href="/products">Retourner aux produits</a></p>
@include('footer')

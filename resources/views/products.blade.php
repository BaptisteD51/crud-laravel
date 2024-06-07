<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicaments</title>
    <style>
        td,th{
            border:solid 1px;
            padding:5px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
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
</body>
</html>
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
    <h1>{{$product->name}}</h1>

    <h2>Fournisseur :</h2>
    <p>{{$product->supplier->name}}</p>

    <h2>Quantité :</h2>
    <p>{{$product->quantity}}</p>

    <h2>Prix :</h2>
    <p>{{$product->price}}</p>

    <h2>Description :</h2>
    <p>{{$product->description}}</p>
</body>
</html>
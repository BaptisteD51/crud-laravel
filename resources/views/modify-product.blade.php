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
    <h1>Modifier le produit</h1>
    <form action="/products/modify/{{$product->id}}" method="POST">
        @csrf
        <div>
            <p><label for="name">Nom du médicament</label></p>
            <p><input type="text" name="name" id="name" value="{{$product->name}}"></p>
        </div>

        <div>
            <p><label for="supplier_id">Fournisseur</label></p>
            <select name="supplier_id" id="supplier_id">
                <option value="{{$product->supplier->id}}">{{$product->supplier->name}}</option>
                @foreach($suppliers as $supplier)
                    <option value="{{$supplier['id']}}">{{$supplier['name']}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <p><label for="quantity">Quantité</label></p>
            <p><input type="number" name="quantity" id="quantity" value="{{$product->quantity}}"></p>
        </div>

        <div>
            <p><label for="price">Prix</label></p>
            <p><input type="number" name="price" id="price" step='0.01' value="{{$product->price}}"></p>
        </div>

        <div>
            <p><label for="description">Description</label></p>
            <p><textarea name="description" id="description">{{$product->description}}</textarea></p>
        </div>

        <input type="submit" value="Enregistrer">
    </form>
    <p style="margin-top:50px;">
        <a href="/products/delete/{{$product->id}}">Suprimer le produit</a>
    </p>
</body>
</html>
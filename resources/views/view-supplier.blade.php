<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1>{{$supplier->name}}</h1>
    
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
    {{-- @foreach ($suppliers as $supplier)
        <tr>
            <td>{{$supplier->name}}</td>
            <td>{{$supplier->adress}}</td>
            <td>{{$supplier->website}}</td>
            <td><a href="/suppliers/view/{{$supplier->id}}">Voir</a></td>
            <td><a href="/suppliers/modify/{{$supplier->id}}">Modifier</a></td>
        </tr>
    @endforeach --}}
    </table>
</body>
</html>
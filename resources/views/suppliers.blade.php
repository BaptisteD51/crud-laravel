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
            <td>{{$supplier->website}}</td>
            <td><a href="/suppliers/view/{{$supplier->id}}">Voir</a></td>
            <td><a href="/suppliers/modify/{{$supplier->id}}">Modifier</a></td>
        </tr>
    @endforeach
    </table>
</body>
</html>
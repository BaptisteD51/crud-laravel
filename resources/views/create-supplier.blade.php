<!DOCTYPE html>
<html lang="fr">
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
    <h1>Ajouter un nouveau Fournisseur</h1>
    
    <form action="/suppliers/create" method='post'>
        @csrf
        <div>
            <p><label for="name">Nom du fournisseur :</label></p>
            <p><input type="text" name="name" id="name"></p>
        </div>

        <div>
            <p><label for="adress">Adresse du fournisseur :</label></p>
            <p><input type="text" name="adress" id="adress"></p>
        </div>

        <div>
            <p><label for="website">Site web du fournisseur :</label></p>
            <p><input type="text" name="website" id="website"></p>
        </div>

        <input type="submit" value="Créer">
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['name'] }} - {{ $product['price'] }} €</li>
        @endforeach
    </ul>
</body>
</html>

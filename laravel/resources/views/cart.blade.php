<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb</title>
</head>
<body>
    @foreach ($products as $product)
        <p>ID {{ $product->id }}</p>
        <p>NAME {{ $product->name }}</p>
        <hr>
    @endforeach
</body>
</html>

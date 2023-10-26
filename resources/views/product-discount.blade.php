<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product discount caculator</h1>
    <form method="post" action="/product-discount">
    @csrf 
        Product description: <input type="text" name="name"><br>
        List price: <input type="number" name="price"><br>
        Discount Percents: <input type="number" name="discount"><br>
        <button type="submit">Caculator</button>
    </form>
</body>
</html>
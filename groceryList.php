<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List</title>

     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #e9ecef;
            margin: 8px 0;
            padding: 10px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        li:nth-child(odd) {
            background-color: #dee2e6;
        }

        .item {
            font-size: 16px;
        }

        .quantity {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grocery List</h1>
        <ul>
            <li><span class="item">Apples</span><span class="quantity">2 kg</span></li>
            <li><span class="item">Bananas</span><span class="quantity">1 dozen</span></li>
            <li><span class="item">Carrots</span><span class="quantity">1 kg</span></li>
            <li><span class="item">Bread</span><span class="quantity">2 loaves</span></li>
            <li><span class="item">Milk</span><span class="quantity">1 liter</span></li>
            <li><span class="item">Eggs</span><span class="quantity">1 dozen</span></li>
            <li><span class="item">Chicken</span><span class="quantity">1 kg</span></li>
        </ul>
    </div>
</body>
</html>

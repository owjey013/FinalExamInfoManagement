<html>
    <head>
        <title>Welcome Online Food Shop</title>
    </head>
    <body>
        <p><input type="submit" value="LOG OUT" name="logoutButton" onclick="location.href='logout.php'"></p>
        <ul>
            <li><b>Spaghetti</b> - 50 PHP</li>
            <li><b>Sundae</b> - 40 PHP</li>
            <li><b>Fried Chicken</b> - 60 PHP</li>
            <li><b>Burger Steak</b> - 60 PHP</li>
            <li><b>Burger</b> - 55 PHP</li>
        </ul>

        <form action="calculateOrder.php" method="POST">
            Choose your order: 
            <select name="foodSelectField">
                <option value="spaghetti">Spaghetti</option>
                <option value="sundae">Sundae</option>
                <option value="friedChiken">Fried Chicken</option>
                <option value="burgerSteak">Burger Steak</option>
                <option value="burger">Burger</option>
            </select> <br><br>
            Quantity: <input type="text" name="quantityTextField"> <br><br>
            Cash: <input type="text" name="cashTextField"> <br><br>
            <input type="submit" value="ORDER!" name="orderButton">
        </form>
    </body>
</html>
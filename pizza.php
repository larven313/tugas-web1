<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table align="center" style="padding:10px; border:1px solid black;">
        <tr>
            <td>        
            <form action="http://www.blackgoosebistro.com/pizza.php" method="post">
                
                    <b>Black Goose Bistro | Pizza-on-Demand</b>
            
                <p>Our 12" wood-fired pizzas are available for delivery. Build Your <br> custom pizza we'll deliver it within an hour.</p>
               
                Your Information
                <br>
                <label for="name">Name :</label>
                <input type="text" name="customername">
<br>
                <label for="address">Address :</label>
                <input type="text" name="address">
<br>
                <label for="telephone">Telephone Number :</label>
                <input type="tel" name="telephone">
<br>
                <label for="email">Email :</label>
                <input type="email" name="email">
                <br>
                Delivery instructions: <br>
                <textarea name="instructions" id="" cols="30" rows="10" placeholder="No more than 400 characters long"></textarea>
<br> <br>
                <b>Designe Your Dream Pizza:</b> <br>
                Pizza specs

                <p>Crust (Choose one) :</p>

                <ul type="none">
                    <li><input type="radio" name="crust" value="white">Classic white</li>
                    <li><input type="radio" name="crust" value="multigrain">Multigrain</li>
                    <li><input type="radio" name="crust" value="cheese crust">Cheese-stuffed crust</li>
                    <li><input type="radio" name="crust" value="gluten free">Gluten-free</li>
                </ul>
                
                <p>Toppings (Choose as many as you want):</p>
                <ul type="none">
                    <li><input type="checkbox" name="toppings[]" value="red sauce" checked='checked'>Red sauce</li>
                    <li><input type="checkbox" name="toppings[]" value="white sauce">White Sauce</li>
                    <li><input type="checkbox" name="toppings[]" value="mozzarella">Mozarella Cheese</li>
                    <li><input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni</li>
                    <li><input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</li>
                    <li><input type="checkbox" name="toppings[]" value="peppers">Peppers</li>
                    <li><input type="checkbox" name="toppings[]" value="anchovies">Anchoives</li>
                </ul>
                
                <p>Number</p>
                <label for="">How many pizzas :</label>
                <select name="pizzas" id="pizzas" size="1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
                
                <br>
                <input type="submit" value="Bring me a pizza!">
                <input type="reset" value="Reset">

                
                
                
                
                
                
                


            </form>
            </td>
        </tr>

    </table>

</body>
</html>
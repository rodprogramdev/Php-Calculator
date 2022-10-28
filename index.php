<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Exercise</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div class="heading">
    <h1>RBSL's Simple Calculator</h1>
    </div>

    <div class="form">
    
    <form action="">
   
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
      
        <select name="operator">
           
        <option>None</option> 
            <option>Add</option> 
            <option>Subtract </option> 
            <option>Multiply </option> 
            <option>Divide </option> 
        </select>
        <br>
        <button name="submit" value="Submit">Calculate</button>
        <p>The answer is:</p>
        <?php
            if(isset($_GET['submit'])){
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch ($operator){
                    case "None":
                        echo "ERROR, no method selected";
                        break;
                    case "Add":
                        echo $result1 + $result2;
                        break;
                    case "Subtract":
                        echo $result1 - $result2;
                        break;
                    case "Multiply":
                        echo $result1 * $result2;
                        break;
                    case "Divide":
                        echo $result1 / $result2;
                        break;
                }
            }
   ?>
    </form>
   
    </div>
 
    
</body>
</html>
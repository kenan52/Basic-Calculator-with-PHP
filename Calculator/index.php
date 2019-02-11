<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
    </head>
    <body>
        <div class="box">
            <div class="center">
                <h2>Calculator</h2>
         <form method="post">
            <label>Number 1 </label><input type="text" name="numb1"><br><br>
            <label>Number 2 </label><input type="text" name="numb2"><br><br>
            <select name="operator" id="">
               <option>None</option>
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
               <option>Square</option>
            </select><br><br>
            <button type="submit" name="submit" value="submit">Calculate</button>
         </form><br><br>
<center>
        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'None':
                        echo "You need to select any operator";
                        break;
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                    case 'Square':
                        echo $result1 ** $result2;
                        break;
                }
            }


         ?>
        </center>
            </div>
        </div>
        <footer>
          <a href="https://www.instagram.com/boycoding/" target="_blank" >© COPYRIGHT BoyCoding</a>
        </footer>
    </body>
    </html>
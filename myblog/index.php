<?php

include_once ('function.php');

if (isset($_POST['submit']))
{

    $email = $_POST['email'];
   
    echo "Form was submitted </br>" ;
    if (!empty($email)) 
    {
    
        if (isValidEmail($email)){
           echo "Email Valid </br>";
        }  else {
            echo "Email Invalid </br>";
        }
       
    }


    $name = $_POST['name'];
    if (!empty($name))
    {
        if (isValidName($name)){
            echo "Name Valid </br>";
         }  else {
             echo "Name Invalid </br>";
         }
    }


    $phone = $_POST['phone'];
    if (!empty($phone))
    {
        if (isValidPhone($phone))
        {
        echo "Phone Valid </br>";
        }   else
            {
                echo "Phone Invalid </br>";
            }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTTP. Forms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-weidth, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="index.php" method="post">
                Name: <input type="text" name="name"><br>
                Email: <input type="text" name="email"><br>
                Phone: <input type="text" name="phone"><br> 
                <input type="submit" value="Submit" name="submit">
            </form>     
        </div>
    </body>
</html> 


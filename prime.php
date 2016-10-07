<!DOCTYPE html>
<html>
    <head>
        <title>Prime Number</title>
    </head>
    <body>
       <?php
        if($_POST){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                echo "<br><h1>first number is $num1,second number is $num2</h1>";
            }
            for($i=$num1;$i<=$num2;$i++){
                
            }
?>
  
        <form method ="post" action="prime.php"></form>
        <label for="num1">Enter First Number</label>
        <input type="number" name="num1" id="num1" required="required"/><br>
        <label for="num2">Enter Second Number</label>
        <input type="number" name="num2" id="num2" required="required"/><br>
        <input type="submit" value="Check"/>
    </body>
</html>

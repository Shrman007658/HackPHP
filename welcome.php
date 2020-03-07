<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Your order has been placed and request has been sent to the mentioend UPI<br>
    Please complete the payment and show the request to the required vendor. <br><br><br>
    <?php
    session_start();
    include 'phpqrcode/phpqrcode/qrlib.php'; 
        if(isset($_POST['SendInfo']))
        {
            //enter all the items code here.
            $it1c=$_POST['quant1'];
            $it2c=$_POST['quant2'];
            $it3c=$_POST['quant3']; 
            $it4c=$_POST['quant4'];
            $it5c=$_POST['quant5'];
            $tot=$it1c+$it2c+$it3c+$it4c+$it5c;
            $totc=$tot*65;
            $it1=$_POST['Food1'];
            $it2=$_POST['Food2'];
            $it3=$_POST['Food3'];
            $it4=$_POST['Food4'];
            $it5=$_POST['Food5'];
            
            echo "<br>";
            $textqR="[$it1 X $it1c] 
            [$it2 X $it2c]
            [$it3 X $it3c]
            [$it4 X $it4c]
            [$it5 X $it5c] ";
        }
        
    
    
    $_SESSION['OrderList']=$textqR;
    echo"<br>";
    echo $_SESSION['OrderList'];
    echo "<br> <br>";
    echo "Your total Order Total is: $totc";
    ?>
    <br>
    <br>
    <br>
    <a href="qrDisplay.php">Payment Done</a>
    <br>
    <br>
    <a href ="index.html">Payment Unsucessfull</a>
    

</body>
</html>
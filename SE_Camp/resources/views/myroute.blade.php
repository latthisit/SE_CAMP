<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('CSS/myroute.css')}}">
</head>
<body>
   <h1>!!!!Multiplication Table with User Input!!!!</h1>
   <div class="box-number">
    <?php
    if(isset($_POST['number'])){
        $number = $_POST['number'];
        echo "Your Input Number is : $number <br>";
        echo "<br>";
        for($i = 1 ; $i<=12; $i++){
            echo "<strong>" .$number. "&nbsp;&nbsp;&nbsp*&nbsp;&nbsp;&nbsp" .$i. "&nbsp;&nbsp;&nbsp=&nbsp;&nbsp;&nbsp" .$number * $i. "</strong> <br>";
        }
    }
    ?>
   </div>

</body>
</html>

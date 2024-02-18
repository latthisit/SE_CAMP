<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Javascript </title>

</head>

<body>
    <h1>Before</h1>
    <h1 id="myh1">
        <h1>Prepend</h1>Javascript</h1>Append<h1>

        </h1>
    <h1>After</h1>
    <input type="text" id="my_number">
    <button onclick="myFunction()"> Submit Number!</button>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        console.log("Hello World - document")
        console.log($('#myh1').text())
        console.log($('#my_number').val())
        $('#myh1').text("Javascript 101")
        $('#my_number').val(100)
    });


    function myFunction(){
        let my_number = parseInt($('#my_number').val())
        for(let i = 0; i < my_number;i++){
            $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
        }
        console.log(document.getElementById('my_number').value)
        console.log('Click Submit Number');
        $('.my_gen_number').each(function(index , val){
            console.log(val)
        })
    }

    let myval4 = [1,2,3,4];
    myval4[5] = 5;
    myval4[6] = [6 , 5 , 4 , 5 , 6];
    for(i = 0; i < myval4.length; i++){
        console.log(myval4[i]);
    }
    myval4.forEach(function(value,index) {
        console.log("In Foreach : " , value);
    });

    console.log(document.getElementById('myh1'));
</script>


</body>

</html>

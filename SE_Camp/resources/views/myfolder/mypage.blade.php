<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-image: url(https://us-fbcloud.net/picpost/data/264/264784-qgdt3x-1.n.jpg);
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

center {
    text-align: center;
}

.Header {
    background-color: #3498db;
    color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.table {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    margin-top: 20px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}

    </style>
</head>
<body>
    
<center>
    <?php $MultiNum;
    $length = 24; ?>
    <div class="Header" >
        <h1>ตารางสูตรคูณแม่ <?php echo $MultiNum; ?></h1>
    </div>
    <div class="table">
        <?php
        if(!empty($MultiNum)){
            for ($i=1; $i <= $length ; $i++) {  
                echo '<p>' ; 
                echo "$MultiNum x {$i} = " . $MultiNum * $i . '<br/>';
                echo '</p>';
            }
        }
        ?>
    </div>
    <form action="/my-page" method="post">
        @csrf
        <button type="submit">back</button>
    </form>

</center>

</body>
</html>

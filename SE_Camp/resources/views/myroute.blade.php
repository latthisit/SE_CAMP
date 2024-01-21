<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-image: url(https://marketplace.canva.com/EAELPh4TMm0/1/0/1600w/canva-แบ็คกราวน์เสมือนจริง-สีชมพูและสีม่วง-ไล่ระดับสี-สายรุ้ง-99v34p26kG0.jpg);
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

h1 {
    color: #3498db;
    width: 1200px;
}

h2 {
    margin-top: 20px;
}

form {
    margin-top: 20px;
}

input {
    padding: 10px;
    margin-right: 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 16px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #2980b9;
}

    </style>
</head>
<body>
    <center>
        <h1>Multiplivcation Table</h1>
        <h2> <i>Input number</i> </h2>
        <form action="/my-route" method="post">
            @csrf
            <input  type="number" name="MultiNum">
            <button  type="submit">Next</button>
        </form>
    </center>
</body>
</html>

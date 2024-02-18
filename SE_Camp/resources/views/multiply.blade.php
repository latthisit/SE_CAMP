<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #bef0c8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        label {
            font-size: 18px;
            margin-right: 10px;
        }

        #numberInput {
            padding: 8px;
            font-size: 16px;
        }

        #generateTable {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Multiplication</h2>

        <label for="numberInput">Enter a number :</label>
        <input type="number" id="numberInput" min="1" max="12">
        <button id="generateTable">Submit</button>

        <div id="resultContainer" class="result">
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#generateTable").click(function () {
                $("#resultContainer").empty();

                var number = $("#numberInput").val();

                if (number && !isNaN(number) && number > 0) {

                    var resultContent = "<p>";

                    for (var i = 1; i <= 12; i++) {
                        resultContent += number + " × " + i + " = " + (number * i) + "<br>";
                    }

                    resultContent += "</p>";

                    $("#resultContainer").html(resultContent);
                } else {
                    alert("Please enter a valid number between 1 and 12.");
                }
            });
        });
    </script>

</body>
</html>

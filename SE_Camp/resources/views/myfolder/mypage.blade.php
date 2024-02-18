<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=H1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mypage.css">
</head>
<body>
    <h1>Hey lover coffee</h1>
    <h1><?php echo $val_a . ' ' .$val_b; ?></h1>
    <h1>{{ $val_a }} {{ $val_b}}</h1>
    <form method ="post" action="/my-controller2">
        @csrf
        <input type="text" name="myinput">
        <button type = "submit"> submit </button>
    </form>
</body>
</html>

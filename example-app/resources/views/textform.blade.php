<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hrhrh
<form action="{{ url('/submit') }}" method="post">
    @csrf <!-- CSRF保護 -->
    名前：<input type="text" name="message">
    <input type="submit" value="送信">
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($contents as $content)
        <h2>{{ $content->content }}</h2>
        <p>{{ $content->id }}</p>
        <!-- 他のフィールドも同様に表示できます -->
    @endforeach
</body>
</html>
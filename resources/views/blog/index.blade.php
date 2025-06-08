<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($posts as $post)
      {{ $post->title }}  
    @empty
        <p>No posts have been selected</p>
    @endforelse
</body>
</html>
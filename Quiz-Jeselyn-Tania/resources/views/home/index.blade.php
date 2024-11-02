<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to EduFun</h1>
    <h2>Recent Articles</h2>
    <ul>
        @foreach($articles as $article)
            <li>
                <h3>{{ $article->title }}</h3>
                <p>{{ \Illuminate\Support\Str::limit($article->content, 100) }}</p>
                <a href="{{ route('category.show', $article->category_id) }}">Read more</a>
            </li>
        @endforeach
    </ul>
    
</body>
</html>
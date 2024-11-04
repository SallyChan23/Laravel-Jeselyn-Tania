<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EduFun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Category
        </a>
        <ul class="dropdown-menu">
          @foreach ($categories as $category)
        <li>
            <a class="dropdown-item" href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
        </li>
         @endforeach
        </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('writers') }}">Writers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About Us</a>
        </li>

        </ul>
      </div>
    </div>
  </nav>

  <img src="{{ asset('images/banner.jpg') }}" class="img-fluid" alt="">

  <div class="container" style="margin-top: 50px;">
   
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 d-flex flex-column">
                        @if($article->image)
                            <img src="{{ asset('images/' . $article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <p>&copy; {{ date('Y') }} EduFun. All Rights Reserved.</p>
    </div>
  </footer>
  
</body>
</html>
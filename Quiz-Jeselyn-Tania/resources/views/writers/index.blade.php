<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Writers</title>

    <style>
    .writer-card {
        height: 100%; 
    }
    .writer-card img {
        height: 200px; 
        object-fit: cover;
        width: 100%; 
    }
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
        height: auto;
    }
</style>

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
  
  <div class="container mt-5">
    <h1 class="text-center my-4">The Writers</h1> 
    <div class="row">
        @foreach($writers as $writer)
            <div class="col-md-4 mb-4">
                <div class="card writer-card">
                    @if($writer->profile_picture)
                        <img src="{{ asset('images/' . $writer->profile_picture) }}" class="card-img-top" alt="{{ $writer->name }}">
                    @endif
                    <div class="container mt-4 card-body">
                        <h5 class="card-title">{{ $writer->name }}</h5>
                        <p class="card-text">{{ Str::limit($writer->bio, 100) }}</p>
                        <a href="{{ route('writer.articles', $writer->id)}}" class="btn btn-primary">View Publish Article Site</a>
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
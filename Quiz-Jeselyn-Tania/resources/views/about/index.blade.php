<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>About Us</title>
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
    <h1 class="text-center">About Us</h1>
    <p class="text-center lead">Welcome to EduFun! We are passionate about providing educational resources and insightful articles to help you grow and learn.</p>

    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>At EduFun, our mission is to make knowledge accessible to everyone. We believe in the power of learning and strive to create a platform where knowledge is shared openly, supporting learners from all backgrounds.</p>
        </div>
        <div class="col-md-6">
            <h3>Our Vision</h3>
            <p>We aim to be a leading resource for educational content that inspires, informs, and empowers. Through carefully curated articles, expert insights, and a community of passionate writers, we hope to make learning an engaging experience.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Contact Us</h3>
            <p>If you have any questions, feedback, or would like to collaborate with us, feel free to reach out. You can contact us through our website or follow us on our social media channels.</p>
            <ul>
                <li>Email: contact@edufun.com</li>
                <li>Phone: +1 234 567 890</li>
            </ul>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <p>&copy; {{ date('Y') }} EduFun. All Rights Reserved.</p>
    </div>
</footer>
    
</body>
</html>
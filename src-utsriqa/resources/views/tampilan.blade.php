<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bb">

 
    <nav class="navbar naa navbar-expand-lg sticky-top " style="height: 70px;">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#">SEPATS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Akun</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shope</a>
              </li>
             
             
            </ul>
          </div>
        </div>
      </nav>
      <header class="judul">Data Produk Spatu</header>
    <div class="container mb-5">
        <div class="row">
          @foreach($products as $key => $product)
          <div class="col-md-4">
            <div class="card mb-3">
              @if($product->image)
              <img src="{{ $product->image->getUrl('thumb') }}">
              @endif
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ App\Models\Product::CATEGORY_SELECT[$product->category] }}</li>
                <li class="list-group-item">{{ $product->size }}</li>
                <li class="list-group-item">{{ $product->stock }}</li>
              </ul>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <footer class="footer mt-auto py-3 bg-white" style="height: 70px;" >
        <div class="container text-center">
            <span class="text-muted">© 2024 Ariqa Hinta Pukar.</span>
        </div>
    </footer>
      

        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
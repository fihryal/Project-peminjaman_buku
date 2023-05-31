<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5">
        <h1 class="text-center">Popular Book</h1>
        <a href="/tambahbuku" class="btn btn-success mt-3">Tabah +</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
             </div>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            @foreach ($data as $item)
            <div class="col">
                <div class="card">
                    <img src="./img/dish1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item -> nama_buku}}</h5>
                        <div class="mt-3" style="font: 16px/26px Georgia, Garamond, Serif; height: 200px; overflow: scroll; width: 250px;">
                            <p class="card-text">{{$item -> komentar}}</p>
                        </div><div style="font-size: 10px;"></div>
                    </div>
                    <div class="mb-3 pt-3 d-flex justify-content-around">
                        <h3>{{$item -> genre}}</h3>
                        
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <button class="btn btn-danger">Delete</button>
                        <a href="/tampilkandata/{{$item -> id}}" class="btn btn-warning">Edit</a>
                    </div>
                    
                </div>
            </div>
            @endforeach

        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
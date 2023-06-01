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
        <h1 class="text-center">Add Popular Book</h1>
       
        <div class="container mt-4">
            <div class="row justify-content-around">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
    
                            <form action="/insertdata" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-4"  >
                                  <label for="exampleInputEmail1">Gambar</label>
                                  <input type="file" name="foto" class="form-control">
                                </div>

                                <div class="form-group mt-4"  >
                                  <label for="exampleInputEmail1">Nama Buku</label>
                                  <input type="text" name="nama_buku" class="form-control" placeholder="Nama buku populer">
                                </div>

                                <div class="form-group mt-4" >
                                  <label for="exampleInputEmail1">komentar</label>
                                  <input type="text" name="komentar" class="form-control" placeholder="Komentar kamu">
                                </div>

                                <div class="form-group mt-4 mb-4">
                                  <label for="exampleInputEmail1">genre</label>
                                  <select class="form-select" name="genre" aria-label="Default select example">
                                    <option selected>Pilih Genre</option>
                                    <option value="1">Romantis</option>
                                    <option value="2">Fanfiction</option>
                                    <option value="3">Science Fiction</option>
                                    <option value="4">Fantasi</option>
                                    <option value="5">Thriller</option>
                                    <option value="6">Historical</option>
                                    <option value="7">Horor</option>
                                    <option value="8">Realistic Fiction</option>
                                  </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mata Kuliah</title>
</head>

<body>
    <!-- As a link -->
    {{-- <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav> --}}

    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-danger">
        <div class="container-fluid">
            <span class="navbar-brand ms-1 h1">Mata Kuliah Teknik Informatika</span>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            @foreach ($matkul as $mk)
                <div class="col-md-6">
                    <div class="card border-danger mb-3 mt-3" style="max-width: 18rem;">
                        <div class="card-body text-dark">
                            <h5 class="card-title">{{$mk -> nama_mk}}</h5>
                            <p class="card-text">{{$mk -> kode_mk}}</p>
                            <p class="card-text">{{$mk -> nama_dosen}}</p>
                            <p class="card-text">{{$mk -> sks}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $matkul -> links() }}
    </div>
</body>

</html>

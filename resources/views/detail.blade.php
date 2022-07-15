<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
    <title>Dashboard</title>
  </head>

  <body class="bg-light">

    <nav class="navbar navbar-expand-lg px-5">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Final Project</a>
            <a href="" class="btn text-white">
                admin
            </a>
        </div>
    </nav>

        <div class="container mb-5">
            <main>
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="{{ asset('storage/'. $member->gambar) }}" alt="" width="150" height="150" style="object-fit: cover">
                    <h2>{{ $member->nama }}</h2>
                    <p class="lead">{{ $member->deskripsi }}</p>
                </div>

                <div class="row g-5">
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Biodata</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <label for="nama-awal" class="form-label">Nama Awal</label>
                                    <input type="text" class="form-control" id="nama-awal" placeholder="" value="{{ $member->nama }}" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"  value="{{ $member->email }}" readonly>
                                </div>

                                <div class="col-6">
                                    <label for="tempat-tanggal-lahir" class="form-label">Tempat Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tempat-tanggal-lahir"  value="{{ $member->ttl }}" readonly>
                                </div>

                                <div class="col-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" value="{{ $member->alamat }}" readonly>
                                </div>

                            </div>
                            <hr class="my-4">
                            <a href="/" class="w-100 btn btn-primary btn-lg" type="submit">kembali</a>
                        </form>
                    </div>
                </div>
            </main>
        </div>
  </body>
</html>

@extends('dashboard.layout.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
      <p>{{ session('success') }}</p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <main>
    
    <div class="row g-5 pb-3">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Biodata</h4>
        <form method="post" action="/admin/detail/{{ $member->id }}" enctype="multipart/form-data" >
          
              @method('put')
              @csrf

                <img class="d-block mb-4 prev" src="{{ asset('storage/'. $member->gambar)  }}" alt="" width="150" height="150" style="object-fit: cover">
                <input type="file" name="gambar" id="" class="mb-5 input-img" onchange="preview()">
                <input type="hidden" name="oldImg" value="{{ $member->gambar }}">

                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="nama-awal" class="form-label">Nama Awal</label>
                        <input type="text" name="nama" class="form-control" id="nama-awal" placeholder="" value="{{ $member->nama }}">
                    </div>

                    <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"  value="{{ $member->email }}">
                    </div>

                    <div class="col-6">
                        <label for="tempat-tanggal-lahir" class="form-label">Tempat Tanggal Lahir</label>
                        <input type="text" name="ttl" class="form-control" id="tempat-tanggal-lahir"  value="{{ $member->ttl }}">
                    </div>

                    <div class="col-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $member->alamat }}">
                    </div>

                    <div class="col-12">
                      <label for="deskripsi">deskripsi</label>
                      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="8" >{{ $member->deskripsi }}</textarea>
                    </div>
                </div>
                <hr class="my-4">
                <button type="submit" class="w-100 btn btn-primary btn-lg">update</button>
            </form>
        </div>
    </div>
</main>

<script>

  const preview = () => {

    const imgInput = document.querySelector('.input-img')
    const prev = document.querySelector('.prev')

    const oFR = new FileReader()
    oFR.readAsDataURL(imgInput.files[0])

    oFR.onload = function (e) { prev.src = e.target.result }

  }

</script>
    
@endsection
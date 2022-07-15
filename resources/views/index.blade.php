<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Kelompok berapa ?</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg px-5 pt-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Final Project</a>

            @guest
                <a href="/login" class="btn text-white">
                    admin
                </a>
            @else
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn text-white">logout</button>
                </form>
            @endguest

        </div>
    </nav>

    <div class="container wrapper">

        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <h1 class="heading" >TEAM 5</h1>
            </div>
            <div class="col-6">

                <div class="row card-container d-flex ps-5 pt-3">

                    @foreach ($members as $member)
                        <div class="col-6 mb-4">
                            <a href="/member/{{ $member->id }}">
                                <div class="custom-card d-flex">
                                    <img src="{{ asset('storage/'. $member->gambar) }}" alt="" srcset="">
                                    <p class="m-auto text">detail</p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>


    </div>
    
</body>
</html>
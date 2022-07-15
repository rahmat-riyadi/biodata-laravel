<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="/login" >

            @csrf

            <h1 class="h3 mb-3 fw-normal">login</h1>

            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInput" >
                <label for="floatingInput">username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword">
                <label for="floatingPassword">password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
        </form>
    </main>
  </body>
</html>

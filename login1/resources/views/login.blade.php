<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login Usuario</title>
</head>
<body>
    <div class="container fluid">
        <div class="row">
            <div class="col my-3">
                <h2 class="text-center fst-italic">Login Usuario</h2>
                <div class="d-flex justify-content-center align-items-center my-3">
                    <div class="card  text-center  p-3 mb-2 bg-dark text-white " style="width: 22rem;">
                        <div class="card-body">
                            <form action="{{ route('logear') }}" method="post">
                                @csrf
                                <label class="fst-italic" for="">Usuario</label>
                                <input type="text" name="name" class="form-control">
                                <label class="fst-italic" for="">Password</label>
                                <input type="password" name="password" class="form-control">
                                <button class="btn btn-primary mt-3 fst-italic">Entrar</button>
                                <a href="{{route('registro')}}" class="btn btn-success mt-3 fst-italic">
                                    Registrar
                                </a>
                        </form>
                    </div>
                  </div>
                </div>
                
               
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
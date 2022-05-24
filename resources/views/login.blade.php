<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Fortel : Forum Telkom</title>
    </head>
    <body>

        <h1 class="text-center mb-4" style="margin-top: 30vh">Login Page</h1>
        <div class="container">
            <div class="row justify-content-center">
                <form action="/login" method="post" class="col-md-4 text-center">
                    @csrf
                    <div class="mb-1">
                        <input type="text" class="form-control rounded-pill shadow-sm @error('username') is-invalid @enderror" name="username" placeholder="Username">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="mb-1">
                        <input type="password" class="form-control rounded-pill shadow-sm @error('password') is-invalid @enderror" name="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <small class="text-center d-block">Dont have account? <a href="/user/create">Registered here</a> </small>
                    <button type="submit" class="btn btn-dark mt-3">Login</button>
                </form>
            </div>
        </div>
        @if (session()->has('errorLogin'))
            <div class="alert alert-danger col-md-4 mx-auto mt-4" role="alert">
                {{ session('errorLogin') }}
            </div>
        @endif
        @if (session()->has('successRegister'))
            <div class="alert alert-success col-md-4 mx-auto mt-4" role="alert">
                {{ session('successRegister') }}
            </div>
        @endif


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
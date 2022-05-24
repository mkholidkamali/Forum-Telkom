<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Fortel : Forum Telkom</title>
    </head>
    <body>

        <h1 class="text-center mb-3 mt-5" style="margin-top: ">Register</h1>
        <div class="card container col-lg-4">
            <div class="card-body row">
                <form action="/user" method="post" class="col-md-12">
                    @csrf
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control shadow-sm @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-sm @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="re_password" class="form-label">Re-enter Password</label>
                        <input type="password" class="form-control shadow-sm @error('re_password') is-invalid @enderror" id="re_password" name="re_password">
                        @error('re-password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <small class="text-center d-block mt-2">Already have account? <a href="/user">Login here</a> </small>
                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-dark">Register</button>
                    </div>
                </form>
            </div>
        </div>
        @if(session()->has('errorRegister'))
            <div class="alert alert-danger col-md-4 mx-auto mt-4" role="alert">
                {{ session('errorRegister') }}
            </div>
        @endif

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .header {
            background-color: rgba(53, 111, 226, 0.485);
        }
    </style>
    @notifyCss
</head>

<body>
    <div class=" container">
        <div class="card">
            <div class=" card-header header">
                <h4 class=" text-center text-white">Register</h4>
            </div>
            <div class=" card-body">
                <form action="{{ route('r_system') }}" method="post">
                    @csrf
                    <div class=" form-floating mb-3">
                        <input type="text" name="nama" class=" form-control" id="Nama"
                            value="{{ old('nama') }}" placeholder="Nama">
                        <label for="Nama">Nama</label>
                    </div>
                    <div class=" form-floating mb-3">
                        <input type="text" name="username" class=" form-control" id="Username"
                            placeholder="Username" value="{{ old('username') }}">
                        <label for="Username">Username</label>
                    </div>
                    <div class=" form-floating mb-3">
                        <input type="email" name="email" class=" form-control" id="email" placeholder="email"
                            value="{{ old('email') }}">
                        <label for="email">examples@gmail.com</label>
                    </div>
                    <div class=" form-floating mb-3">
                        <input type="password" name="password" class=" form-control" id="Password"
                            placeholder="Password">
                        <label for="Password">Password</label>
                    </div>
                    <a href="{{ route('login') }}">Kembali</a>
                    <hr>
                    <button type="submit" class="w-100 btn btn-lg btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    @notifyJs
    <x:notify-messages />
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gard</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="bg-primary" >
    <div class="bg-white container p-5 position-absolute top-50 start-50
        translate-middle rounded-4  shadow" style="max-width: 400px" background-color="green">
            <img src="" alt="Gard"

            height="40" class="d-block mx-auto mb-4">

            <form action="" class="row g-3" method="POST">
                @csrf
                <div>
                    <label for="email" class="form-label fs-5">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg">
                </div>
                <div>
                    <label for="password" class="form-label fs-5">Senha</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
            </form>
        </div>
</body>
</html>

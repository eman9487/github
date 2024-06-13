<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-primary">
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Login</h1>
                        @if (session ('success'))
                        <div class="alert alert-success">
                            <b>Success!</b> {{ session ('success')}}
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">

                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="text-end mt-2">
                                <a href="{{ route('password.request') }}">Forgot Password</a>
                            </div>
                            <button class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
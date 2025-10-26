<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Login-styles.css">
    <title>Login - CDLSHS</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center mx-3" style="min-height: 100vh;">
        <div class="form-box active" id="login-form">
            <form action="">
                <div class="h2 text-center mb-4">Login</div>
                <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                <button class="btn button mb-3 " type="submit" name="login">Login</button>
                <p class="mt-3">Don't have an account? <a href="#" onclick="toggleForms('register-form')">Register</a></p>
            </form>

        </div>

        <div class="form-box" id="register-form">
            <form action="">
                <div class="h2 text-center mb-4">Register</div>
                <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                <button class="btn button mb-3 " type="submit" name="register">Register</button>
                <p class="mt-3">Already have an account? <a href="#" onclick="toggleForms('login-form')">Login</a></p>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="logreg-script.js"></script>
</body>
</html>
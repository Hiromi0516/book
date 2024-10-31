<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  

</head>
<body class="bg-light">


<div style="height:100vh">
    <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center">REGISTER</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register.php" method="POST">
                    <div class="mb-3">
                        <label for="first-name">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="form-control">
                    </div>
                    <div class="m-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name"class="text form-control" id="last_name"required>

                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label" fw-bold>Username</label>
                        <input type="text" name="username" class="form-control"fw-bold maxlength="15" required>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" name="password" id="password" class="form-control"minlength=8 aria-describedby="password-info" required>
                        <div class="form-text" id="password-info">
                            Password must be at least 8charactors long
                        </div>
                    </div>
                     <button type="submit" class="btn btn-success" w-100>Register</button>
                </form>
                <p class="text-center mt-3"small>Register already? <a href="../views">Log in.</a> </p>
            </div>
        </div>
    </div>
</div>


    
</body>
</html>
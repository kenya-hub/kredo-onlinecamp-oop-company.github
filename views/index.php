<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body class="bg-light">
    <div style="height: 100vh">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center">LOGIN</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <input type="text" name="username" id="username" placeholder="USERNAME" class="form-control mb-2">
                        <input type="password" name="password" id="password" placeholder="PASSWORD" class="form-control mb-5">
                        <button type="submit" class="btn btn-primary w-100" >Log in</button>
                    </form>

                    <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
                    
                </div>
            </div>
        </div>
    
    </div>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
    <title>STYLISH BOOTSTRAP LOGIN </title>
</head>
<body>  
     
    <div class="login-container d-flex align-items-center justify-content-center ">
        <form action="connect.php"method="POST" class="login-form text-center">
            <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control rounded-pill form-control-lg" id="" placeholder="Username">
            </div>
            <div class="form-group ">
                <input type="password" class="form-control rounded-pill form-control-lg" name="password" id="" placeholder="Password">
            </div>
            <div class="forgot-link d-flex justify-content-between">
                <div class="form-ckeck">
                    <input type="checkbox" name="" class="form-check-input " id="remember">
                    <label for="remember">Remember Password</label>
                </div>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class=" btn btn-success btn-block rounded-pill">submit</button>
            <p class="mt-3 font-weight-light">Don't have an account?<a href="register.php">Register here!!</a></p>
        </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
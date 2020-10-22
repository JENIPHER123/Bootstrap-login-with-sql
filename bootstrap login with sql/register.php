<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>STYLISH BOOTSTRAP LOGIN</title>
</head> 
<body>
   <div class="login-container d-flex align-items-center justify-content-center">
       <form action="connect2.php" method="POST" class="login-form text-center">
           <h1 class=" mb-5 font-weight-light">REGISTER</h1>

           <div class=" form-group">
               <input type="text" class="form-control rounded-pill form-control-lg" name="user"placeholder="Username">
           </div>
           <div class="form-group">
               <input type="text" class="form-control rounded-pill form-control-lg" name="email" placeholder="Email">
           </div>
           <div class="form-group">
               <input type="password"class="form-control rounded-pill form-control-lg"name="pass1" placeholder="Password">
           </div>
           <div class="form-group">
               <input type="password" class="form-control rounded-pill form-control-lg"name="pass2" placeholder="Confirm Password">
           </div>

        <div class="forgot-link">
         <div class="fom-check">
             <input type="checkbox" id="remember" class="">
             <label for="remember">Remember Password</label>
         </div>
        </div>
         <button class="mt-2 btn btn-success form-control form-control-lg rounded-pill">Submit</button>

         <p class="mt-5">Already have an account? <a href="index.php">Login Here!!</a></p>
       </form>
   </div>
    </div>
</body>
</html>
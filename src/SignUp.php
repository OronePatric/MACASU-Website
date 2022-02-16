<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../scss/custom.scss">
   <title>CommunitySite</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid form-wrapper">
      
      <img src="Images/team.jpg" alt="sign up_Image">

      <div class="image-text mt-1">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="signup-form">
              <form action="validate.php" method="post" class="p-4 bg-transparent">
                <div class="row">
                  <h3 style="text-align:center;" class="text-white">Create Your Account</h3>
                  <div class="mb-3 col-md-6">
                    <label class="text-white" for="fname">First-Name</label>
                    <input type="text" name="fname" class ="form-control" placeholder="First-name" required>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="text-white" for="lname">Last-Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last-name" required>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label  class="text-white" for="Email">Email</label>
                    <input type="text" name="Email" class="form-control" placeholder="xyz@gmail.com" required>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="text-white" for="password">Password</label>
                    <input type="password" name="Email" class="form-control" placeholder="password" required>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="text-white" for="passwordConfirmation">Confirm password</label>
                    <input type="password" name="passwordConfirmation" class="form-control" placeholder="confirm password" required>
                  </div>

                  <div class="mb-1 col-md-12">
                    <button class="btn btn-primary">SignUp </button>
                  </div>
                </div>
                <p class="text-center text-white">If you have an account, Please <a  class="link-info" href="#LogIn.php">LogIn</a></p>
              </form>
              
            </div>
          </div>
        </div>    
      </div>
    
      <!--       
      <form action="validate.php" method="post">

      </form> -->
    </div>

   
</body>
</html>
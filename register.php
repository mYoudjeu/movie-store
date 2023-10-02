<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"  href="style.css">

    <meta charset="utf-4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
     <div style="background-image: url(images/project/screenoo.jpg) ;">
     

    <div class="container">

        <div class="card o-hidden border-0 ">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-2 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-5">Create an Account!</h1>
                            </div>
                            <form action="include/register.php" method="post" class="user">
                               <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="fname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lname" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="mail" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="PhoneNumber" name="number" class="form-control form-control-user" id="exampleInputEmail"placeholder="PhoneNumber">
                                </div>
                               <div class="form-group">
                                    Date of birth<input type="date" name="dateofbirth" class="form-control form-control-user" id="exampleInputEmail"placeholder="Date of Birth">
                                </div>
                                     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="cpassword" 
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                   
                                </div>
                                </div>
                                <input type="submit" name="submit"  class="btn btn-primary btn-user btn-block">
                                    
                                </a>
                                
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>



    <!-- Bootstrap core JavaScript-->
    
    <!-- Custom scripts for all pages-->
 

</body>

</html>
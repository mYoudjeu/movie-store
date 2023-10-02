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
                                <h1 class="h4 text-gray-900 mb-5">Enter the payment informations!</h1>
                            </div>
                            <form action="include/payment.php" method="post" class="user">
                               <div class="form-group">
                                    Payment Type<input type="text" name="type" class="form-control form-control-user" id="exampleInputtype"
                                        placeholder="Enter the payment type">
                                </div>
                                <div class="form-group">
                                    Payment Amount<input type="number" name="amount" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Enter Payment Amount">
                                </div>
                                 <div class="form-group">
                                    Payment Date<input type="date" name="dateofpayment" class="form-control form-control-user" id="exampleInputEmail"placeholder="date">
                                </div>
                                <div class="form-group">
                                    Payment Time<input type="time" name="time" class="form-control form-control-user" id="exampleInputEmail"placeholder="Payment time">
                                
                                </div>
                                <input type="submit" name="submit"  class="btn btn-primary btn-user btn-block">
                                    
                                </a>
                                
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="register.php">have you registered already?</a>
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SingUp</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
           
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('/public/css/styles.css'); ?> " rel="stylesheet" />
        <link href="<?php echo base_url('/public/css/custom.css'); ?> " rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url('/') ?>">Customer Board</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0" style="font-size:15px ;">
                        <li class="nav-item"><a class="nav-link " href="<?php echo base_url('/User/login') ?>">Login</a></li>
                        <!-- <li class="nav-item"><a class="nav-link active" href="#">SingUp</a></li> -->
                    </ul>
                    <!-- <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul> -->
                </div>
            </div>
        </nav>
        <div class="container mt-5 s-log"  >
<div class="row p-3 justify-content-center">
    <div class="col-md-6 p-3" style=" border: 1px solid rgb(215, 215, 215); z-index: 700; box-shadow: 2px 2px 16px -1px rgba(174,55,76,0.7);
-webkit-box-shadow: 2px 2px 16px -1px rgba(174,55,76,0.7);
-moz-box-shadow: 2px 2px 16px -1px rgba(174,55,76,0.7); ">
    <h3 class="text-info">Create New Account</h3> <hr>
    <form action="<?php echo base_url('/User/insert');  ?>" method="POST">
    
        <div class="form-group mt-3 ">
            <label for="" >Name:</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter Your name">
        </div>
    
    
        <div class="form-group mt-3 ">
            <label for="" >Email:</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter Your email">
        </div>
    
    
        <div class="form-group mt-3 ">
            <label for="" >phone:</label>
            <input type="text" name="phone" class="form-control" required placeholder="+923012345678">
        </div>
    
    
        <div class="form-group mt-3 ">
            <label for="" >Password:</label> 
            <input type="text" name="password" class="form-control" required placeholder="Enter Your Password">
        </div>
    
    
        <div class="form-group mt-3 ">
            <label for="" >Confirm Password:</label>
            <input type="text" name="cpassword" class="form-control" required placeholder="Enter Your confirm Password">
        </div>
    
    
     <button type="submit" class="btn btn-primary m-3 w-25">SingUp</button>
     <h6><a href="login" class="">Already have account</a></h6>
    </div>
    </form>
    </div>
    
  

</div>
        </div>
     
     
        
     

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('/public/js/scripts.js') ?>"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
          <!-- Sweet Alert -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>

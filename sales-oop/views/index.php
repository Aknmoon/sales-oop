<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="w-25 my-auto mx-auto px-0">
                <div class="header">
                    <h1 class="title text-center text-primary">LOGIN <i class="fas fa-sign-in-alt"></i></h1>
                </div>
        
                <div class="body">
                    <form action="../actions/login.php" method="post">
                        <label for="username" class="small">Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="USERNAME">

                        <label for="password" class="small">Password</label>
                        <input type="password" name="password" id="password" class="form-control mb-5" placeholder="PASSWORD">

                        <button type="submit" name="btn_login" class="btn btn-primary w-100">Login</button>

                    

                    <div class="text-center mt-3">
                        <div class="col-md-8 offset-md-2 text-center">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#registration">Create an Account</button>
                            <!-- data-bs-toggle="modal" data-bs-target="#registration -->
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- REGISTRATION MODAL -->
    <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <!-- <button type="button" class="close ms-auto" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> -->
                <!--Put codes here-->


                
                <div class="w-50 my-auto mx-auto">
                    <div class="header border-0 py-lg-5">
                        <h1 class="text-center text-danger "><i class="fas fa-user-plus"></i> Registration</h1>
                    </div>
                    <div class="body">
                        <form action="../actions/register.php" method="post">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control">
                                </div>

                                <div class="col-6">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="mb-5">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-danger w-100 mb-5">Register</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    

    
</body>
</html>
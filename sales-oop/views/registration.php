<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title> 
</head>
<body>

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
    
</body>
</html>
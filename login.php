<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="css/login.css">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="loginCode.php">
            <center><img class="mb-4" src="images/crc-logo.png" alt="" width="100" height="100"></center>

            <div class="card">
                <div class="card-body">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" id="username">
                        <label for="floatingInput"><span class="glyphicon glyphicon-name"></span><i class="fa fa-user"></i> Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password">
                        <label for="floatingPassword"><span class="glyphicon glyphicon-name"></span><i class="fa fa-lock"></i> Password</label>
                    </div>

                    <div class="text-start my-3">
                        <p class="mt-3 mb-3 text-muted"><a href="forgot_password">Forgot Password?</a></p>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit" name="loginBtn" id="loginBtn">Log in</button>
                </div>
            </div>
        </form>
    </main>
</body>

<script src="admin/js/sweetalert.min.js"></script>
        <?php
            if (isset($_SESSION['status'])){
        ?>
            <script>
                swal({
                title: "<?php echo $_SESSION['status']; ?>",
                text: "<?php echo $_SESSION['status_text']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
                button: "<?php echo $_SESSION['status_btn']; ?>",
            });
            </script>
            
            <?php
            unset($_SESSION['status']);
            }
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

</html>
<?php
include('authentication.php');
include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/side_nav.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><i class="fas fa-user-circle"></i> My Account</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">My Account</li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card shadow" style="width: 18rem;">
                    <?php
                                include('includes/config.php');
                                $username = $_SESSION['auth_user']['username'];
                                $query = "SELECT * FROM `clients_acc` WHERE `cUsername` = '$username' AND `admin_status` = 1";
                                $query_run = mysqli_query($conn, $query);
                                $row = mysqli_num_rows($query_run);
                                foreach ($query_run as $row) {
                            ?>
                        <!-- <img src="images/crc-logo.png" class="mt-2" height="200" width="200"> -->
                        <center><?php echo '<img src="images/uploads/'.$row['cPicture'].' " class="img-thumbnail" height="200" width="200";>'?></center>
                        <div class="card-body">
                            <form method="POST" action="clientDataCode.php" enctype="multipart/form-data">
                                <h5 class="card-title text-center"><?php echo $row['cUsername'];?></h5>
                                <hr>
                                <small class="form-label" id="picture">Upload Profile Picture</small>
                                <input for="InputPicture" class="form-control form-control-sm" type="file" name="image" id="image">
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="card shadow">
                        <div class="card-header">
                            User Profile
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">First Name</label>
                                            <input for="floatingInput" class="form-control" type="text" name="FirstName" value="<?php echo $row['cFirstname'];?>">
                                            <input type="hidden" name="IDNumber" value="<?php echo $row['id'];?>">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Middle Name</label>
                                            <input for="floatingInput" class="form-control" type="text" name="MiddleName" value="<?php echo $row['cMiddlename'];?>">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="InputLname">Last Name</label>
                                            <input for="InputLname" class="form-control" type="text" name="LastName" value="<?php echo $row['cLastname'];?>">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Address</label>
                                            <input for="floatingInput" type="text" class="form-control" name="address" id="address" value="<?php echo $row['cAddress'];?>">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Username</label>
                                            <input  class="form-control" type="text" name="username" value="<?php echo $row['cUsername'];?>" readonly>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Date of Birth</label>
                                            <input for="floatingInput" class="form-control" type="date" name="dob" id="dob" value="<?php echo $row['cDOB'];?>">
                                            <div class="" id="date-label">
                                                        
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="InputLname">Contact Number</label>
                                            <input for="InputLname" class="form-control" type="text" name="contactNum" value="<?php echo $row['cContactNumber'];?>">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Email address</label>
                                            <input type="email" class="form-control" for="floatingInput" aria-describedby="emailHelp" name="email" id="email" value="<?php echo $row['cEmail'];?>">
                                            <!-- <div id="emailHelp" class="form-label">We'll never share your email with anyone else.</div> -->
                                        <!-- </div>-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="InputPassword">Password</label>
                                            <input for="InputPassword" class="form-control" type="password" name="password" id="password" value="<?php echo $row['cPassword'];?>" readonly>
                                            <div class="" id="password-label">
                                            
                                            </div>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-6 mt-5">
                                        <p><a class="link-opacity-100 form-text" href="#">Forgot Password?</a></p>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mt-4" name="updateBtn" id="updateBtn"><i class="fas fa-pen-to-square"></i> Update Profile</button>
                            </form>
                            <?php
                                }
                                
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('includes/footer.php');
?>

<script src="js/sweetalert.min.js"></script>
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
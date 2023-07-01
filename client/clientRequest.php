<?php
include('authentication.php');
include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/side_nav.php');
?>

<main>
<div class="container-fluid px-4">
        <h1 class="mt-4"><i class="fas fa-file-lines"></i> Request Form</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Request Form</li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card shadow">
                        <div class="card-header">
                            Request Form
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">First Name</label>
                                            <input for="floatingInput" class="form-control" type="text" name="FirstName">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Middle Name</label>
                                            <input for="floatingInput" class="form-control" type="text" name="MiddleName">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="InputLname">Last Name</label>
                                            <input for="InputLname" class="form-control" type="text" name="LastName">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Age</label>
                                            <input  class="form-control" type="text" name="age">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3 form-group">
                                        <label>Sex </label>
                                        <input class="form-check-input" type="radio" name="sex" id="sex" value="Male"/> Male
                                        <input class="form-check-input" type="radio" name="sex" id="sex" value="Female"/> Female
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Email address</label>
                                            <input type="email" class="form-control" for="floatingInput" aria-describedby="emailHelp" name="email" id="email">
                                            <!-- <div id="emailHelp" class="form-label">We'll never share your email with anyone else.</div> -->
                                        <!-- </div>-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <label class="form-label">Valid ID</label>
                                        <select class="form-select form-select" name="ids" id="ids" required>
                                            <option value="" selected>Select ID type</option>
                                            <option value="National ID">National ID</option>
                                            <option value="Driver's Licensed">Driver's Licensed</option>
                                            <option value="PhilHealth">PhilHealth</option>
                                            <option value="UMID">UMID</option>
                                            <option value="Passport">Passport</option>
                                            <option value="PRC">PRC</option>
                                            <option value="Voter's ID">Voter's ID</option>
                                            <option value="SSS/GSIS ID">SSS/GSIS ID</option>
                                            <option value="Postal ID">Postal ID</option>
                                            <option value="School ID">School ID</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="formFile" class="form-label">Upload ID</label>
                                        <input class="form-control" type="file" id="formFile" name="idCard" id="idCard">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <label class="form-label">Type of Document</label>
                                        <select class="form-select form-select" name="tod" id="tod" required>
                                            <option value="" selected>Select Type of Document</option>
                                            <option value="Live Birth Certificate">Live Birth Certificate</option>
                                            <option value="Driver's Licensed">Driver's Licensed</option>
                                            <option value="PhilHealth">PhilHealth</option>
                                            <option value="UMID">UMID</option>
                                            <option value="Passport">Passport</option>
                                            <option value="PRC">PRC</option>
                                            <option value="Voter's ID">Voter's ID</option>
                                            <option value="SSS/GSIS ID">SSS/GSIS ID</option>
                                            <option value="Postal ID">Postal ID</option>
                                            <option value="School ID">School ID</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3 form-group">
                                        <label>Register Late? </label>
                                        <input class="form-check-input" type="radio" name="registerLate" id="registerLate" value="Yes"/> Yes
                                        <input class="form-check-input" type="radio" name="registerLate" id="registerLate" value="No"/> No
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mt-5" name="updateBtn" id="updateBtn"><i class="fas fa-pen-to-square"></i> Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                <div class="card shadow">
                        <div class="card-header">
                            Request Form
                        </div>
                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">First Name</label>
                                            <input for="floatingInput" class="form-control" type="text" name="FirstName">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Middle Name</label>
                                            <input for="floatingInput" class="form-control" type="text" name="MiddleName">
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="InputLname">Last Name</label>
                                            <input for="InputLname" class="form-control" type="text" name="LastName">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4 mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Age</label>
                                            <input  class="form-control" type="text" name="age">
                                        <!-- </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3 form-group">
                                        <label>Sex </label>
                                        <input class="form-check-input" type="radio" name="sex" id="sex" value="Male"/> Male
                                        <input class="form-check-input" type="radio" name="sex" id="sex" value="Female"/> Female
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <!-- <div class="form-floating mt-3"> -->
                                            <label class="form-label" id="floatingInput">Email address</label>
                                            <input type="email" class="form-control" for="floatingInput" aria-describedby="emailHelp" name="email" id="email">
                                            <!-- <div id="emailHelp" class="form-label">We'll never share your email with anyone else.</div> -->
                                        <!-- </div>-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <label class="form-label">Valid ID</label>
                                        <select class="form-select form-select" name="ids" id="ids" required>
                                            <option value="" selected>Select ID type</option>
                                            <option value="National ID">National ID</option>
                                            <option value="Driver's Licensed">Driver's Licensed</option>
                                            <option value="PhilHealth">PhilHealth</option>
                                            <option value="UMID">UMID</option>
                                            <option value="Passport">Passport</option>
                                            <option value="PRC">PRC</option>
                                            <option value="Voter's ID">Voter's ID</option>
                                            <option value="SSS/GSIS ID">SSS/GSIS ID</option>
                                            <option value="Postal ID">Postal ID</option>
                                            <option value="School ID">School ID</option>
                                        </select>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="formFile" class="form-label">Upload ID</label>
                                        <input class="form-control" type="file" id="formFile" name="idCard" id="idCard">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3">
                                        <label class="form-label">Type of Document</label>
                                        <select class="form-select form-select" name="tod" id="tod" required>
                                            <option value="" selected>Select Type of Document</option>
                                            <option value="Live Birth Certificate">Live Birth Certificate</option>
                                            <option value="Driver's Licensed">Driver's Licensed</option>
                                            <option value="PhilHealth">PhilHealth</option>
                                            <option value="UMID">UMID</option>
                                            <option value="Passport">Passport</option>
                                            <option value="PRC">PRC</option>
                                            <option value="Voter's ID">Voter's ID</option>
                                            <option value="SSS/GSIS ID">SSS/GSIS ID</option>
                                            <option value="Postal ID">Postal ID</option>
                                            <option value="School ID">School ID</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col mt-3 form-group">
                                        <label>Register Late? </label>
                                        <input class="form-check-input" type="radio" name="registerLate" id="registerLate" value="Yes"/> Yes
                                        <input class="form-check-input" type="radio" name="registerLate" id="registerLate" value="No"/> No
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success mt-5" name="updateBtn" id="updateBtn"><i class="fas fa-pen-to-square"></i> Update Profile</button>
                            </form>
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
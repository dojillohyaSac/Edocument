<?php
include('authentication.php');
include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/side_nav.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><i class="fas fa-tasks"></i> Requests</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Requests</li>
        </ol>
        <div class="card mb-4 shadow">
            <div class="card-body">
                
                <table class="table table-bordered table-striped table-hovered table-light" id="table">
                    <thead class="table table-dark">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type of Document</th>
                            <th scope="col">Registration Status</th>
                            <th scope="col">Date of Request</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $sql = "SELECT * FROM `requests` WHERE `reg_status` = 0 AND `status` = 0 LIMIT 1";
                            $query_run = $conn->query($sql) or die($conn->error);
                            while($row=$query_run->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <td>  <?= $row['DocuCode']?></td>
                            <td> <?= $row['cUsername']?></td>
                            <td> <?= $row['rLastname'].", ".$row['rFirstname']?></td>
                            <td> <?= $row['rEmail']?></td>
                            <td> <?= $row['tod']?></td>
                            <td> <?= $row['reg_status']?></td>
                            <td> <?= $row['dor']?></td>
                            <td><button type="button" class="btn btn-primary">Hello</button></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include('includes/footer.php');
?>
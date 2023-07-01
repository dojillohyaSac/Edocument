<?php
// include('authentication.php');
include('includes/config.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/side_nav.php');
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        All Documents
                        <?php

                          include('includes/config.php');

                          $query_number = "SELECT `id` FROM `admin_request` WHERE `Status` = 1 ORDER BY `id`";
                          $query_number_run = mysqli_query($conn, $query_number);

                          if ($row = mysqli_num_rows($query_number_run)) {
                            echo '<h1 class="mb-0">'.$row.'</h1>';
                          }else {
                            echo '<h1 class="mb-0"> No Data Found </h1>';
                          }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        Pending Documents
                        <?php

                          include('includes/config.php');

                          $query_number = "SELECT `id` FROM `admin_request` WHERE `Status` = 1 ORDER BY `id`";
                          $query_number_run = mysqli_query($conn, $query_number);

                          if ($row = mysqli_num_rows($query_number_run)) {
                            echo '<h1 class="mb-0">'.$row.'</h1>';
                          }else {
                            echo '<h1 class="mb-0"> No Data Found </h1>';
                          }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        Receive Documents
                        <?php

                          include('includes/config.php');

                          $query_number = "SELECT `id` FROM `admin_request` WHERE `Status` = 1 ORDER BY `id`";
                          $query_number_run = mysqli_query($conn, $query_number);

                          if ($row = mysqli_num_rows($query_number_run)) {
                            echo '<h1 class="mb-0">'.$row.'</h1>';
                          }else {
                            echo '<h1 class="mb-0"> No Data Found </h1>';
                          }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        Ended Documents
                        <?php

                          include('includes/config.php');

                          $query_number = "SELECT `id` FROM `admin_request` WHERE `Status` = 1 ORDER BY `id`";
                          $query_number_run = mysqli_query($conn, $query_number);

                          if ($row = mysqli_num_rows($query_number_run)) {
                            echo '<h1 class="mb-0">'.$row.'</h1>';
                          }else {
                            echo '<h1 class="mb-0"> No Data Found </h1>';
                          }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div> -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include('includes/footer.php');
?>

<script src="js/sweetalert2.all.min.js"></script>
<?php
    if (isset($_SESSION['logged'])) {
?>
    <script type="text/javascript">
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        });

        Toast.fire({
        background:'#53a653',
        color: '#fff',
        icon: '<?php echo $_SESSION['logged_icon'];?>',
        title: '<?php echo $_SESSION['logged'];?>'
        });
    </script>
<?php
  unset($_SESSION['logged']);
}
?>
<?php
include('includes/config.php');

session_start();

if (isset($_POST['updateBtn'])) {

    $id = filter_input(INPUT_POST,'IDNumber');
    $firstname = filter_input(INPUT_POST,'FirstName');
    $lastname = filter_input(INPUT_POST,'LastName');
    $middlename = filter_input(INPUT_POST, 'MiddleName');
    $address = filter_input(INPUT_POST,'address');
    $username = filter_input(INPUT_POST,'username');
    $dob = filter_input(INPUT_POST, 'dob');
    $contactNum = filter_input(INPUT_POST,'contactNum');
    $email = filter_input(INPUT_POST,'email');
    $image = $_FILES["image"]['name'];

    $select_query = ("SELECT * FROM `clients_acc` WHERE `id` = '$id'");
    $select_query_run = mysqli_query($conn, $select_query);
    foreach ($select_query_run as $select_row) {
        if ($image == null) {
            $image_data = $select_row['cPicture'];
            
        }else {
            if ($image_path = "images/uploads/".$select_row['cPicture']) {
            unlink($image_path);
            $image_data = $image;
            }
        }
    }

    if ($image == null){
        $sql =("UPDATE `clients_acc` SET `cFirstname`='$firstname',`cMiddlename`='$middlename',`cLastname`='$lastname',`cUsername`='$username',`cDOB`='$dob',`cAddress`='$address',`cEmail`='$email',`cContactNumber`='$contactNum' WHERE `id`='$id'");
        if($conn->query($sql)){
            $_SESSION['status'] = "Profile Updated!";
            $_SESSION['status_text'] = " ";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_btn'] = "Done";
            header("Location: userAccount");
            exit (0);
        }
        else{
            $_SESSION['status'] = "Profile cannot be Updated!";
            $_SESSION['status_text'] = " ";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_btn'] = "Back";
            header("Location: userAccount");
        }
    }else{
        $sql =("UPDATE `clients_acc` SET `cFirstname`='$firstname',`cMiddlename`='$middlename',`cLastname`='$lastname',`cUsername`='$username',`cDOB`='$dob',`cAddress`='$address',`cEmail`='$email',`cContactNumber`='$contactNum',`cPicture`='$image_data' WHERE `id`='$id'");
        if($conn->query($sql)){
            move_uploaded_file($_FILES["image"]["tmp_name"], "images/uploads/".$_FILES["image"]["name"]);
            $_SESSION['status'] = "Profile & Image Updated!";
            $_SESSION['status_text'] = " ";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_btn'] = "Done";
            header("Location: userAccount");
            exit (0);
        }
        else{
            $_SESSION['status'] = "Profile cannot be Updated!";
            $_SESSION['status_text'] = " ";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_btn'] = "Back";
            header("Location: userAccount");
        }
    }
}

if (isset($_POST['changePS'])) {
    $current = filter_input(INPUT_POST,'currentPS');
    $new = filter_input(INPUT_POST,'newPS');
    $confirmNew = filter_input(INPUT_POST,'confirmNewPS');

    $check_current = "SELECT `cPassword` FROM `clients_acc` WHERE `cPassword` = '$current' LIMIT 1";
    $check_current_run = mysqli_query($conn, $check_current);

    if (mysqli_num_rows($check_current_run) > 0) {
        if ($new == $confirmNew) {
            $update_ps = "UPDATE `clients_acc` SET `cPassword` = '$new' WHERE `cPassword` = '$current' LIMIT 1";
            $update_ps_run = mysqli_query($conn, $update_ps);

            if ($update_ps_run) {
                $_SESSION['status'] = "Password Change!";
                $_SESSION['status_text'] = "You have changed your password.";
                $_SESSION['status_code'] = "success";
                $_SESSION['status_btn'] = "Done";
                header("Location: userAccount");
            }
        }else {
            $_SESSION['status'] = "Password Cannot Change!";
            $_SESSION['status_text'] = "Your Passwords doesn't match each other.";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_btn'] = "Back";
            header("Location: userAccount");
        }
    }else {
        $_SESSION['status'] = "Password Cannot Change!";
        $_SESSION['status_text'] = "Your current password doesn't match our Records";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: userAccount");
    }

}
?>
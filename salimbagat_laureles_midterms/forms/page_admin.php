<?php
include 'config.php';
session_start();
$admnN = $_SESSION['admin_name'];
if (!isset($_SESSION['admin_name'])) {
    header('location:form_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!--jquery cdn start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--jquery cdn end-->

    <!--popper cdn start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <!--bootstrap cdn end-->

    <!--bootstrap cdn start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!--bootstrap cdn end-->

    <!-- datatables css cdn start -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- datatables css cdn end -->

    <!--bootstrap & font-awesome icons cdn start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--bootstrap & font-awesome icons cdn end-->

    <!-- css start -->
    <link rel="stylesheet" href="../css/homepage.css">
    <!-- css end -->
</head>

<body>
    <!--Nav bar start-->
    <?php include('navbar.php')?>
    <!--Nav bar end-->
    <h3 class="d-flex justify-content-center">welcome <span style="color:crimson;"> <?php echo '&nbsp;' . $admnN; ?></span></h3>
    <!--//!Modals start -->
    <!--//?add data Modal start-->
    <?php include('add_dataModal.php')?>
    <!--//?add data Modal end-->

    <!--//?Delete Modal start -->
    <?php include('delete_confirm.php')?>
    <!--//?Delete Modal end -->

    <!--//?Update Modal start -->
    <?php include('update_form.php')?>
    <!--//?Update Modal end -->
    <!--//!Modals end -->

    <!--Table start-->
    <?php include('users_table.php')?>
    <!--Table end-->
    <!--javascript start-->
    <script src = "../server/function.js"></script>
    <!--javascript end-->

    <!-- add scripts into scripts.php start -->
    <?php
    include('../server/scripts.php');
    ?>
    <!-- add scripts into scripts.php start -->

    <!--Bootsrap JS cdn start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootsrap JS cdn end-->

    <!-- datatables js cdn start -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- datatables js cdn end -->


</body>

</html>
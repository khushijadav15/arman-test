<?php include '../Database/connect.php'; ?>

<?php
include '../function/function.php';

if (isset($_POST['submit'])) {

    //Fetch data from HTML Form
    $file_type = mysqli_real_escape_string($con, $_POST['file_type']);
    $file = $_FILES['file']; // Uncomment this line

    // print_r($file); 

    $target_directory = "../uploade/";
    $file_upload_status = upload_single_file_new($file, $target_directory);

    if ($file_upload_status['status'] == 200) {
        $file_name = $file_upload_status['message'];
        $stmt = $con->prepare("INSERT INTO `tbl_slider`(file_name, file_type) VALUES (?, ?)");
        $stmt->bind_param("ss", $file_name, $file_type);
        $result = $stmt->execute();

        if ($result) {
            echo "<script> alert('insert successfully')</script>";
        } else {
            echo "<script> alert('insert failed')</script>";
        }
    } else {
        echo "error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './import/head.php'; ?>
</head>

<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                Admin
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
                 Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                    <span>arman</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include './import/sidebar.php'; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Insert Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form custom_file_input">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="">
                                    <h4 class="card-title">Select File</h4>
                                </div>
                                <!-- <div class="input-group mb-3"> -->
                                <div class="form-group">
                                    <select class="form-control" name="file_type">
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                                <!-- </div> -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php include './import/script.php'; ?>

</body>

</html>

<?php

session_start();
//check user is logged or not
if (!isset($_SESSION['user_id'])) {
 header('Location: login.php');
 exit();

}

?>
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a class="has-arrow" href="index.php" aria-expanded="false"><i class="icon icon-single-04"></i><span
                        class="nav-text">Slider</span></a>

            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">About Us</span></a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Proporties Card</span></a>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Form Data</span></a>
            </li>

        </ul>
    </div>

</div>
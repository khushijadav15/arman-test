<?php include 'Database/connect.php'; ?>
<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>

    <div class="nav-bar">
        <a href="#home" class="active">Company</a>
        <a href="#home">Home</a>
        <a href="#property">Property</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact Us</a>
    </div>

    <div style="padding:25px 0">

        <?php
        $sql = "SELECT * FROM tbl_slider";
        $result = $con->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        ?>
        <swiper-container class="mySwiper" navigation="true">
            <?php foreach ($data as $item) { ?>
                <?php if ($item['file_type'] == 'image') { ?>
                    <swiper-slide><img src="images/<?php echo $item['file_name']; ?>" alt="slider_content"></swiper-slide>
                <?php } else { ?>
                    <swiper-slide><video src="images/<?php echo $item['file_name']; ?>?>" controls></video></swiper-slide>
                <?php }
            } ?>
        </swiper-container>
    </div>

    <div style="padding:25px 0">
        <section class="about-us">
            <div class="about">

                <?php
                $sql = "SELECT * FROM tbl_about_us";
                $result = $con->query($sql);
                $data = array();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                }
                ?>

                <?php foreach ($data as $item) { ?>
                    <img src="images/<?php echo $item['image']; ?>" class="pic">
                    <div class="text">
                        <h2>About Us</h2>
                        <p>
                            <?php echo $item['description']; ?>
                        </p>
                        <div class="data">
                            <a href="#" class="about-btn">Know More</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>


</body>

</html>
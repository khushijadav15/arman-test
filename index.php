<?php include 'Database/connect.php'; ?>
<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="nav-bar">
        <a href="#home" class="nav-logo">Company</a>
        <div class="align">
            <a href="#home">Home</a>
            <a href="#property">Property</a>
            <a href="#about">About Us</a>
            <a href="#contact">Contact Us</a>
        </div>
    </div>

    <div id="home" style="padding:25px 0">
        <h2 class="heading">Our Creative Works</h2>
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

        <div id="about" style="padding:25px 0">
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

        <?php
            $sql = "SELECT * FROM tbl_properties_cards";
            $result = $con->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            ?>
        <div id="property" style="padding:25px 0">
            <h2 class="heading">Property Cards</h2>
            <div class="head-card">
            <?php foreach ($data as $item) { ?>
                <div class="card">
                    <img src="images/<?php echo $item['image']; ?>" alt="Property Image" style="width:100%">
                    <div class="container">
                        <h2><b><?php echo $item['name']; ?></b></h2>
                        <p><?php echo $item['area']; ?></p>
                        <p><?php echo $item['price']; ?></p>
                        <i class="fa fa-home"></i>
                        <i class="fa fa-clock"></i>
                        <i class="fa fa-car"></i><br>
                        <button class="about-btn">Know More</button>
                    </div>
                </div>
            <?php } ?>   
            </div>
        </div>



       
        <div id="contact" style="padding:25px 0">
            <h2 class="heading">Contact us</h2>
            <section class="contact-us" id="contact-section">
                <form id="contact" action="" method="post">

                    <div class="inputField">
                        <input type="name" name="name" id="name" placeholder="Your name" autocomplete="on" required>
                        <span class="valid_info_name"></span>
                    </div>

                    <div class="inputField">
                        <input type="Email" name="email" id="email" placeholder="Your email" required="" />
                        <span class="valid_info_email"></span>
                    </div>

                    <div class="inputField">
                        <textarea name="message" id="message" placeholder="Your message"></textarea>
                        <span class="valid_info_message"></span>
                    </div>

                    <div class="inputField btn">
                        <button type="submit" id="form-submit">Send a message</button>
                    </div>

                </form>
            </section>
        </div>

        <div style="padding:25px 0">
            <footer class="footer">
                <div class="footer__addr">
                    <h5 class="footer__logo">
                        <img src="images/logo.jpg" alt="logo">
                    </h5>
                </div>
                <ul class="footer__nav">
                    <li class="nav__item">
                        <h2 class="nav__title">Important Links</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Property</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <h2 class="nav__title">Reach Us</h2>

                        <ul class="nav__ul">
                            <li>
                                <a href="callto:9313852343">9313852343</a>
                            </li>

                            <li>
                                <a href="mailto:armanvaraiya2484@gmail.com">armanvaraiya2484@gmail.com</a>
                            </li>

                            <li>
                                <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo odio quo
                                    quos. Pariatur velit accusamus sequi sapiente, architecto voluptate.</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </footer>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>


</body>

</html>
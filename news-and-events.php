<?php
error_reporting(0);
include('admin/includes/config.php');

$id = $_GET['id'];
$heading = $_GET['heading'];

$sql = "SELECT * from news where id=$id ";
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo ($userArr[0]->heading); ?> | MetaValley TBI</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap"
        rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link href="css/aos.css" rel="stylesheet">

    <link href="css/templatemo-nomad-force.css" rel="stylesheet">
    <!--

TemplateMo 567 Nomad Force

https://templatemo.com/tm-567-nomad-force

-->
</head>
<link href="images/favi.jpg" rel="icon" />

<body>

    <main>

        <section class="hero" id="hero">
            <div class="heroText">
                <h1 class="news-detail-title text-white mt-lg-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <?php echo ($userArr[0]->category); ?>
                </h1>

                <!-- <div class="d-flex justify-content-center align-items-center">
                    <a href="#" class="text-secondary-white-color social-share-link">
                        <i class="bi-chat-square-fill me-1"></i>
                        128
                    </a>

                    <a href="#" class="social-share-link bi-bookmark-fill ms-3 me-4"></a>

                    <span>21 hours ago</span>
                </div> -->
            </div>

            <div class="videoWrapper">
                <img src="admin/uploads/<?php echo ($userArr[0]->image); ?>" class="img-fluid news-detail-image" alt="">
            </div>

            <div class="overlay"></div>
        </section>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img class="logo-size" src="images/portfolio/logo.png">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="events.php">Events</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="news-detail section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-10 mx-auto">
                        <h2 class="mb-0" data-aos="fade-up"><?php echo ($userArr[0]->heading); ?></h2>
                        <?php
                            $date = date_create($userArr[0]->date);
                            ?>
                        <span class="text-muted" data-aos="fade-up">Date :
                            <?php echo date_format($date, "d/m/Y"); ?></span>
                        <img class="img-fluid pt-5 mb-5" data-aos="fade-up"
                            src="admin/uploads/<?php echo ($userArr[0]->image); ?>">
                        <p class="me-4 justify-para" data-aos="fade-up"><?php echo ($userArr[0]->content); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h5 class="text-white">
                        <i class="bi-geo-alt-fill me-2"></i>
                        State of Rio de Janeiro, Brazil
                    </h5>

                    <a href="mailto:info@company.com" class="custom-link mt-3 mb-5">
                        info@company.com
                    </a>
                </div>

                <div class="col-6">
                    <p class="copyright-text mb-0">Copyright © Nomad Force 2021

                        <br><br>Design: <a href="https://templatemo.com/page/1" target="_parent">TemplateMo</a>
                    </p>

                </div>

                <div class="col-lg-3 col-5 ms-auto">
                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>
                </div>

            </div>
            </section>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
<?php }
?>
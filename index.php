<?php $root = $_SERVER['DOCUMENT_ROOT'] . '/chrishub' ?>
<!doctype HTML>
<html lang="en">
<head>
<?php
if (isset($_GET['title']) && !empty($_GET['title'])) {
    print "<title>Chrishub - {$_GET['title']}</title>";
} else {
    print "<title>Chrishub</title>";
}
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="app">
    <div class="top-bar">
        <div class="container">
            <a href="#">Home</a>
            <a href="#">Premium</a>
            <a href="#">Modelhub</a>
            <a href="#">Toys</a>
            <a href="#">Sexual Wellness</a>
            <a href="#">Insights</a>
            <a href="#">Sites</a>
            <a href="#">EN</a>
        </div>
    </div>
    <div id="nav">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $root ?>/logo.png" width="150" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <form class="form-inline my-2 my-lg-0 ml-3 mr-3">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search 9,800,000 videos..."
                           aria-label="Search 9,800,000 videos...">
                    <div class="d-inline searchbar-options">
                        <i class="fas fa-video"></i> <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="d-inline search">
                        <i class="fas fa-search"></i>
                    </div>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link btn-sm btn-secondary mr-3" href="#"><i class="fas fa-upload"></i> Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-sm btn-primary" href="#"><i class="fa fa-star"></i> Upgrade</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Porn videos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Live cams</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pornstars</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Meet &amp; fuck</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Community</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Photos &amp; Gifs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <?php
        if (preg_match('/\.php|\.html/', $_SERVER['PHP_SELF'])) {
            $uri = preg_replace('/chrishub|[\/]+|\.[a-z]+/', '', $_SERVER['REQUEST_URI']);
            $routes = ['index', 'video'];
            if (in_array($uri, $routes)) {
                include "views/$uri.html";
            }
        }
        ?>
    </div>
    <footer class="mt-auto">
        <div class="first-row py-3">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="row">
                            <div class="col-3">
                                <strong>Information</strong>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">DMCA</a></li>
                                    <li><a href="#">2257</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <strong>Work with us</strong>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#">Content Partners</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Webmasters</a></li>
                                    <li><a href="#">Model Program</a></li>
                                    <li><a href="#">Press</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <strong>Support and help</strong>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                    <li><a href="#">Feedback Forum</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <strong>Discover</strong>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#">Chrishub Blog</a></li>
                                    <li><a href="#">Insights Blog</a></li>
                                    <li><a href="#">Sexual Wellness Center</a></li>
                                    <li><a href="#">Mobile / Tablet</a></li>
                                    <li><a href="#">Visually impaired</a></li>
                                    <li><a href="#">More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-row py-3">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <i class="fab fa-twitter mr-3" style="font-size: 1.75rem"></i>
                        <i class="fab fa-instagram mr-3" style="font-size: 1.75rem"></i>
                        <i class="fab fa-youtube mr-3" style="font-size: 1.75rem"></i>
                        <i class="fab fa-reddit mr-3" style="font-size: 1.75rem"></i>
                        <i class="fab fa-discord" style="font-size: 1.75rem"></i>
                        <span class="float-right">&copy;Chrishub.com, 2019</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="<?php echo $root ?>/js.js"></script>
</body>
</html>
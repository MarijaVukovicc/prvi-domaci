<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Ordinacija Vukovic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <div class="wrapper">
        <div class="sidebar">
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="usluge.php">Usluge</a>
                    </li>
                    <li>
                        <a href="pacijenti.php">Pacijenti</a>
                    </li>
                    <li>
                        <a href="kartoni.php">Kartoni pacijenata</a>
                    </li>

                    <li>
                        <a href="administracija.php">Administracija</a>

                    </li>
                </ul>

            </nav>
        </div>

        <div id="content">
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="index.php"><img src="images/toothlogo.jpeg" width="100px" height="100px" alt="#" /><b>Vukovic</b> </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>
                                        <li class="dinone"><img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">+381 65 4433 555</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">vukovic-dental@gmail.com</a></li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <a href="#">MENU</a>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="slider_section banner_bg">
                <img src="pozadina.jpeg">
                <div class="container">
                    <div class="text_box">
                        <span>Ordinacija Vukovic</span>
                        <h1>Salon<br>
                za vase zube</h1>
                    </div>
                </div>
            </div>

            <div id="about" class="about">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="about_box">
                                <span>Ordinacija Vukovic</span>
                                <h2>Nesto<strong class="white"> o nama</strong></h2>
                                <p>Osnovani smo 2004 godine uz pomoc naseg najboljeg hirurga, koja je osmislila ceo koncept. Kod nas su usluge jeftine ali profesionalne jer zelimo da svi imaju zdrave zube. Mozete nas uvek posetiti i uveriti se u to.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="about_img">
                                <figure><img src="images/toothlogo.jpeg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pricing">
                <footer>
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="address">
                                        <h3 style="color: #FFFFFF;">Vukovic Dental</h3>
                                        <h3>Adresa</h3>
                                        <p>
                                            Vojvode Stepe 79
                                            <br> Email: vukovic-dental@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <ul class="lik">

                                        <li> <img src="images/fb.png" alt="#" /></li>
                                        <li> <img src="images/tw.png" alt="#" /></li>
                                        <li> <img src="images/you.png" alt="#" /></li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="container">
                                <p>© 2022 All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>

                </footer>
                <!-- end footer -->

            </div>

            <div class="overlay"></div>

            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/custom.js"></script>
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

            <script src="js/jquery-3.0.0.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#sidebar").mCustomScrollbar({
                        theme: "minimal"
                    });

                    $('#dismiss, .overlay').on('click', function() {
                        $('#sidebar').removeClass('active');
                        $('.overlay').removeClass('active');
                    });

                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').addClass('active');
                        $('.overlay').addClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });
            </script>

</body>

</html>
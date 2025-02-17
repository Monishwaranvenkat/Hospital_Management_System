<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1,  maximum-scale=1">
        <meta name="Description" content=""/>
        <meta name="author" content=""/>
        <title>Edit my Account</title>
        <meta name="robots" content=""/>
        <meta name="googlebot" content=""/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="css/styles.css" rel="stylesheet" media="screen">
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    </head>

    <body>

        <div id="layout">

            <header>
                <div class="container">
                    <div class="row">
                        <!--Logo-->
                        <div  class="logo">
                            <a href="appointments-reserved.php"><img src="img/logo.png" alt="logo"></a>
                        </div>
                        <!--Logo-->

                        <!--Header tools-->
                        <div  class="tools-top">
                            <!--Avatar-->
                            <div class="avatar-profile">
                                <div class="user-edit">
                                    <h4>Jeniffer Martinez,</h4>
                                    <a href="my-account.html">edit profile</a>
                                </div>
                                <div class="avatar-image">
                                    <img src="img/avatar-profile.jpg" alt="avatar profile" class="img-responsive">
                                    <a href="appointments-reserved.php" title="2 Notifications Pending">
                                        <span class="notifications">2</span>
                                    </a>
                                </div>
                            </div>
                            <!--Avatar-->

                            <ul class="tools-help">
                                <li><a href="help.html" title="Help" data-toggle="tooltip" data-placement="bottom"><i class="fa fa-question-circle"></i></a></li>
                                <li><a href="login.html" title="Logout"  data-toggle="tooltip" data-placement="bottom"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <!--Header tools-->
                    </div>
                </div>
            </header>

            <!--Menu-->
            <nav>
                <div class="container">
                    <h4 class="navbar-brand">menu</h4>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <li><i class="fa fa-list-alt"></i> <a href="appointments-reserved.php"> appointments reserved</a> </li>
                            <li> <i class="fa fa-address-book-o"></i> <a href="booked-calendar.html"> book appointment</a> </li>
                            <li> <i class="fa fa-file-text-o"></i> <a href="authorizations.html">Pending authorizations</a> </li>
                            <li> <i class="fa fa-files-o"></i> <a href="examinations.html">Result Examinations</a> </li>
                            <li class="active"> <i class="fa fa-pencil"></i> <a href="my-account.html">my account</a> </li>
                        </ul>
                        <ul class="nav navbar-nav visible-mobile">
                            <li> <a href="index.html">Home Landing Page</a> </li>
                            <li> <a href="blog.html">Blog</a> </li>
                            <li> <a href="single-post.html">Single Post</a> </li>
                            <li> <a href="login.html">Login Page</a> </li>
                            <li> <a href="register.html">Register Page</a> </li>
                            <li> <a href="forgot-pass.html">Forgot Password</a> </li>
                            <li> <a href="my-account.html">My Account</a> </li>
                            <li> <a href="help.html">Help Page </a></li>
                            <li> <a href="meet-doctors.html">Find Doctors</a> </li>
                            <li> <a href="privacy-policy.html">Privacy Policy</a> </li>
                            <li> <a href="modify-booked-calendar.html">Modify an Appointment</a> </li>
                            <li> <a href="appointments-reserved-empty.html">Appointments Empty</a> </li>
                            <li> <a href="404-page.html">Error Page - 404</a> </li>
                        </ul>

                        <div class="flat-mega-menu">
                            <ul class="collapse">
                                <li><a href="#">Extra Pages</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li> <a href="index.html">Home Landing Page</a> </li>
                                        <li> <a href="blog.html">Blog</a> </li>
                                        <li> <a href="single-post.html">Single Post</a> </li>
                                        <li> <a href="login.html">Login Page</a> </li>
                                        <li> <a href="register.html">Register Page</a> </li>
                                        <li> <a href="forgot-pass.html">Forgot Password</a> </li>
                                        <li> <a href="my-account.html">My Account</a> </li>
                                        <li> <a href="help.html">Help Page </a></li>
                                        <li> <a href="meet-doctors.html">Find Doctors</a> </li>
                                        <li> <a href="privacy-policy.html">Privacy Policy</a> </li>
                                        <li> <a href="modify-booked-calendar.html">Modify an Appointment</a> </li>
                                        <li> <a href="appointments-reserved-empty.html">Appointments Empty</a> </li>
                                        <li> <a href="404-page.html">Error Page - 404</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!--Menu-->

            <div class="container">
                <div class="main-container">
                    <!--Form-->
                    <div class="register-form edit-account">

                        <div class="form-login">
                            <form>
                                <!--Personal Information-->
                                <div class="row">

                                    <h3>Personal Information</h3>
                                    <hr>
                                    <div class="datapos">

                                        <!--select a document-->
                                        <div class="icon-data">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                        <select disabled class="disable">
                                            <option selected>Id Number</option>
                                            <option>Select a Document</option>
                                        </select>
                                        <!--select a document-->

                                        <!--name-->
                                        <div class="icon-data">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" placeholder="Johna">
                                        <!--name-->

                                        <!--phone-->
                                        <div class="icon-data">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="number" placeholder="090-192763">
                                        <!--phone-->

                                        <!--gender-->
                                        <label>
                                            <input type="radio" checked value="female"> <span>Female</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="male"> Male
                                        </label>
                                        <!--gender-->
                                    </div>

                                    <div class="datapos">
                                        <!--number document-->
                                        <div class="icon-data">
                                            <i class="fa fa-user-circle"></i>
                                        </div>
                                        <input type="number" disabled="disabled" class="disable" placeholder="09876543210">
                                        <!--number document-->

                                        <!--Last name-->
                                        <div class="icon-data">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" placeholder="Depp">
                                        <!--Last name-->

                                        <!--Alternative phone-->
                                        <div class="icon-data">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <input type="number" placeholder="090-192763">
                                        <!--Alternative phone-->

                                        <!--Avatar Profile-->
                                        <div class="avatar-profile">
                                            <label>Image Profile</label>
                                            <input type="file" accept="image/*">
                                        </div>
                                        <!--Avatar Profile-->
                                    </div>

                                </div>
                                <!--Personal Information-->

                                <!--Data Information-->
                                <div class="row">
                                    <h3>Data Information</h3>
                                    <div class="datapos">

                                        <!--Last name-->
                                        <div class="icon-data">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <input type="text" placeholder="JohnaDeepe">
                                        <!--Last name-->

                                        <!--number document-->
                                        <div class="icon-data">
                                            <i class="fa fa-user-circle"></i>
                                        </div>
                                        <input type="password" placeholder="Confirm Password">
                                        <!--number document-->
                                    </div>
                                    <div class="datapos">
                                        <!--Alternative phone-->
                                        <div class="icon-data">
                                            <i class="fa fa-user-circle"></i>
                                        </div>
                                        <input type="password" placeholder="Password">
                                        <!--Alternative phone-->
                                    </div>
                                </div>
                                <!--Data Information-->
                                <button class="btn btn-default">save changes</button>

                                <span class="help">
                                    <a href="#" class="help-link">¿Help?</a>
                                </span>
                            </form>
                        </div>
                    </div>
                    <!--Form-->
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="emergency-number">
                            <p class="phone">(01) + 8000123456</p>
                            <h5><i class="fa fa-phone-square"></i> emergency contact</h5>
                        </div>

                        <div class="emergency-number email">
                            <p>support@iwthemes.com</p>
                            <h5>online consultation <i class="fa fa-medkit"></i></h5>
                        </div>


                        <div class="help-people">
                            <hr class="divisor">

                            <!--Sponsors-->
                            <div class="sponsors">
                                <span><a href="#"><img src="img/sponsor-photodune.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="img/sponsor-tf.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="img/sponsor-photodune.png" alt="sponsor"></a></span>
                                <span><a href="#"><img src="img/sponsor-tf.png" alt="sponsor"></a></span>
                            </div>
                            <!--Sponsors-->
                        </div>
                    </div>
                </div>
            </footer>
            <!--Copyrights-->
            <div class="copyrights">
                <!--Meet Social-->
                <div class="meet-social">
                    <span><a href="https://www.facebook.com/IwThemesTF" target="_blank"><i class="fa fa-facebook-square"></i></a></span>
                    <span><a href="https://twitter.com/iwthemes" target="_blank"><i class="fa fa-twitter-square"></i></a></span>
                    <span><a href="https://www.youtube.com/channel/UCEb3nAep6tYiAkZpqi0Kzew" target="_blank"><i class="fa fa-youtube-square"></i></a></span>
                    <span><a href="#"><i class="fa fa-linkedin-square"></i></a></span>
                </div>
                <!--Meet Social-->
                <p>&copy; 2017 - <a href="http://iwthemes.com/" target="_blank">IwThemes</a>&reg; Envato<img src="img/envalogo.png" alt="envato brand">. All Rights Reserved. <a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <!--Copyrights-->

        </div>


        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-sprockets.js"></script>
        <!-- Main Functions-->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>

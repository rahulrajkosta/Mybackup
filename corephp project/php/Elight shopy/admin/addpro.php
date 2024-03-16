<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php
            include "link.php";
        ?>
         <style>
           a{
            text-decoration:none;
           }
           


        </style> 
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="header" id="home">
                        <div class="container">
                            <ul>
                                <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                                <li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up </a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +91 9569454126</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">rahulrajkosta@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0">
                    <div class="header-bot">
                        <div class="header-bot_inner_wthreeinfo_header_mid">
                            <div class="col-md-4 header-middle">
                                <form action="#" method="post">
                                        <input type="search" name="search" placeholder="Search here..." required="">
                                        <input type="submit" value=" ">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <!-- header-bot -->
                                <div class="col-md-4 logo_agile">
                                    <h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
                                </div>
                            <!-- header-bot -->
                            <div class="col-md-4 agileits-social top_content">
                                            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                                                                            <li class="share">Share On : </li>
                                                                                <li><a href="#" class="facebook">
                                                                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                                                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                                                                                <li><a href="#" class="twitter"> 
                                                                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                                                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                                                                                <li><a href="#" class="instagram">
                                                                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                                                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                                                                                <li><a href="#" class="pinterest">
                                                                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                                                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                                                                            </ul>



                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> 

                </div>
            </div>
            <div class="row p-0">
                <div class="col-3 p-0">
                    <div class="ban-top">
                        <div class="container">
                            <div class="top_nav_left">
                                <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav menu__list">
                                        <li class="menu__item"><a class="menu__link" href="admin.php">Dashboard</a></li>
                                        <li class=" menu__item"><a class="menu__link" href="about.php">Contact Manegement</a></li>
                                        <li class="active menu__item menu__item--current"><a class="menu__link" href="admin/addpro.php">Add Porduct</a></li>
                                        <li class=" menu__item"><a class="menu__link" href="admin/index.html">Product Menegement</a></li>
                                        <li class=" menu__item"><a class="menu__link" href="admin/index.html">Order Menegement</a></li>
                                        <li class=" menu__item"><a class="menu__link" href="admin/index.html">Change Password </a></li>
                                        <li class=" menu__item"><a class="menu__link" href="admin/index.html">Logout </a></li>
                                    </ul>
                                    </div>
                                </div>
                                </nav>	
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-9">



                </div>
            </div>
        </div>
    </body>
</html>
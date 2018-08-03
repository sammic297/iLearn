<?php $url = basename($_SERVER['PHP_SELF']); ?>
    <header id="home" class="header flex flex-middle <?php echo ($url != 'index.php') ? 'height400' : ''; ?>" role="banner">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="logo" href="index.php"><img src="img/logo.png" alt="iLearn logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="payment.php">Sign Up </a></li>
                            <li><a href="sign-in.php">Sign In</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header Content -->
            <div class="heading">
                <div class="row">
                    <?php if($url == 'index.php'){ ?>
                        <div class="col-md-6">
                            <h1 class="headline inverse"> <strong>Welcome to iLearn</strong></h1>
                            <h3 class="inverse"><strong>We have lots of resources to thrill you. <br> Signup below to catch all experience</strong></h3> <a href="payment.php" class="btn btn-primary" role="button" smooth>Signup Now</a> </div>
                        <?php }else if($url == 'payment.php'){ ?>
                            <div class="col-md-6">
                                <h1 class="headline inverse">Sign Up</h1> </div>
                            <?php }else{ ?>
                                <div class="col-md-6">
                                    <h2 class="headline inverse">My Profile</h2> </div>
                                <?php } ?>
                </div>
            </div>
        </div>
    </header>
<?php $url = basename($_SERVER['PHP_SELF']); ?>
    <header id="home" class="header flex flex-middle <?php echo ($url != 'index.php') ? 'height400' : ''; ?>" role="banner">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="logo" href="index.php"><img src="img/logo.png" alt="afrigold logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="sign-up.php">Sign Up / Sign In</a></li>
                            <li><a href="user-account.php">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header Content -->
            <div class="heading">
                <div class="row">
                    <?php if($url == 'index.php'){ ?>
                        <div class="col-md-6">
                            <h1 class="headline inverse">Trending Movies</h1>
                            <h3 class="inverse">We have all the best and trending Nollywood movies. Signup below to get all experience</h3> <a href="sign-up.php" class="btn btn-primary" role="button" smooth>Signup Now</a> </div>
                        <?php }else if($url == 'sign-up.php'){ ?>
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
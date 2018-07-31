<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iLearn | eBook hub</title>
    <meta name="keywords" content="eBooks, iLearn, pdfs, books, book-download">
    <meta name="description" content="Welcome to iLearn. Signup below to get all experience">
    <?php require_once('inc_title.php'); ?>
</head>

<body>
    <!-- Preloader -->
    <!--<div class="preloader">
        <div class="loader"> <span class="loading"></span> </div>
    </div>-->
    <!-- Header -->
    <?php require_once('inc_header.php'); ?>
        <!-- Main -->
        <main class="main" role="main">
            <!-- Section Pricing -->
            <section class="section pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <header class="section-header text-center">
                                <h3 class="section-title" id="#pricing">Pricing</h3> </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- if you use 4 cards - set this line at col-md-12 / or delete with previous row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="pricing-table">
                                        <li class="title">Monthly</li>
                                        <li class="price"><sup>$</sup>3.08</li>
                                        <li class="price"><sup>NGN</sup>1,112.17</li>
                                        <li class="description">Unlimited Access a whole Month</li>
                                        <li class="cta-button"><a class="btn btn-primary" href="https://paystack.com/pay/ny310j5nwq">Sign Up</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="pricing-table recommended">
                                        <li class="title">Yearly</li>
                                        <li class="price">36.48<sup>$</sup></li>
                                        <li class="price"><sup>NGN</sup>13,187.66</li>
                                        <li class="description">Yearly Unlimited Access</li>
                                        <li class="cta-button"><a class="btn btn-primary" href="https://paystack.com/pay/0amd-kwe75">Sign Up</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- GMap -->
            <section class="map-wrap">
                <div id="mymap" class="mymap"></div>
            </section>
            <!-- Section Contact -->
            <section id="contact" class="section contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-wrap">
                                <form action="php/contact-form.php" id="contact-form" role="form">
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="name">Name</label>
                                        <input class="form-control" name="name" id="name" type="text" placeholder="" value="" /> <span class="form-error"></span> </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="email">Email address</label>
                                        <input class="form-control" name="email" id="email" type="email" placeholder="" value="" /> <span class="form-error"></span> </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label" for="message">Message...</label>
                                        <textarea class="form-control" name="message" id="message" placeholder="" rows="3"></textarea>
                                    </div>
                                    <input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading..."> </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="address-wrap"> <address>
									<dl>
										<dt>Address</dt>
                                        <dd>Birmingham Court<br> 
                                            Plot 7B Udeco Medical Rd<br> 
                                            Chevy View Estate.<br> 
                                            Lekki, Lagos</dd>
										<dt>Phone</dt>
										<dd><span>+234 (0)806 079 2161</span></dd>
										<dt>Email</dt>
										<dd><a href="mailto:admin@iLearn.edu">admin@iLearn.edu</a></dd>
									</dl>
								</address> </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php require_once('inc_footer.php'); ?>
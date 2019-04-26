<?php
include('partials/header.php')
?>
    <!-- main content start-->
    <div id="page-wrapper">
        <!-- inner banner -->
        <div class="inner-banner">
        </div>
        <!-- //inner banner -->
        <!-- breadcrumbs -->
        <div class="inner-bc">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="dashboard.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        
                    </ol>
                </nav>
            </div>
        </div>
        <!-- //breadcrumbs -->
        <!--.testimonials-->
        <section class="wthree-row pb-1 w3-contact">
            <div class="container pt-5">
                <h3 class="stat-title card-title align-self-center">Welcome <?php echo $firstname?></h3>
                <div class="person-text  pull-right">
                    <img src="images/m.png" alt="" />
                    <h5>Anna</h5>
                    <i>from Glasgow, Scotland</i>
                </div>
               
                <div class="row">
                   <div class="col-md-2"></div>
                    <div class="col-offset-md-2 col-md-8  text-center view-testi">
                        <div class=" rel zmin">
                            <p class="pb-3">Welcome to CashExchangePro, The best platform for coin exchange</p>
                            <h6 class="py-2 mb-3">Do you have coins to exchange?</h6>
                            
                            <div class="row">
                                <div class="col-md-6 button-buy">
                                <button type="submit" class="btn btn-info btn-flat btn-block"><i class="fa fa-bitcoin"></i> Buy Coins</button>
                                </div>
                                <div class="col-md-6 button-buy">
                                <button type="submit" class="btn btn-info btn-flat btn-block"><i class="fa fa-bitcoin"></i>Sell Coins</button>
                                </div>
                            </div>   
                        </div>
                       
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- footer -->
<?php
include('partials/footer.php')
?>
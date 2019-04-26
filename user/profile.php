<?php
    include('partials/header.php')
?>
    <!-- //header-ends -->
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
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- //breadcrumbs -->

        <!-- contact -->
        <section class="wthree-row pt-2 pb-5 w3-contact">
            <div class="container py-sm-3 pt-0 pb-5">
                <div class="row contact-form ">
                     <div class="col-md-2"></div>
                    <div class="col-md-8 update-p wthree-form-left">
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <h5 class="text-dark mb-4 text-capitalize text-center">Update Your Profile</h5>
                            <form action="#" method="get" class="f-color">
                                <div class="form-group">
                                    <label for="contactusername">First Name</label>
                                    <input type="text" class="form-control" id="contactusername" required>
                                </div>
                                <div class="form-group">
                                    <label for="contactusername">Last Name</label>
                                    <input type="text" class="form-control" id="contactusername" required>
                                </div>
                                 <div class="form-group">
                                    <label for="contactusername">Email</label>
                                    <input type="text" class="form-control" id="contactusername" required>
                                </div>
                                 <div class="form-group">
                                    <label for="contactusername">Country</label>
                                    <input type="text" class="form-control" id="contactusername" required>
                                </div>
                                <div class="form-group">
                                    <label for="contactemail">Email</label>
                                    <input type="email" class="form-control" id="contactemail" required>
                                </div>
                               
                                <button type="submit" class="btn btn-info btn-flat">Submit</button>
                            </form>
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>
                    <!-- contact details -->
                   
                </div>
                <!-- //contact details container -->
            </div>
           
        </section>
        <!-- footer -->
<?php
     include('partials/footer.php')
?>
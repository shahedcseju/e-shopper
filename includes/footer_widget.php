<?php
    $query_result=$obj_app->select_all_published_manufacturer_info();

?>
<div class="footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Manufacturer List</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <?php while ($manufacturer_info=  mysqli_fetch_assoc($query_result)) { ?>
                        <li><a href="#"><?php echo $manufacturer_info['manufacturer_name']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Quock Shop</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">T-Shirt</a></li>
                        <li><a href="#">Mens</a></li>
                        <li><a href="#">Womens</a></li>
                        <li><a href="#">Gift Cards</a></li>
                        <li><a href="#">Shoes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Policies</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privecy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="#">Billing System</a></li>
                        <li><a href="#">Ticket System</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>About Shopper</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Store Location</a></li>
                        <li><a href="#">Affillate Program</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <div class="single-widget">
                    <h2>About Shopper</h2>
                    <form action="#" class="searchform">
                        <input type="text" placeholder="Your email address" />
                        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                        <p>Get the most recent updates from <br />our site and be updated your self...</p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
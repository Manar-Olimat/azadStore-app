<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    @include('includes.head')

</head>

<body id="body">

    @include('includes.header')


    <section class="products section">
        <div class="container">

            <div class="filter">
                <div class="filter-sidebar">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                            <i class="fa-regular fa-circle-xmark">
                            </i></a>
                        <form>
<div class="filter-data">
	<div class="filter-inner mb-3 form-check">
		<input class="form-check-input" type="checkbox" name="cat1" id="cat1">
		<label class="form-check-label" for="cat1">Dresses</label>

	</div>
	<div class="filter-inner mb-3 form-check">
		<input class="form-check-input" type="checkbox" name="cat2" id="cat2">

		<label class="form-check-label" for="cat2">Jackets</label>
	</div>
	<div class="filter-inner mb-3 form-check">
		<input class="form-check-label" type="checkbox" name="cat3" id="cat3">

		<label class="form-check-label" for="cat3">Sweeters</label>
	</div>
	<div class="filter-inner mb-3 form-check">
		<input class="form-check-input" type="checkbox" name="cat4" id="cat4">

		<label class="form-check-label" for="cat4">Shoes</label>
	</div>
	<div class="filter-inner mb-3 form-check">
		<input class="form-check-input" type="checkbox" name="cat5" id="cat5">

		<label class="form-check-label" for="cat5">Bags</label>
	</div>


</div>

                           
							

<div class="form-btn">
	<hr class="hr">
	<button class="btn" type="submit">Filter</button>
	<button class="btn" >Cancel</button>
</div>


                        </form>
                    </div>

                    <!-- Use any element to open the sidenav -->
                    <span onclick="openNav()" class="sidebar-tigger">
                        <button>
                            Filter
                            <i class="fa-solid fa-sliders"></i>
                        </button>
                    </span>
                </div>

		
				</div>
            </div>

            





        </div>
    </section>
<x-product-card />
            <x-product-card />
            <x-product-card />
            <x-product-card />
            <x-product-card />



    <footer class="footer section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-media">
                        <li>
                            <a href="https://www.facebook.com/themefisher">
                                <i class="tf-ion-social-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/themefisher">
                                <i class="tf-ion-social-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/themefisher">
                                <i class="tf-ion-social-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/themefisher/">
                                <i class="tf-ion-social-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-menu text-uppercase">
                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>
                        <li>
                            <a href="shop.html">SHOP</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing</a>
                        </li>
                        <li>
                            <a href="contact.html">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    <p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a
                            href="https://themefisher.com/">Themefisher</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>



</body>

</html>

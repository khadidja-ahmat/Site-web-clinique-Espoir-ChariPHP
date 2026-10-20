<?php // includes/site_footer.php - scripts du site visiteur ?>
    <script src="assets/site/js/jquery-2.2.4.min.js"></script>
    <script src="assets/site/js/bootstrap.bundle.min.js"></script>
    <script src="assets/site/js/jquery.meanmenu.min.js"></script>
    <script src="assets/site/js/jquery.nice-select.min.js"></script>
    <script src="assets/site/js/lightcase.js"></script>
    <script src="assets/site/js/owl.carousel.min.js"></script>
    <script src="assets/site/js/tilt.jquery.min.js"></script>
    <script src="assets/site/js/wow.min.js"></script>
    <script src="assets/site/js/jquery.easing.min.js"></script>
    <script src="assets/site/js/scrollwatch.js"></script>
    <script src="assets/site/js/sticky-header.js"></script>
    <script src="assets/site/js/waypoint.js"></script>
    <script src="assets/site/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/site/js/isotope.pkgd.min.js"></script>
    <?php if (defined('GOOGLE_MAPS_KEY') && GOOGLE_MAPS_KEY !== ''): ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= urlencode(GOOGLE_MAPS_KEY) ?>"></script>
    <?php endif; ?>
    <script src="assets/site/js/jquery-ui-slider-range.js"></script>
    <script src="assets/site/js/main.js"></script>
</body>
</html>

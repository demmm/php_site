<!-- Footer -->
        <footer id="footer">

            <!-- Icons -->
                <ul class="actions">
                    <!--<li><a href="https://twitter.com" class="icon fa-twitter" target="blank"><span class="label">Twitter</span></a></li>-->
                    <li><a href="https://www.facebook.com/Verstappenbouw/" class="icon fa-facebook" target="blank"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.linkedin.com/in/" class="icon fa-linkedin" target="blank"><span class="label">LinkedIn</span></a></li>
                    
                </ul>
                
            <!-- Menu -->
                <ul class="menu">
                    <li><span class="icon alt fa-phone"></span><span>(0475) 495404</span></li>
                    <li><span class="icon alt fa-envelope"></span><a href="mailto:info@verstappenbouw.nl">info@verstappenbouw.nl</a></li>
                    <li><span class="icon alt fa-home"></span><span>Vrijkenstraat 16, 6081 PA Roggel</span></li>
                    <li>&copy; VerstappenBouw <?php echo date("Y"); ?></li>
                    <!--<li><a href="mailto:veritasfarm@gmail.com">Design</a></li>-->
                    <li><?php $url = $_SERVER['REQUEST_URI'];
                    if ($url == '/') { ?>
                        <a href="mailto:veritasfarm@gmail.com">Design</a>
                    <?php } ?></li>
                </ul>

        <a href="#" class="crunchify-top"><i class="icon alt fa-chevron-up custom" ></i></a>
        </footer>

    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.poptrox.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
                        function myMap() {
                            var uluru = {lat: 51.261059, lng: 5.907545};
                            var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 15,
                            mapTypeId: google.maps.MapTypeId.HYBRID,
                            center: uluru
                            });
                            var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                            });
                        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        

	</body>
</html>


<footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">A158034 | Hairani</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="<?=base_url('vendor/assets/js/core/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('vendor/assets/js/core/popper.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('vendor/assets/js/core/bootstrap.min.js')?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=base_url('vendor/assets/js/plugins/bootstrap-switch.js')?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwFjRkZRbbkAdf5Hh4uaGBeLfj9DTdQ1s"></script>
<!--  Chartist Plugin  -->
<script src="<?=base_url('vendor/assets/js/plugins/chartist.min.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url('vendor/assets/js/plugins/bootstrap-notify.js')?>"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?=base_url('vendor/assets/js/light-bootstrap-dashboard.js?v=2.0.1')?>" type="text/javascript"></script>
<script src="<?=base_url('vendor/assets/js/demo.js')?>"></script>

<script type="text/javascript">
    $(document).ready(function() {

    	if(window.location.href.indexOf("dashboard") > -1) {
       		demo.initDashboardPageCharts();
    	}
    });
</script>

</html>
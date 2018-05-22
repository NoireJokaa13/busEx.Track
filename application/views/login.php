<!doctype html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BusEx.Track</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url('vendor/assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('vendor/assets/css/light-bootstrap-dashboard.css?v=2.0.1')?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=base_url('vendor/assets/css/login-form.css')?>" rel="stylesheet" />

    <style type="text/css">
        .wrapper-full-page {
            background-image: url(<?=base_url('vendor/assets/img/highway.jpg')?>);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="wrapper wrapper-full-page">

        <div class="full-page  section-image" data-color="black" data-image="<?=base_url('vendor/assets/img/full-screen-image-2.jpg')?>" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content" style="text-align: center;">
                    <?php if(isset($type)) { ?>
                    <div data-notify="container" class="col-11 col-sm-6 alert alert-<?php echo $type; ?> alert-with-icon" role="alert" data-notify-position="top-right" style="display: inline-block; margin: 0px auto; transition: all 0.5s ease-in-out; z-index: 1031; top: -50px;">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;"><i class="nc-icon nc-simple-remove"></i></button>
                        <span data-notify="icon" class="nc-icon nc-app"></span> <span data-notify="title"></span> <span data-notify="message"><?php echo $message; ?></span><a href="#" target="_blank" data-notify="url"></a>
                    </div>
                    <?php } ?>

                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="post" action="<?php echo base_url();?>login">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Login</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Ticket No</label>
                                            <input type="text" name="ticket_no" placeholder="Enter Ticket No From Passager" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-info btn-wd">Track Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
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
</body>

<script src="<?=base_url('vendor/assets/js/core/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('vendor/assets/js/core/popper.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('vendor/assets/js/core/bootstrap.min.js')?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=base_url('vendor/assets/js/plugins/bootstrap-switch.js')?>"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?=base_url('vendor/assets/js/plugins/chartist.min.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url('vendor/assets/js/plugins/bootstrap-notify.js')?>"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?=base_url('vendor/assets/js/light-bootstrap-dashboard.js?v=2.0.1')?>" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BusEx.Track | <?php echo uri_string(); ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=base_url('vendor/assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('vendor/assets/css/dataTable.css?v=2.0.1')?>" rel="stylesheet" />
    <link href="<?=base_url('vendor/assets/css/light-bootstrap-dashboard.css?v=2.0.1')?>" rel="stylesheet" />
    <link href="<?=base_url('vendor/assets/css/demo.css')?>" rel="stylesheet" />

    <style type="text/css">
        .sidebar[data-color="black"]:after, body>.navbar-collapse[data-color="black"]:after {
            opacity: .77;
        }

        ul li span {
            font-size: 16pt;
            font-style: italic;
        }

        ul li p span {
            position: absolute;
            left: 55px;
            margin-top: -35px;
        }
        .sidebar .nav li .nav-link {
            margin: -6px 15px;
        }

        @media (min-width: 768px) {
            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                margin-left: -15px;
                width: 80.333333%;
            }
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" style="background-image: url(<?=base_url('vendor/assets/img/sidebar-6.jpg')?>);" data-color="black">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:refresh();" class="simple-text">
                        TICKET NO <br>
                        <i class="nc-icon nc-pin-3"></i> <?php echo $_SESSION['ticket_no']['ticket_no']; ?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="active" id="destination">
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-map-big"></i>
                            <p>DESTINATION:</p><br>
                            <p><b><span><?php echo $_SESSION['ticket_no']['ticket_destination']; ?></span></b></p>
                        </a>
                    </li>
                    <li id="from">
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-compass-05"></i>
                            <p>FROM:</p><br>
                            <p><b><span id="from"><?php echo $_SESSION['ticket_no']['ticket_from']; ?></span></b></p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-sun-fog-29"></i>
                            <p>DATE:</p><br>
                            <p><b><span><?php echo date('d/m/Y', strtotime($_SESSION['ticket_no']['ticket_date'])); ?></span></b></p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-time-alarm"></i>
                            <p>TIME:</p><br>
                            <p><b><span><?php echo date('h:i A', strtotime($_SESSION['ticket_no']['ticket_time'])); ?></span></b></p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-bus-front-12"></i>
                            <p>BUS NAME:</p><br>
                            <p><b><span><?php echo $_SESSION['ticket_no']['ticket_bus_detail']; ?></span></b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-delivery-fast"></i>
                            <p>BUS PLAT NO:</p><br>
                            <p><b><span><?php echo $_SESSION['ticket_no']['plat_no']; ?></span></b></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="<?php echo uri_string(); ?>"> <?php echo strtoupper(uri_string()); ?> </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="maps" class="nav-link">
                                    <i class="nc-icon nc-square-pin" style="margin-top: 3px;"></i>
                                    <span class="d-lg-block">&nbsp; MAPS</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="logout">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
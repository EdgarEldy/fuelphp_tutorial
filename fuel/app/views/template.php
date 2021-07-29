<!DOCTYPE html>
<html>
<?php

use Fuel\Core\Asset;

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FUELPHP TUTORIAL</title>

    <?= Asset::css('bootstrap.min.css') ?>
    <?= Asset::css('bootstrap-table.css') ?>
    <?= Asset::css('styles.css') ?>
    <?= Asset::css('fontawesome.min.css') ?>
</head>

<body>
    <!-- Navabar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>FUELPHP |</span> TUTORIAL</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> <?php //echo $_SESSION['username'];
                                    ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">
                                    <svg class="glyph stroked male-user">
                                        <use xlink:href="#stroked-male-user"></use>
                                    </svg>
                                </a></li>
                            <li><a href="#">
                                    <svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg>
                                    Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>
    <!-- End navbar -->

    <!-- Sidebar -->
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <ul class="nav menu">
            <li class="active"><a href="#">
                    <svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg>
                    Home</a></li>
            <li><a href="#">
                    <svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar"></use>
                    </svg>
                    Orders</a></li>
            <li><a href="#">
                    <svg class="glyph stroked clock">
                        <use xlink:href="#stroked-clock"></use>
                    </svg>
                    Customers</a></li>
            <li class="parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
                            <use xlink:href="#stroked-chevron-down"></use>
                        </svg></span> Products
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="#">
                            <svg class="glyph stroked chevron-right">
                                <use xlink:href="#stroked-chevron-right">
                                </use>
                            </svg> All products
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <svg class="glyph stroked chevron-right">
                                <use xlink:href="#stroked-chevron-right">
                                </use>
                            </svg> Categories
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent">
                <a href="#">
                    <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down">
                            <use xlink:href="#stroked-chevron-down"></use>
                        </svg></span> Access control
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="#">
                            <svg class="glyph stroked chevron-right">
                                <use xlink:href="#stroked-chevron-right">
                                </use>
                            </svg> Roles
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <svg class="glyph stroked chevron-right">
                                <use xlink:href="#stroked-chevron-right">
                                </use>
                            </svg> Users
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="#">
                    <svg class="glyph stroked male-user">
                        <use xlink:href="#stroked-cancel"></use>
                    </svg>
                    Logout</a>
            </li>
        </ul>

    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
            <?= $content; ?>
        </div>
        <!--/.row-->
    </div>
    <!--/.main-->

    <?= Asset::js('jquery-3.4.1.min.js') ?>
    <?= Asset::js('bootstrap.min.js') ?>
    <?= Asset::js('bootstrap-table.js') ?>
    <?= Asset::js('fontawesome.min.js') ?>
    <?= Asset::js('lumino.glyphs.js') ?>
    <script>
        ! function($) {
            $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function() {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function() {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
    <script>
        $('#calendar').datepicker({});

        ! function($) {
            $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function() {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function() {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Panels With BlockUI</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <h4>Simple White box panels with BlockUI <br/><small>simple, give <code>block</code> class to <code> &lt;div class="panel"&gt; ... &lt;/div&gt; </code> and any id to the button for click event.</small></h4>
                    <hr> </div>
            </div>
            <!-- /.row -->
            <div id="domMessage" style="display:none;">
                <h4>We are processing your request.</h4> </div>
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a class="btn btn-default btn-outline m-b-20 m-r-20" id="blockbtn1">Block Panel</a><a class="btn btn-default btn-outline m-b-20" id="unblockbtn1">Unblock Panel</a>
                    <div class="panel panel-default block1">
                        <div class="panel-heading">Default Panel</div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                            <div class="panel-footer"> Panel Footer </div>
                        </div>
                    </div>
                    <hr> </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a class="btn btn-default btn-outline m-b-20 m-r-20" id="blockbtn2">Default Message</a><a class="btn btn-default btn-outline m-b-20" id="unblockbtn2">Unblock Panel</a>
                    <div class="panel panel-default block2">
                        <div class="panel-heading">Panel with action
                            <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                            <div class="panel-footer"> Panel Footer </div>
                        </div>
                    </div>
                    <hr> </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a class="btn btn-default btn-outline m-b-20 m-r-20" id="blockbtn3">Blue Overlay</a><a class="btn btn-default btn-outline m-b-20" id="unblockbtn3">Unblock Panel</a>
                    <div class="panel panel-default block3">
                        <div class="panel-heading">Title with small
                            <div class="panel-action">
                                <div class="dropdown"> <a class="dropdown-toggle" id="examplePanelDropdown" data-toggle="dropdown" href="#" aria-expanded="false" role="button">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="examplePanelDropdown" role="menu">
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i> Reply</a></li>
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i> Share</a></li>
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i> Delete</a></li>
                                        <li class="divider" role="presentation"></li>
                                        <li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                            <div class="panel-footer"> Panel Footer </div>
                        </div>
                    </div>
                    <hr> </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a class="btn btn-default btn-outline m-b-20 m-r-20" id="blockbtn4">Custom Style</a><a class="btn btn-default btn-outline m-b-20" id="unblockbtn4">Unblock Panel</a>
                    <div class="panel panel-info block4">
                        <div class="panel-heading"> Info Panel
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>
                    </div>
                    <hr> </div>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a class="btn btn-default btn-outline m-b-20 m-r-20" id="blockbtn5">Custom Message</a><a class="btn btn-default btn-outline m-b-20" id="unblockbtn5">Unblock Panel</a>
                    <div class="panel panel-success block5">
                        <div class="panel-heading"> Success Panel
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>
                    </div>
                    <hr> </div>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <a class="btn btn-default btn-outline m-b-20 m-r-20" id="blockbtn6">DOM Element as Message</a><a class="btn btn-default btn-outline m-b-20" id="unblockbtn6">Unblock Panel</a>
                    <div class="panel panel-primary block6">
                        <div class="panel-heading"> Primary Panel
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                        </div>
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--BlockUI Script -->
    <script src="../plugins/bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="application/javascript">
        // This is for BlockUI plugin demo
        $('#blockbtn1').click(function () {
            $('div.block1').block({
                message: null
            });
        });
        $('#blockbtn2').click(function () {
            $('div.block2').block({
                message: '<h3>Please Wait...</h3>'
                , css: {
                    border: '1px solid #fff'
                }
            });
        });
        $('#blockbtn3').click(function () {
            $('div.block3').block({
                message: '<h3>Please Wait...</h3>'
                , overlayCSS: {
                    backgroundColor: '#02bec9'
                }
                , css: {
                    border: '1px solid #fff'
                }
            });
        });
        $('#blockbtn4').click(function () {
            $('div.block4').block({
                message: '<p style="margin:0;padding:8px;font-size:24px;">Just a moment...</p>'
                , css: {
                    color: '#fff'
                    , border: '1px solid #f75b36'
                    , backgroundColor: '#f75b36'
                }
            });
        });
        $('#blockbtn5').click(function () {
            $('div.block5').block({
                message: '<h4><img src="../plugins/images/busy.gif" /> Just a moment...</h4>'
                , css: {
                    border: '1px solid #fff'
                }
            });
        });
        $('#blockbtn6').click(function () {
            $('div.block6').block({
                message: $('#domMessage')
                , css: {
                    border: '1px solid #fff'
                }
            });
        });
        $('#unblockbtn1').click(function () {
            $('div.block1').unblock();
        });
        $('#unblockbtn2').click(function () {
            $('div.block2').unblock();
        });
        $('#unblockbtn3').click(function () {
            $('div.block3').unblock();
        });
        $('#unblockbtn4').click(function () {
            $('div.block4').unblock();
        });
        $('#unblockbtn5').click(function () {
            $('div.block5').unblock();
        });
        $('#unblockbtn6').click(function () {
            $('div.block6').unblock();
        });
    </script>
    </body>

</html>
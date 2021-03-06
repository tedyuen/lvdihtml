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
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
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
                    <h4 class="page-title">Dashboard 1</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<!-- /.row -->
               <div class="row">
                   <!-- .col -->
                  <div class="col-md-7 col-sm-12 col-xs-12">
                     <div class="white-box">
                        <h3 class="box-title">Yearly Sales</h3>
                        <ul class="list-inline text-right">
                           <li>
                              <h5><i class="fa fa-circle m-r-5" style="color: #00b5c2;"></i>iPhone</h5>
                           </li>
                           <li>
                              <h5><i class="fa fa-circle m-r-5" style="color: #f75b36;"></i>iPad</h5>
                           </li>
                           <li>
                              <h5><i class="fa fa-circle m-r-5" style="color: #2c5ca9;"></i>iPod</h5>
                           </li>
                        </ul>
                        <div id="morris-area-chart" style="height: 356px;"></div>
                     </div>
                  </div>
                  <!-- /.col --> 
                   <div class="col-md-5 col-sm-6">
                       <div class="row">
                         <!-- .col -->
                          <div class="col-md-6 col-sm-12">
                            <div class="white-box text-center bg-success">
                                <h1 class="text-white counter">165</h1>
                                <p class="text-white">New items</p>
                            </div>
                          </div>
                          <!-- /.col -->
                          <!-- .col -->
                          <div class="col-md-6 col-sm-12">
                            <div class="white-box text-center bg-inverse">
                                <h1 class="text-white counter">2065</h1>
                                <p class="text-white">Feeds</p>
                            </div>
                          </div>
                          <!-- /.col -->
                          <!-- .col -->
                          <div class="col-md-6 col-sm-12">
                            <div class="white-box text-center bg-info">
                                <h1 class="counter text-white">465</h1>
                                <p class="text-white">Reviews</p>
                            </div>
                          </div>
                          <!-- /.col -->
                          <!-- .col -->
                          <div class="col-md-6 col-sm-12">
                             <div class="white-box text-center bg-danger">
                                    <h1 class="text-white counter">6555</h1>
                                    <p class="text-white">Customers</p>
                                </div>
                          </div>
                          <!-- /.col -->
                          <!-- .col -->
                          <div class="col-md-12 col-sm-12">
                             <div class="white-box">
                                    <h3 class="box-title">Revenue of the site</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-folder-alt text-danger"></i></li>
                                        <li class="text-right"><span class="counter">36411</span></li>
                                    </ul>
                                </div>
                          </div>
                          <!-- /.col -->
                       </div>
                   </div> 
                   
               </div>
               <!--row -->
               
               <div class="row">
                  
                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                     <div class="white-box m-b-15">
                        <h3 class="box-title">Tax Deduction</h3>
                        <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                              <h1 class="text-info">$647</h1>
                              <p class="text-muted">APRIL 2016</p>
                              <b>(150 Sales)</b> 
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                              <div id="sparkline2dash" class="text-center"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                     <div class="white-box m-b-15">
                        <h3 class="box-title">Shipment</h3>
                        <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                              <h1 class="text-megna">$347</h1>
                              <p class="text-muted">APRIL 2016</p>
                              <b class="">(150 Sales)</b> 
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                              <div id="sales1" class="text-center"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                     <div class="white-box m-b-15">
                        <h3 class="box-title">Revenue Generate</h3>
                        <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                              <h1 class="text-danger">$647</h1>
                              <p class="text-muted">APRIL 2016</p>
                              <b>(150 Sales)</b> 
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                              <div id="sparkline2dash2" class="text-center"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
                     <div class="white-box m-b-15">
                        <h3 class=" box-title">Order Got</h3>
                        <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                              <h1 class="">$347</h1>
                              <p class="text-muted">APRIL 2016</p>
                              <b class="">(150 Sales)</b> 
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                              <div id="sales12" class="text-center"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- row -->
               <div class="row">
                  <div class="col-md-4 col-xs-12 col-sm-6">
                     <div class="white-box">
                        <h3 class="box-title">To Do List</h3>
                        <ul class="list-task list-group" data-role="tasklist">
                           <li class="list-group-item" data-role="task">
                              <div class="checkbox checkbox-info">
                                 <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                 <label for="inputSchedule"> <span>Schedule meeting</span> </label>
                              </div>
                           </li>
                           <li class="list-group-item" data-role="task">
                              <div class="checkbox checkbox-info">
                                 <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                 <label for="inputCall"> <span>Give Purchase report</span> <span class="label label-danger">Today</span> </label>
                              </div>
                           </li>
                           <li class="list-group-item" data-role="task">
                              <div class="checkbox checkbox-info">
                                 <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                 <label for="inputBook"> <span>Book flight for holiday</span> </label>
                              </div>
                           </li>
                           <li class="list-group-item" data-role="task">
                              <div class="checkbox checkbox-info">
                                 <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                 <label for="inputForward"> <span>Forward all tasks</span> <span class="label label-warning">2 weeks</span> </label>
                              </div>
                           </li>
                           <li class="list-group-item" data-role="task">
                              <div class="checkbox checkbox-info">
                                 <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                                 <label for="inputRecieve"> <span>Recieve shipment</span> </label>
                              </div>
                           </li>
                           <li class="list-group-item" data-role="task">
                              <div class="checkbox checkbox-info">
                                 <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                                 <label for="inputForward2"> <span>Important tasks</span> <span class="label label-success">2 weeks</span> </label>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4 col-xs-12 col-sm-6">
                     <div class="white-box">
                        <h3 class="box-title">You have 5 new messages</h3>
                        <div class="message-center">
                           <a href="#">
                              <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                              <div class="mail-contnet">
                                 <h5>Pavan kumar</h5>
                                 <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> 
                              </div>
                           </a>
                           <a href="#">
                              <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                              <div class="mail-contnet">
                                 <h5>Sonu Nigam</h5>
                                 <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> 
                              </div>
                           </a>
                           <a href="#">
                              <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                              <div class="mail-contnet">
                                 <h5>Arijit Sinh</h5>
                                 <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> 
                              </div>
                           </a>
                           <a href="#">
                              <div class="user-img"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                              <div class="mail-contnet">
                                 <h5>Genelia Deshmukh</h5>
                                 <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> 
                              </div>
                           </a>
                           <a href="#" class="b-none">
                              <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                              <div class="mail-contnet">
                                 <h5>Pavan kumar</h5>
                                 <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> 
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                     <div class="white-box">
                        <h3 class="box-title">Chat</h3>
                        <div class="chat-box">
                           <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                              <li>
                                 <div class="chat-image"> <img alt="male" src="../plugins/images/users/sonu.jpg"> </div>
                                 <div class="chat-body">
                                    <div class="chat-text">
                                       <h4>Sonu Nigam</h4>
                                       <p> Hi, All! </p>
                                       <b>10.00 am</b> 
                                    </div>
                                 </div>
                              </li>
                              <li class="odd">
                                 <div class="chat-image"> <img alt="Female" src="../plugins/images/users/genu.jpg"> </div>
                                 <div class="chat-body">
                                    <div class="chat-text">
                                       <h4>Genelia</h4>
                                       <p> Hi, How are you Sonu? ur next concert? </p>
                                       <b>10.03 am</b> 
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="chat-image"> <img alt="male" src="../plugins/images/users/ritesh.jpg"> </div>
                                 <div class="chat-body">
                                    <div class="chat-text">
                                       <h4>Ritesh</h4>
                                       <p> Hi, Sonu and Genelia, </p>
                                       <b>10.05 am</b> 
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Say something"> <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">Send</button>
                                    </span> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.row -->
               <!--/.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Order Status</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Order date</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tracking Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53431</a></td>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                                            <td>$45.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53432</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$245.30</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53433</a></td>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                                            <td>$38.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53434</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                                            <td>$77.99</td>
                                            <td class="text-center">
                                                <div class="label label-table label-info">Shipped</div>
                                            </td>
                                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link"> Order #53435</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                                            <td>$18.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-success">Paid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link">Order #53437</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                                            <td>$658.00</td>
                                            <td class="text-center">
                                                <div class="label label-table label-danger">Refunded</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)" class="btn-link">Order #536584</a></td>
                                            <td>Scott S. Calabrese</td>
                                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                                            <td>$45.58</td>
                                            <td class="text-center">
                                                <div class="label label-table label-warning">Unpaid</div>
                                            </td>
                                            <td class="text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Welcome to Pixel admin'
                , text: 'Use the predefined ones, or specify a custom position object.'
                , position: 'top-right'
                , loaderBg: '#ff6849'
                , icon: 'info'
                , hideAfter: 3500
                , stack: 6
            })
        });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    </body>

</html>
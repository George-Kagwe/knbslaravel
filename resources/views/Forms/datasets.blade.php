<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KNBS </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>KNBS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div> -->
              <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
 
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
                   <li><a href="{{ route('Finance/home') }}"><i class="fa fa-money"></i>Public Finance</a></li>
                    <li><a href="{{ route('Education/home') }}"><i class="fa fa-money"></i>Education</a></li>
                    <li><a href="{{ route('Health/home') }}"><i class="fa fa-money"></i>Public Health</a></li>
                     <li><a href="{{ route('Agriculture/home') }}"><i class="fa fa-money"></i>Agriculture</a></li>
                    <li><a href="{{ route('Population/home') }}"><i class="fa fa-money"></i>Population</a></li>
                    <li><a href="{{ route('Governance/home') }}"><i class="fa fa-money"></i>Governance</a></li>
                    <li><a href="{{ route('ICT/home') }}"><i class="fa fa-money"></i>ICT</a></li>
                     <li><a href="{{ route('Environment/home') }}"><i class="fa fa-money"></i>Environment And <br>Natural Resources</a></li>
                    <li><a href="{{ route('Manufacturing/home') }}"><i class="fa fa-money"></i>Manufacturing</a></li>
                    <li><a href="{{ route('Energy/home') }}"><i class="fa fa-money"></i>Energy</a></li>
                     <li><a href="{{ route('Labour/home') }}"><i class="fa fa-money"></i>Labour</a></li>
                    <li><a href="{{ route('CPI/home') }}"><i class="fa fa-money"></i>Consumer Price Index</a></li>
                    <li><a href="{{ route('Administrative/home') }}"><i class="fa fa-money"></i>Administrative and Political</a></li>
                     <li><a href="{{ route('Trade/home') }}"><i class="fa fa-money"></i>Trade</a></li>
                    <li><a href="{{ route('Tourism/home') }}"><i class="fa fa-money"></i>Tourism</a></li>
                    <li><a href="{{ route('Building/home') }}"><i class="fa fa-money"></i>Building and Construction</a></li>
                    <li><a href="{{ route('Money/home') }}"><i class="fa fa-money"></i>Money and Banking</a></li>
                     <li><a href="{{ route('Transport/home') }}"><i class="fa fa-money"></i>Transport</a></li>
                     <li><a href="{{ route('Poverty/home') }}"><i class="fa fa-money"></i>Poverty</a></li>
                   <li><a href="{{ route('Housing/home') }}"><i class="fa fa-money"></i>Housing</a></li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!--  <li><a href="javascript:;"> Profile</a></li> -->
                   <!--  <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li> -->
                    <li><a href="javascript:;">Help</a></li>
                   
                     <li> <a href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i>
                                    </a>


                      <form id="logout-form" action="" method="datasets" style="display: none;">
                                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="background:#ffffff; color:#333;">
          
                      <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                         
                                           <th>Sector Name</th>                                          
                                           <th>Report</th>
                                           <th>Coverage</th>
                                         
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($datasets as $datasets){?>
                                             <tr>
                                                <td>{{$datasets->sector_name}}</td>
                                                <td>{{$datasets->report}}</td>
                                                <td>{{$datasets->coverage}}</td>                                  

                                                <td>
                                                  <button class="btn btn-primary" onclick="location.href='{{ url($datasets->table_name) }}'">Update Dataset</button>
                                               
                                                </td>
                                              </tr>
                                             <?php }?>



                                      </tbody>

                                      <tfoot>
                                        <tr>
                                          <th>Sector Name</th>                                          
                                           <th>Report</th>
                                           <th>Coverage</th>
                                          
                                           <th style="width:85px;">Action
                                          </th>
                                         
                                        </tr>
                                      </tfoot>
                      </table>

              <script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
              <script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
              <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
              <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
              <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript">
                  $('#table_id').DataTable();
            </script>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
         <!--  <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>
  </body>
</html>
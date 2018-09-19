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
     <meta name="csrf-token" content="{{ csrf_token() }}">

         <style>

                  #snackbar {
                      visibility: hidden;
                      min-width: 250px;
                      margin-left: -125px;
                      background-color: #560027;
                      color: #fff;
                      text-align: center;
                      border-radius: 2px;
                      padding: 16px;
                      position: fixed;
                      z-index: 1;
                      left: 50%;
                      top: 30px;
                      font-size: 17px;
                  }

                  #snackbar.show {
                      visibility: visible;
                      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
                      animation: fadein 0.5s, fadeout 0.5s 2.5s;
                  }

                  @-webkit-keyframes fadein {
                      from {top: : 0; opacity: 0;} 
                      to {top: 30px; opacity: 1;}
                  }

                  @keyframes fadein {
                      from {top: 0; opacity: 0;}
                      to {top: 30px; opacity: 1;}
                  }

                  @-webkit-keyframes fadeout {
                      from {top: 30px; opacity: 1;} 
                      to {top: 0; opacity: 0;}
                  }

                  @keyframes fadeout {
                      from {top: 30px; opacity: 1;}
                      to {top: 0; opacity: 0;}
                  }
    </style>
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
                    <li><a href="{{ route('Manufacturing/home') }}"><i class="fa fa-money"></i>Manufacturng</a></li>
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


                      <form id="logout-form" action="" method="POST" style="display: none;">
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
    
 <!-- page content -->
    <div class="right_col" role="main">
            <div class="container main"> 

                <div class="container" style="background:#ffffff">
                  <div id="snackbar">Success</div>

                  <div class="row">
                     <div class="col-lg-12">
                       
     
                              <h5><center>Tourism hotel occupancy by residence</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Kenyan Residents</th>
                                           <th>Permanent Occupants</th>
                                           <th>Germany</th>                      
                                           <th>Switzerland</th>
                                           <th>UK</th>
                                           <th>Italy</th>
                                           <th>France</th>
                                           <th>Scandinavia</th>
                                           <th>Other Europe</th>
                                           <th>Europe</th>
                                           <th>Uganda</th>
                                           <th>Tanzania</th>
                                           <th>EAC</th>                      
                                           <th>West Africa</th>
                                           <th>North Africa</th>
                                           <th>South Africa</th>
                                           <th>Other Africa</th>
                                           <th>Africa</th>
                                           <th>USA</th>
                                           <th>Canada</th>
                                           <th>Other America</th>
                                           <th>America</th>
                                           <th>Japan</th>                      
                                           <th>India</th>
                                           <th>Middle East</th>
                                           <th>Other Asia</th>
                                           <th>Asia</th>
                                           <th>Australia and New Zealand</th>
                                           <th>All Other Countries</th>
                                           <th>Total Occupied</th>
                                            <th>Total Available</th>
                                           <th>Occupancy by Percentage rate</th>
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($occupancy as $occupy){?>
                                             <tr>
                                                <td>{{$occupy->hotel_occupancy_id}}</td>
                                                <td>{{$occupy->kenya_residents}}</td>
                                                <td>{{$occupy->permanent_occupants}}</td>
                                                <td>{{$occupy->germany}}</td>
                                                <td>{{$occupy->switzerland}}</td>
                                                <td>{{$occupy->united_kingdom}}</td>
                                                <td>{{$occupy->italy}}</td>
                                                <td>{{$occupy->france}}</td>
                                                <td>{{$occupy->scandinavia}}</td>
                                                <td>{{$occupy->other_europe}}</td>
                                                <td>{{$occupy->europe}}</td>
                                                <td>{{$occupy->uganda}}</td>
                                                <td>{{$occupy->tanzania}}</td>
                                                <td>{{$occupy->east_and_central_africa}}</td>
                                                <td>{{$occupy->west_africa}}</td>
                                                <td>{{$occupy->north_africa}}</td>
                                                <td>{{$occupy->south_africa}}</td>
                                                <td>{{$occupy->other_africa}}</td>
                                                <td>{{$occupy->africa}}</td>
                                                <td>{{$occupy->usa}}</td>
                                                <td>{{$occupy->canada}}</td>
                                                <td>{{$occupy->other_america}}</td>
                                                <td>{{$occupy->america}}</td>
                                                <td>{{$occupy->japan}}</td>
                                                <td>{{$occupy->india}}</td>
                                                <td>{{$occupy->middle_east}}</td>
                                                <td>{{$occupy->other_asia}}</td>
                                                <td>{{$occupy->asia}}</td>
                                                <td>{{$occupy->australia_and_new_zealand}}</td>
                                                <td>{{$occupy->all_other_countries}}</td>
                                                <td>{{$occupy->total_occupied}}</td>
                                                <td>{{$occupy->total_available}}</td>
                                                <td>{{$occupy->occupancy_percentage_rate}}</td>
                                                <td>{{$occupy->year}}</td>
                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $occupy->hotel_occupancy_id;?>)">Update Record</button>
                                                </td> 
                                              </tr>
                                             <?php }?>
                                       </tbody>
                                      <tfoot> 
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Kenyan Residents</th>
                                           <th>Permanent Occupants</th>
                                           <th>Germany</th>                      
                                           <th>Switzerland</th>
                                           <th>UK</th>
                                           <th>Italy</th>
                                           <th>France</th>
                                           <th>Scandinavia</th>
                                           <th>Other Europe</th>
                                           <th>Europe</th>
                                           <th>Uganda</th>
                                           <th>Tanzania</th>
                                           <th>EAC</th>                      
                                           <th>West Africa</th>
                                           <th>North Africa</th>
                                           <th>South Africa</th>
                                           <th>Other Africa</th>
                                           <th>Africa</th>
                                           <th>USA</th>
                                           <th>Canada</th>
                                           <th>Other America</th>
                                           <th>America</th>
                                           <th>Japan</th>                      
                                           <th>India</th>
                                           <th>Middle East</th>
                                           <th>Other Asia</th>
                                           <th>Asia</th>
                                           <th>Australia and New Zealand</th>
                                           <th>All Other Countries</th>
                                           <th>Total Occupied</th>
                                            <th>Total Available</th>
                                           <th>Occupancy by Percentage rate</th>
                                           <th>Year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                         
                                        </tr>
                                      </tfoot>
                              </table>
                 
                      </div>
                                 
                  </div>
                                    
                </div>
                        
            </div>

          
              <script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
              <script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
              <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
              <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
              <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"></script>


            <!-- Sian starts here -->
            <script type="text/javascript">

              $(document).ready(function () {

                $('#form').bootstrapValidator({
                                      feedbackIcons: {
                                          valid: 'glyphicon glyphicon-ok',
                                          invalid: 'glyphicon glyphicon-remove',
                                          validating: 'glyphicon glyphicon-refresh'
                                      },
                                         fields: {
                                          europe: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of europe '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          permanent_occupants: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to permanent_occupants'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           germany: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to germany'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          switzerland: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to switzerland'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          united_kingdom: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that education centre '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          italy: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its italy '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           france: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from france'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          scandinavia: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say  Home '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          other_europe: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say other_europe '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                         
                                          kenya_residents: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Kenyan Residents'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           uganda: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to uganda'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          tanzania: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to tanzania'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          east_and_central_africa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that East and central Africa '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          west_africa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its west africa '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           north_africa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from north africa'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          south_africa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to South Africa '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          other_africa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to other Africa '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          africa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say africa '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                          usa: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of usa '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          canada: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to canada'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           other_america: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to other america'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          america: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to america'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          japan: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that trip to Japan '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          india: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its India '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           middle_east: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from middle east'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          other_asia: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that from other Asia '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          asia: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say asia '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                          australia_and_new_zealand: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of australia and new zealand '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          permanent_occupants: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to permanent_occupants'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           all_other_countries: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to all other countries'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          total_occupied: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to total occupied'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          total_available: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those  total occupied '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          occupancy_percentage_rate: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its occupancy percentage rate '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          year: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please choose year '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          }, 
                                          
                                      }
                                  });
                          $('#table_id').DataTable();
                      });
                      var save_method; //for save method string
                      var table;


                      function add()
                      {
                        save_method = 'add';
                        $('#form')[0].reset(); // reset form on modals
                        $('#modal_form').modal('show'); // show bootstrap modal
                      //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
                      }

                      function edit(id)
                      {
                        var url = '{{ route("fetchOccupancyByResidence", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.hotel_occupancy_id);
                              $('[name="kenya_residents"]').val(data.kenya_residents);
                              $('[name="permanent_occupants"]').val(data.permanent_occupants);  
                              $('[name="germany"]').val(data.germany);  
                              $('[name="switzerland"]').val(data.switzerland);
                              $('[name="united_kingdom"]').val(data.united_kingdom);
                              $('[name="italy"]').val(data.italy);
                              $('[name="france"]').val(data.france);
                              $('[name="scandinavia"]').val(data.scandinavia);
                              $('[name="other_europe"]').val(data.other_europe);
                              $('[name="europe"]').val(data.europe);
                              $('[name="uganda"]').val(data.uganda);
                              $('[name="tanzania"]').val(data.tanzania);  
                              $('[name="east_and_central_africa"]').val(data.east_and_central_africa);  
                              $('[name="west_africa"]').val(data.west_africa);
                              $('[name="north_africa"]').val(data.north_africa);
                              $('[name="south_africa"]').val(data.south_africa);
                              $('[name="other_africa"]').val(data.other_africa);
                              $('[name="africa"]').val(data.africa);
                              $('[name="usa"]').val(data.usa);
                              $('[name="canada"]').val(data.canada);     
                              $('[name="other_america"]').val(data.other_america);
                              $('[name="america"]').val(data.america);  
                              $('[name="japan"]').val(data.japan);  
                              $('[name="india"]').val(data.india);
                              $('[name="middle_east"]').val(data.middle_east);
                              $('[name="other_asia"]').val(data.other_asia);
                              $('[name="asia"]').val(data.asia);
                              $('[name="australia_and_new_zealand"]').val(data.australia_and_new_zealand);
                              $('[name="all_other_countries"]').val(data.all_other_countries);
                              $('[name="total_occupied"]').val(data.total_occupied);     
                              $('[name="total_available"]').val(data.total_available);
                              $('[name="permanent_occupants"]').val(data.permanent_occupants);  
                              $('[name="occupancy_percentage_rate"]').val(data.occupancy_percentage_rate);  
                              $('[name="year"]').val(data.year);                                      
                              $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                              $('.modal-title').text('Edit  details'); // Set title to Bootstrap modal title

                          },
                          error: function (jqXHR, textStatus, errorThrown)
                          {
                              alert('Error get data from ajax');
                          }
                      });
                      }




 
                      function save()
                      {
                        var url;

                        if(save_method == 'add')
                        {
                            url = "{{ route('storeOccupancyByResidence') }}";

                        }
                        else
                        {
                           
                         url = "{{ route('updateOccupancyByResidence') }}";
                        
                        }
                          
                      
                         // ajax adding data to database
                         var data = $("#form").serialize();
                         console.log(data);

                            $.ajax({
                              headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                  },
                              url : url,
                              type: "POST",
                              data: data,
                              dataType: "JSON",
                              success: function(result)
                              {
                       
                              if(result.errors)
                                  {
                        jQuery('.alert-danger').html('');

                        jQuery.each(result.errors, function(key, value){
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>'+value+'</li>');
                        });
                    }
                    else
                    {
                        jQuery('.alert-danger').hide();
                         $('#open').hide();
                         $('#myModal').modal('hide');
                         $('#modal_form').modal('hide');
                         location.reload();// for reload a page
                         myFunction();
                    }


                          
                          }});}

                     

                      function myFunction() {
                              var x = document.getElementById("snackbar");
                              x.className = "show";
                              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
                       }

                    

                  


            </script>

              <!-- Bootstrap modal -->
              <div class="modal fade" id="modal_form" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add New Record</h3>
                  </div>
                  <div class="modal-body form">
                      <form action="#" id="form" class="form-horizontal">
                        <div class="alert alert-danger" style="display:none;"></div>
                            <input type="hidden" value="" name="id"/>
                            <div class="form-body">
                                           
                              <div class="form-group">
                                <label class="control-label col-md-3">permanent occupants</label>
                                <div class="col-md-9">
                                  <input name="permanent_occupants"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">germany</label>
                                <div class="col-md-9">
                                  <input name="germany"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">switzerland</label>
                                <div class="col-md-9">
                                  <input name="switzerland"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">UK</label>
                                <div class="col-md-9">
                                  <input name="united_kingdom"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">italy</label>
                                <div class="col-md-9">
                                  <input name="italy"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">scandinavia</label>
                                <div class="col-md-9">
                                  <input name="scandinavia"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">france</label>
                                <div class="col-md-9">
                                  <input name="france"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">south_africa</label>
                                <div class="col-md-9">
                                  <input name="other_europe"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">europe</label>
                                <div class="col-md-9">
                                  <input name="europe"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">kenyan Residents</label>
                                <div class="col-md-9">
                                  <input name="kenya_residents"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">uganda</label>
                                <div class="col-md-9">
                                  <input name="uganda"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">tanzania</label>
                                <div class="col-md-9">
                                  <input name="tanzania"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">East and central Africa</label>
                                <div class="col-md-9">
                                  <input name="east_and_central_africa"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">West africa</label>
                                <div class="col-md-9">
                                  <input name="west_africa"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">North africa</label>
                                <div class="col-md-9">
                                  <input name="north_africa"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">South africa</label>
                                <div class="col-md-9">
                                  <input name="south_africa"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Other africa</label>
                                <div class="col-md-9">
                                  <input name="other_africa"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Africa</label>
                                <div class="col-md-9">
                                  <input name="africa"  class="form-control" type="text">
                                </div>
                              </div>



                              <div class="form-group">
                                <label class="control-label col-md-3">USA</label>
                                <div class="col-md-9">
                                  <input name="usa"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">Canada</label>
                                <div class="col-md-9">
                                  <input name="canada"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Other America</label>
                                <div class="col-md-9">
                                  <input name="other_america"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">America</label>
                                <div class="col-md-9">
                                  <input name="america"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">west africa</label>
                                <div class="col-md-9">
                                  <input name="west_africa"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Japan</label>
                                <div class="col-md-9">
                                  <input name="japan"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">India</label>
                                <div class="col-md-9">
                                  <input name="india"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Middle East</label>
                                <div class="col-md-9">
                                  <input name="middle_east"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Other Asia</label>
                                <div class="col-md-9">
                                  <input name="other_asia"  class="form-control" type="text">
                                </div>
                              </div>


                              <div class="form-group">
                                <label class="control-label col-md-3">asia</label>
                                <div class="col-md-9">
                                  <input name="asia"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Australia and New Zealand</label>
                                <div class="col-md-9">
                                  <input name="australia_and_new_zealand"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">All other countries</label>
                                <div class="col-md-9">
                                  <input name="all_other_countries"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Total Occupied</label>
                                <div class="col-md-9">
                                  <input name="total_occupied"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Total Available</label>
                                <div class="col-md-9">
                                  <input name="total_available"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Occupancy by percentage rate</label>
                                <div class="col-md-9">
                                  <input name="occupancy_percentage_rate"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Year</label>
                                <div class="col-md-9">
                                  <select class="form-control" id="year" name="year">
                                    <option value="">please select</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                      </form>
                  </div>
                      <div class="modal-footer">
                        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <!-- End Bootstrap modal -->

            <!-- Siana ends here -->
        
   </div>
  <!-- page content -->   

  <!-- page content -->
   


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
   <!-- <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script> --> -->
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
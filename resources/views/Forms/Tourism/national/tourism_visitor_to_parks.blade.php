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
                       
     
                              <h5><center>Tourism visitors to the park</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Nairobi</th>                      
                                           <th>Amboseli</th>
                                           <th>Nairobi Safari Walk</th>
                                           <th>Nairobi Mini Orphanage</th>
                                           <th>aberdare</th>
                                           <th>Tsavo West</th>
                                           <th>Tsavo East</th>
                                           <th>Lake Nakuru</th>
                                           <th>Masai mara</th>
                                           <th>Hallers Park</th>
                                           <th>Malindi Marine</th>                      
                                           <th>Lake Bogoria</th>
                                           <th>Meru</th>
                                           <th>Shimba Hills</th>
                                           <th>Mt kenya</th>
                                           <th>Samburu</th>
                                           <th>Kisite Mpunguti</th>
                                           <th>Mombasa Marine</th>
                                           <th>Watamu Marine</th>
                                           <th>Hells Gate</th>
                                           <th>Impala Sanctuary Kisumu</th>                      
                                           <th>mt Longonot</th>
                                           <th>other</th>
                                           <th>year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($visitors as $visit){?>
                                             <tr>
                                                <td>{{$visit->visitor_parks_id}}</td>
                                                <td>{{$visit->nairobi}}</td>
                                                <td>{{$visit->amboseli}}</td>
                                                <td>{{$visit->nairobi_safari_walk}}</td>
                                                <td>{{$visit->nairobi_mini_orphanage}}</td>
                                                <td>{{$visit->aberdare}}</td>
                                                <td>{{$visit->tsavo_west}}</td>
                                                <td>{{$visit->tsavo_east}}</td>
                                                <td>{{$visit->lake_nakuru}}</td>
                                                <td>{{$visit->masai_mara}}</td>
                                                <td>{{$visit->hallers_park}}</td>
                                                <td>{{$visit->malindi_marine}}</td>
                                                <td>{{$visit->lake_bogoria}}</td>
                                                <td>{{$visit->meru}}</td>
                                                <td>{{$visit->shimba_hills}}</td>
                                                <td>{{$visit->mt_kenya}}</td>
                                                <td>{{$visit->samburu}}</td>
                                                <td>{{$visit->kisite_mpunguti}}</td>
                                                <td>{{$visit->mombasa_marine}}</td>
                                                <td>{{$visit->watamu_marine}}</td>
                                                <td>{{$visit->hells_gate}}</td>
                                                <td>{{$visit->impala_sanctuary_kisumu}}</td>
                                                <td>{{$visit->mt_longonot}}</td>
                                                <td>{{$visit->other}}</td>
                                                <td>{{$visit->year}}</td>
                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $visit->visitor_parks_id;?>)">Update Record</button>
                                                </td> 
                                              </tr>
                                             <?php }?>
                                       </tbody>
                                      <tfoot> 
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Nairobi</th>                      
                                           <th>Amboseli</th>
                                           <th>Nairobi Safari Walk</th>
                                           <th>Nairobi Mini Orphanage</th>
                                           <th>Aberdare</th>
                                           <th>Tsavo West</th>
                                           <th>Tsavo East</th>
                                           <th>lake Nakuru</th>
                                           <th>Masai mara</th>
                                           <th>Hallers Park</th>
                                           <th>Malindi Marine</th>                      
                                           <th>Lake Bogoria</th>
                                           <th>Meru</th>
                                           <th>Shimba Hills</th>
                                           <th>Mt kenya</th>
                                           <th>Samburu</th>
                                           <th>Kisite Mpunguti</th>
                                           <th>Mombasa Marine</th>
                                           <th>Watamu Marine</th>
                                           <th>Hells Gate</th>
                                           <th>Impala Sanctuary Kisumu</th>                      
                                           <th>mt Longonot</th>
                                           <th>other</th>
                                           <th>year</th>
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
                                          lake_nakuru: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of lake nakuru '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                         
                                           nairobi: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to nairobi'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          amboseli: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to amboseli'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          nairobi_safari_walk: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of trip to Nairobi Safari Walk '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          nairobi_mini_orphanage: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its nairobi mini orphanage '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           aberdare: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from aberdare'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          tsavo_west: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that took trip to Tsavo West '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          tsavo_east: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say Tsavo East '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                         
                                         
                                           masai_mara: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to masai_mara'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          hallers_park: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to hallers park'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          malindi_marine: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that East and central samburu '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          lake_bogoria: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its Lake Bogoria '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           meru: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from Meru'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          shimba_hills: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Shimba Hills '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          mt_kenya: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Mt kenya '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          samburu: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say samburu '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                          kisite_mpunguti: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of kisite mpunguti '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          mombasa_marine: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to mombasa_marine'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           watamu_marine: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Watamu Marine'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          hells_gate: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to hells_gate'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          impala_sanctuary_kisumu: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that trip to impala sanctuary kisumu '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          mt_longonot: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its mt longonot '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           other: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from other'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          year: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please choose year'
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
                        var url = '{{ route("fetchVisitorToPark", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.visitor_parks_id);
                              $('[name="nairobi"]').val(data.nairobi);  
                              $('[name="amboseli"]').val(data.amboseli);
                              $('[name="nairobi_safari_walk"]').val(data.nairobi_safari_walk);
                              $('[name="nairobi_mini_orphanage"]').val(data.nairobi_mini_orphanage);
                              $('[name="aberdare"]').val(data.aberdare);
                              $('[name="tsavo_west"]').val(data.tsavo_west);
                              $('[name="tsavo_east"]').val(data.tsavo_east);
                              $('[name="lake_nakuru"]').val(data.lake_nakuru);
                              $('[name="masai_mara"]').val(data.masai_mara);
                              $('[name="hallers_park"]').val(data.hallers_park);  
                              $('[name="malindi_marine"]').val(data.malindi_marine);  
                              $('[name="lake_bogoria"]').val(data.lake_bogoria);
                              $('[name="meru"]').val(data.meru);
                              $('[name="shimba_hills"]').val(data.shimba_hills);
                              $('[name="mt_kenya"]').val(data.mt_kenya);
                              $('[name="samburu"]').val(data.samburu);
                              $('[name="kisite_mpunguti"]').val(data.kisite_mpunguti);
                              $('[name="mombasa_marine"]').val(data.mombasa_marine);     
                              $('[name="watamu_marine"]').val(data.watamu_marine);
                              $('[name="hells_gate"]').val(data.hells_gate);  
                              $('[name="impala_sanctuary_kisumu"]').val(data.impala_sanctuary_kisumu);  
                              $('[name="mt_longonot"]').val(data.mt_longonot);
                              $('[name="other"]').val(data.other);
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
                            url = "{{ route('storeVisitorToPark') }}";

                        }
                        else
                        {
                           
                         url = "{{ route('updateVisitorToPark') }}";
                        
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
                                <label class="control-label col-md-3">nairobi</label>
                                <div class="col-md-9">
                                  <input name="nairobi"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">amboseli</label>
                                <div class="col-md-9">
                                  <input name="amboseli"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Nairobi Safari Walk</label>
                                <div class="col-md-9">
                                  <input name="nairobi_safari_walk"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Nairobi Mini Orphanage</label>
                                <div class="col-md-9">
                                  <input name="nairobi_mini_orphanage"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Tsavo West</label>
                                <div class="col-md-9">
                                  <input name="tsavo_west"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Aberdare</label>
                                <div class="col-md-9">
                                  <input name="aberdare"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Tsavo East</label>
                                <div class="col-md-9">
                                  <input name="tsavo_east"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Lake Nakuru</label>
                                <div class="col-md-9">
                                  <input name="lake_nakuru"  class="form-control" type="text">
                                </div>
                              </div>

                               

                               <div class="form-group">
                                <label class="control-label col-md-3">masai mara</label>
                                <div class="col-md-9">
                                  <input name="masai_mara"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">hallers park</label>
                                <div class="col-md-9">
                                  <input name="hallers_park"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Malindi Marine</label>
                                <div class="col-md-9">
                                  <input name="malindi_marine"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Lake Bogoria</label>
                                <div class="col-md-9">
                                  <input name="lake_bogoria"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Meru</label>
                                <div class="col-md-9">
                                  <input name="meru"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Shimba Hills</label>
                                <div class="col-md-9">
                                  <input name="shimba_hills"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Mt kenya</label>
                                <div class="col-md-9">
                                  <input name="mt_kenya"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">samburu</label>
                                <div class="col-md-9">
                                  <input name="samburu"  class="form-control" type="text">
                                </div>
                              </div>



                              <div class="form-group">
                                <label class="control-label col-md-3">kisite mpunguti</label>
                                <div class="col-md-9">
                                  <input name="kisite_mpunguti"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">mombasa marine</label>
                                <div class="col-md-9">
                                  <input name="mombasa_marine"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Watamu Marine</label>
                                <div class="col-md-9">
                                  <input name="watamu_marine"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">hells gate</label>
                                <div class="col-md-9">
                                  <input name="hells_gate"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Lake Bogoria</label>
                                <div class="col-md-9">
                                  <input name="lake_bogoria"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">impala sanctuary kisumu</label>
                                <div class="col-md-9">
                                  <input name="impala_sanctuary_kisumu"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">mt longonot</label>
                                <div class="col-md-9">
                                  <input name="mt_longonot"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">other</label>
                                <div class="col-md-9">
                                  <input name="other"  class="form-control" type="text">
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
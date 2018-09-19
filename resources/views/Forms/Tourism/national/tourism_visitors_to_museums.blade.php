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
                       
     
                              <h5><center>Tourism visitors to the Museums</center></h5>
                              <br />
                              <button class="btn btn-danger" onclick="add()"><i class="glyphicon glyphicon-plus"></i> Add New Record</button>
                              <br />
                              <br />
                              <table id="table_id" class="table table-striped table-bordered" cellspacing="0"       width="100%">
                                      <thead>
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Nairobi Snake Park</th>                      
                                           <th>Fort Jesus</th>
                                           <th>kisumu</th>
                                           <th>Gede</th>
                                           <th>Kitale</th>
                                           <th>Lamu</th>
                                           <th>Jumba La Mtwana</th>
                                           <th>Kariandusi</th>
                                           <th>Hyrax Hill</th>
                                           <th>Karen Blixen</th>
                                           <th>Malindi</th>                      
                                           <th>Kilifi Mnarani</th>
                                           <th>Meru</th>
                                           <th>Kapenguria</th>
                                           <th>Swahili House</th>
                                           <th>Narok</th>
                                           <th>German Post</th>
                                           <th>Takwa Ruins</th>
                                           <th>Kabarnet</th>                      
                                           <th>year</th>
                                           <th style="width:85px;">Action
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php foreach($visitors as $visit){?>
                                             <tr>
                                                <td>{{$visit->visitor_museums_id}}</td>
                                                <td>{{$visit->nairobi_snake_park}}</td>
                                                <td>{{$visit->fort_jesus}}</td>
                                                <td>{{$visit->kisumu}}</td>
                                                <td>{{$visit->gede}}</td>
                                                <td>{{$visit->kitale}}</td>
                                                
                                                <td>{{$visit->lamu}}</td>
                                                <td>{{$visit->jumba_la_mtwana}}</td>
                                                <td>{{$visit->kariandusi}}</td>
                                                <td>{{$visit->hyrax_hill}}</td>
                                                <td>{{$visit->karen_blixen}}</td>
                                                <td>{{$visit->malindi}}</td>
                                                <td>{{$visit->kilifi_mnarani}}</td>
                                                <td>{{$visit->meru}}</td>
                                                <td>{{$visit->kapenguria}}</td>
                                                <td>{{$visit->swahili_house}}</td>
                                                <td>{{$visit->narok}}</td>
                                                <td>{{$visit->german_post}}</td>
                                                <td>{{$visit->takwa_ruins}}</td>
                                                <td>{{$visit->kabarnet}}</td>
                                                <td>{{$visit->year}}</td>
                                                <td>
                                                  <button class="btn btn-success" onclick="edit(<?php echo $visit->visitor_museums_id;?>)">Update Record</button>
                                                </td> 
                                              </tr>
                                             <?php }?>
                                       </tbody>
                                      <tfoot> 
                                        <tr>
                                           <th>ID</th>                                          
                                           <th>Nairobi Snake Park</th>                      
                                           <th>Fort Jesus</th>
                                           <th>kisumu</th>
                                           <th>Gede</th>
                                           <th>Kitale</th>
                                           <th>Lamu</th>
                                           <th>Jumba La Mtwana</th>
                                           <th>Kariandusi</th>
                                           <th>Hyrax Hill</th>
                                           <th>Karen Blixen</th>
                                           <th>Malindi</th>                      
                                           <th>Kilifi Mnarani</th>
                                           <th>Meru</th>
                                           <th>Kapenguria</th>
                                           <th>Swahili House</th>
                                           <th>narok</th>
                                           <th>German Post</th>
                                           <th>Takwa Ruins</th>
                                           <th>Kabarnet</th>                      
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
                                          kariandusi: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of Kariandusi '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                         
                                           nairobi_snake_park: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to nairobi Snake Park'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          fort_jesus: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to fort Jesus'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          kisumu: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of trip to kisumu '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          kitale: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its kitale '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                           gede: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those from gede'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          lamu: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that took trip to Lamu '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          jumba_la_mtwana: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say Jumba La Mtwana '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                         
                                         
                                           hyrax_hill: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to hyrax_hill'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          karen_blixen: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those trip to Karen Blixen'
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          malindi: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that East and central narok '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          kilifi_mnarani: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those trip to its Kilifi Mnarani '
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
                                          kapenguria: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Kapenguria '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          swahili_house: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Swahili House '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          narok: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of those that say narok '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          
                                          german_post: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of German Post '
                                                  },
                                                   numeric: {                                                    
                                                    message: 'Must be a number'
                                                }
                                              }
                                          },
                                          takwa_ruins: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please enter count of trip to Takwa Ruins'
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
                                          kabarnet: {
                                              validators: {
                                                  notEmpty: {
                                                      message: 'Please count of those that trip to Kabarnet '
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
                        var url = '{{ route("fetchVisitorToMuseum", ":id") }}';
                        
                        save_method = 'update';
                        $('#form')[0].reset(); // reset form on modals

                        //Ajax Load data from ajax
                        $.ajax({
                          url : url.replace(':id', id),
                          type: "GET",
                          dataType: "JSON",
                          success: function(data)
                          {

                              $('[name="id"]').val(data.visitor_museums_id);
                              $('[name="nairobi_snake_park"]').val(data.nairobi_snake_park);  
                              $('[name="fort_jesus"]').val(data.fort_jesus);
                              $('[name="kisumu"]').val(data.kisumu);
                              $('[name="kitale"]').val(data.kitale);
                              $('[name="gede"]').val(data.gede);
                              $('[name="lamu"]').val(data.lamu);
                              $('[name="jumba_la_mtwana"]').val(data.jumba_la_mtwana);
                              $('[name="kariandusi"]').val(data.kariandusi);
                              $('[name="hyrax_hill"]').val(data.hyrax_hill);
                              $('[name="karen_blixen"]').val(data.karen_blixen);  
                              $('[name="malindi"]').val(data.malindi);  
                              $('[name="kilifi_mnarani"]').val(data.kilifi_mnarani);
                              $('[name="meru"]').val(data.meru);
                              $('[name="kapenguria"]').val(data.kapenguria);
                              $('[name="swahili_house"]').val(data.swahili_house);
                              $('[name="narok"]').val(data.narok);
                              $('[name="german_post"]').val(data.german_post);
                              $('[name="takwa_ruins"]').val(data.takwa_ruins);     
                              $('[name="kabarnet"]').val(data.kabarnet);  
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
                            url = "{{ route('storeVisitorToMuseum') }}";

                        }
                        else
                        {
                           
                         url = "{{ route('updateVisitorToMuseum') }}";
                        
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
                                <label class="control-label col-md-3">nairobi snake park</label>
                                <div class="col-md-9">
                                  <input name="nairobi_snake_park"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">fort Jesus</label>
                                <div class="col-md-9">
                                  <input name="fort_jesus"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">kisumu</label>
                                <div class="col-md-9">
                                  <input name="kisumu"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Nairobi Mini Orphanage</label>
                                <div class="col-md-9">
                                  <input name="kitale"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Lamu</label>
                                <div class="col-md-9">
                                  <input name="lamu"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">gede</label>
                                <div class="col-md-9">
                                  <input name="gede"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Jumba La Mtwana</label>
                                <div class="col-md-9">
                                  <input name="jumba_la_mtwana"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">Kariandusi</label>
                                <div class="col-md-9">
                                  <input name="kariandusi"  class="form-control" type="text">
                                </div>
                              </div>

                               

                               <div class="form-group">
                                <label class="control-label col-md-3">Hyrax Hill</label>
                                <div class="col-md-9">
                                  <input name="hyrax_hill"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Karen Blixen</label>
                                <div class="col-md-9">
                                  <input name="karen_blixen"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Malindi</label>
                                <div class="col-md-9">
                                  <input name="malindi"  class="form-control" type="text">
                                </div>
                              </div>
                               <div class="form-group">
                                <label class="control-label col-md-3">Kilifi Mnarani</label>
                                <div class="col-md-9">
                                  <input name="kilifi_mnarani"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Meru</label>
                                <div class="col-md-9">
                                  <input name="meru"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Kapenguria</label>
                                <div class="col-md-9">
                                  <input name="kapenguria"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Swahili House</label>
                                <div class="col-md-9">
                                  <input name="swahili_house"  class="form-control" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3">narok</label>
                                <div class="col-md-9">
                                  <input name="narok"  class="form-control" type="text">
                                </div>
                              </div>



                              <div class="form-group">
                                <label class="control-label col-md-3">German Post</label>
                                <div class="col-md-9">
                                  <input name="german_post"  class="form-control" type="text">
                                </div>
                              </div>

                               <div class="form-group">
                                <label class="control-label col-md-3">Takwa Ruins</label>
                                <div class="col-md-9">
                                  <input name="takwa_ruins"  class="form-control" type="text">
                                </div>
                              </div>
                             
                               <div class="form-group">
                                <label class="control-label col-md-3">Kilifi Mnarani</label>
                                <div class="col-md-9">
                                  <input name="kilifi_mnarani"  class="form-control" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3">Kabarnet</label>
                                <div class="col-md-9">
                                  <input name="kabarnet"  class="form-control" type="text">
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